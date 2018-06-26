#!/usr/bin/env php
<?php

//globals;
$stop_on_validation_error = false;    // set to true to view exception details.
$skip_existing_files = true;        // set to false to overwrite existing files.

$symbol = @$argv[1];
$name = @$argv[2];
$project_url = @$argv[3];    // eg https://github.com/digibyte/digibyte

$coins = [
    'btc' => ['Bitcoin', 'https://github.com/bitcoin/bitcoin', 'master'],
    'dgb' => ['Digibyte', 'https://github.com/digibyte/digibyte', 'master'],
    'vtc' => ['Vertcoin', 'https://github.com/vertcoin-project/vertcoin-core', 'master'],
    'dash' => ['Dash', 'https://github.com/dashpay/dash', 'master'],
    'bch' => ['Bitcoin Cash', 'https://github.com/Bitcoin-ABC/bitcoin-abc', 'master'],
    'doge' => ['Dogecoin', 'https://github.com/dogecoin/dogecoin', 'master'],
    'btg' => ['Bitcoin Gold', 'https://github.com/BTCGPU/BTCGPU', 'master'],
    'ltc' => ['Litecoin', 'https://github.com/litecoin-project/litecoin', 'master'],
    'qtum' => ['Qtum', 'https://github.com/qtumproject/qtum', 'master'],
    'rdd' => ['Reddcoin', 'https://github.com/reddcoin-project/reddcoin', 'master'],
    'zec' => ['Zcash', 'https://github.com/zcash/zcash', 'master'],
    'blk' => ['Blackcoin', 'https://github.com/CoinBlack/blackcoin', 'master'],
    'mona' => ['Monacoin', 'https://github.com/monacoinproject/monacoin', 'master-0.15', 'master'],
    'nmc' => ['Namecoin', 'https://github.com/namecoin/namecoin-core', 'master'],
    'ppc' => ['Peercoin', 'https://github.com/peercoin/peercoin', 'master'],
];


if( $symbol && $name && $project_url ) {
    process_coin($symbol, $name, $project_url);
}
else if( $symbol ) {
    $ci = @$coins[strtolower($symbol)];
    if( !$ci ) {
        throw new Exception( "Coin $symbol not found.");
    }
    list($name, $url, $branch) = $ci;
    process_coin($symbol, $name, $url, $branch);
}
else {
    foreach($coins as $symbol => $ci) {
        list($name, $url, $branch) = $ci;
        process_coin($symbol, $name, $url, $branch);
    }
}

function process_coin($symbol, $name, $project_url, $branch) {
    
    echo "\nProcessing $symbol - $name\n";

    $outfile = sprintf( "%s/../coins/%s.json", __DIR__, strtolower($symbol));
    if(file_exists($outfile)) {
        if($GLOBALS['skip_existing_files']) {
            warn("file " . basename($outfile) . " exists. skipping $name");
            return;
        }
    }    
    
    @list($prefix, $path) = explode('github.com/', $project_url);
    $raw_urlbase = sprintf("https://raw.githubusercontent.com/%s/%s", $path, $branch);
    
    $data = [];
    $meta = ['symbol' => $symbol, 'name' => $name];
    
    
    $found = process_chainparams($data, $raw_urlbase, $meta);
    
    if( !$found ) {
        return;
    }

    process_chainparamsbase($data, $raw_urlbase);
    process_amounts($data, $raw_urlbase);
    process_message_magic($data, $raw_urlbase);
    process_bip44($data, $symbol);
    
    $json = json_encode($data, JSON_PRETTY_PRINT);
    
    file_put_contents($outfile, $json);
    
    echo "  |- Wrote $outfile\n";

}

function process_chainparams(&$data, $urlbase, $meta) {

    // note: chainparams.cpp was introduced around bitcoin v0.9.0.
    // older altcoins (eg Peercoin) may not have it and would
    // require a different parsing implementation.
    $chainparams_url = $urlbase . '/src/chainparams.cpp';
    echo "  |- Loading $chainparams_url\n";
    $buf = @file_get_contents($chainparams_url);
    
    if(!$buf) {
        warn("chainparams.cpp not found. Perhaps coin is too old?");
        return false;
    }
    
    list($garbage, $main, $testnet, $regtest) = explode("Params : public", $buf);

    process_chainparam_network( $data, 'main', $main, $meta);
    process_chainparam_network( $data, 'test', $testnet, $meta);
    process_chainparam_network( $data, 'regtest', $regtest, $meta);
    
    return @$data['main'] || @$data['test'] || @$data['regtest'];
}

function process_chainparam_network( &$gdata, $network, $buf, $meta) {

    $name = $meta['name'];
    $symbol = $meta['symbol'];
    
    $data = [];
    
    try {

        $suffix = $network == 'main' ? '' : ' - ' . ucfirst($network);
        $data['unit'] = strtoupper($symbol);
        $data['name'] = $name . $suffix;
        $data['testnet'] = $network == 'main' ? false : true;
        
        preg_match_all("/pchMessageStart\[.\] = (....)/", $buf, $matches) ||
        preg_match_all("/netMagic\[.\] = (....)/", $buf, $matches);  // bch just has to be special.  ;-)
        ne(@$matches[1][0]);
        $magic = '0x';
        foreach( array_reverse($matches[1]) as $val) {
            $magic .= str_replace('0x', '', $val);
        }
        
        unset($matches);
        preg_match("/nDefaultPort = (\d+)/", $buf, $matches);
        ne(@$matches[1]);
        $port = $matches[1];
    
        $data['protocol']['magic'] = $magic;
        $data['port'] = (int)$port;

        // rpcPort is usually in chainparamsbase.cpp, but sometimes
        // found in chainparams.cpp, eg blackcoin.
        unset($matches);
        preg_match("/nRPCPort = (\d+)/", $buf, $matches);
        if(@$matches[1]) {
            $data['portRpc'] = (int)$matches[1];
        }
        
        unset($matches);
        preg_match_all('/vSeeds.emplace_back\("(.*)".*\)/', $buf, $matches) ||
        preg_match_all('/vSeeds.push_back\(.*CDNSSeedData\("(.*)",.*"(.*)"[,\)]/sU', $buf, $matches);
        
        
        $data['seedsDns'] = @$matches[1];  // can be empty.
        if( @$matches[2]) {
            $data['seedsDns'] = array_merge($matches[1], $matches[2]);
        }
    
        unset($matches);
        preg_match("/base58Prefixes.SECRET_KEY.*>\(1,\s?(\d+)\)/", $buf, $matches) ||
        preg_match("/base58Prefixes.SECRET_KEY.*(0x..).;/", $buf, $matches);    // zcash is a special child.
        ne(@$matches[1]);
        array_shift($matches);
        $val = substr($matches[0],0,2) == '0x' ? zp(strtolower($matches[0])) : '0x' . zp(dechex($matches[0]));
        $data['versions']['private'] = $val;
        
        unset($matches);
        preg_match("/base58Prefixes.PUBKEY_ADDRESS.*>\(1,\s?(\d+)\);/", $buf, $matches) ||
        preg_match("/base58Prefixes.PUBKEY_ADDRESS.*0x(..),0x(..).;/", $buf, $matches);    // zcash is a special child.
        ne(@$matches[1]);
        array_shift($matches);
        $val = count($matches) == 1 ? '0x' . zp(dechex($matches[0])) : zp(strtolower('0x' . implode('', $matches)));
        $data['versions']['public'] = $val;
        
        //if(!$matches[1]) echo $buf; exit;
        
        unset($matches);
        preg_match("/base58Prefixes.SCRIPT_ADDRESS.*>\(1,\s?(\d+)\)/", $buf, $matches) ||
        preg_match("/base58Prefixes.SCRIPT_ADDRESS.*0x(..),0x(..).;/", $buf, $matches);    // zcash is a special child.
        ne(@$matches[1]);
        array_shift($matches);
        $val = count($matches) == 1 ? '0x' . zp(dechex($matches[0])) : zp(strtolower('0x' . implode('', $matches)));
        $data['versions']['scripthash'] = $val;
        
        unset($matches);
        preg_match("/base58Prefixes.EXT_PUBLIC_KEY.*\{0x(..),\s?0x(..),\s?0x(..),\s?0x(..)\}/", $buf, $matches) ||
        preg_match("/base58Prefixes.EXT_PUBLIC_KEY.*list_of.0x(..)..0x(..)..0x(..)..0x(..)/", $buf, $matches);
        ne(@$matches[1]);
        array_shift($matches);
        $data['versions']['bip32']['public'] = '0x' . zp(strtolower(implode('',($matches))));
    
        unset($matches);
        preg_match("/base58Prefixes.EXT_SECRET_KEY.*\{0x(..),\s?0x(..),\s?0x(..),\s?0x(..)\}/", $buf, $matches) ||
        preg_match("/base58Prefixes.EXT_SECRET_KEY.*list_of.0x(..)..0x(..)..0x(..)..0x(..)/", $buf, $matches);
        ne(@$matches[1]);
        array_shift($matches);
        $data['versions']['bip32']['private'] = '0x' . zp(strtolower(implode('',($matches))));
    
        unset($matches);
        preg_match('/bech32_hrp = "([^"]*)"/', $buf, $matches);
        // ne(@$matches[1]);  // can be null
        $data['bech32_hrp'] = @$matches[1];
    
        unset($matches);
    //    preg_match('/{     0, uint256S\("([^"]*)"\)}/', $buf, $matches);
        preg_match('/assert\(.*hashGenesisBlock == uint256S?\("0x(.*)"\)\);/', $buf, $matches);
        if( !@$matches[1] ) {
            // special case for BCH.  (and others?)
            if(preg_match('/assert\(consensus.hashGenesisBlock ==.*uint256S\("(.*)".*"(.*)"\)\);/sU', $buf, $matches)) {
                array_shift($matches);
                $matches[1] = implode('', $matches);
            }
        }
        
        ne(@$matches[1]);
        $data['hashGenesisBlock'] = @$matches[1];
    }
    catch(Exception $e) {
        if( $GLOBALS['stop_on_validation_error'] ) {
            throw($e);
        }
        warn($e->getMessage() . "  --> $network will be ignored.");
        return false;
    }
    
    $gdata[$network] = $data;
    return true;
}

function process_chainparamsbase(&$data, $urlbase) {

    // if already found, we can stop.
    if(@$data['main']['portRpc'] || @$data['test']['portRpc'] || @$data['regtest']['portRpc']) {
        return true;
    }
    
    $chainparams_url = $urlbase . '/src/chainparamsbase.cpp';
    echo "  |- Loading $chainparams_url\n";
    $buf = file_get_contents($chainparams_url);

    if(@$data['main']) {
        preg_match('/MakeUnique<CBaseChainParams>\("", (\d+)\)/', $buf, $matches);
        $data['main']['portRpc'] = (int)@$matches[1];
    }
    
    if(@$data['test']) {
        preg_match('/MakeUnique<CBaseChainParams>\("testnet3", (\d+)\)/', $buf, $matches);
        $data['test']['portRpc'] = (int)@$matches[1];
    }

    if(@$data['regtest']) {
        preg_match('/MakeUnique<CBaseChainParams>\("regtest", (\d+)\)/', $buf, $matches);
        $data['regtest']['portRpc'] = (int)@$matches[1];
    }

    // if above fails, try older/legacy formatting.
    if( !@$matches[1] ) {
        preg_match_all('/nRPCPort = (\d+);/', $buf, $matches);
        if(@$data['main']) {
            $data['main']['portRpc'] = (int)@$matches[1][0];
        }
        if(@$data['test']) {
            $data['test']['portRpc'] = (int)@$matches[1][1];
        }
        if(@$data['regtest']) {
            $data['regtest']['portRpc'] = (int)@$matches[1][2];
        }
    }
    
    return true;
}


function process_amounts(&$data, $urlbase) {

    $url = $urlbase . '/src/amount.h';
    echo "  |- Loading $url\n";
    $buf = @file_get_contents($url);
    if(!$buf) {
        $url = $urlbase . '/src/util.h';   // blackcoin has it in util.h.
        echo "  |- Loading $url\n";
        $buf = @file_get_contents($url);
    }

    preg_match('/static const .* COIN = (\d+);/', $buf, $matches) ||
    preg_match('/static const Amount COIN\((\d+)\);/', $buf, $matches);  // bch is different of course.
    ne(@$matches[1]);
    
    if(@$data['main']) {
        $data['main']['per1'] = @$matches[1] ? (int)@$matches[1] : null;
    }
    if(@$data['test']) {
        $data['test']['per1'] = @$matches[1] ? (int)@$matches[1] : null;
    }
    if(@$data['regtest']) {
        $data['regtest']['per1'] = @$matches[1] ? (int)@$matches[1] : null;
    }
    
    return true;
}

function process_message_magic(&$data, $urlbase) {

    $url = $urlbase . '/src/validation.cpp';
    echo "  |- Loading $url\n";
    $buf = @file_get_contents($url);
    if(!$buf) {
        $url = $urlbase . '/src/main.cpp';
        echo "  |- Loading $url\n";
        $buf = @file_get_contents($url);
    }

    preg_match('/const .*string strMessageMagic = "(.*)";/', $buf, $matches);
    ne(@$matches[1]);
    
    if(@$data['main']) {
        $data['main']['messageMagic'] = @$matches[1];
    }
    if(@$data['test']) {
        $data['test']['messageMagic'] = @$matches[1];
    }
    if(@$data['regtest']) {
        $data['regtest']['messageMagic'] = @$matches[1];
    }
    
    return true;
}


function process_bip44(&$data, $symbol) {
    
    static $bip44map = null;
    if(!$bip44map) {
        $fixmap = ['DSH' => 'DASH',
                   ];
        
        $url = 'https://raw.githubusercontent.com/bitcoinjs/bip44-constants/master/index.js';
        echo "  |- Loading $url\n";
        $buf = trim(file_get_contents($url));
        $lines = explode("\n", $buf);
        array_shift($lines);
        array_pop($lines);
        $bip44map = [];
        foreach($lines as $line) {
            $line = str_replace('"', '', $line);
            list($sym, $hex) = explode(':', $line);
            $val = trim($hex, ", ");
            $val = str_replace('0x8', '0x', $val);
            $sym = trim($sym);
            $sym = @$fixmap[$sym] ?: $sym;
            $bip44map[$sym] = hexdec($val);
        }
    }
    $bip44 = @$bip44map[strtoupper($symbol)];
    if( @$data['main']) {
        $data['main']['versions']['bip44'] = $bip44;
    }
    if( @$data['test']) {
        $data['test']['versions']['bip44'] = 1;     // testnets are always 1, per bip44 spec.
    }
    if( @$data['regtest']) {
        $data['regtest']['versions']['bip44'] = 1;
    }
}



// zero pads a string to an even length of characters.
// intended for hex numbers.
function zp($val) {
    if(strlen($val) % 2 != 0) {
        $val = '0' . $val;
    }
    return $val;
}

function ne($val) {
    if( $val === null ) {
        throw new Exception("required value not found.");
    }
}

function err($msg) {
    fprintf(STDERR, "  |- Error : $msg\n" );
}

function warn($msg) {
    fprintf(STDERR, "  |- Warning : $msg\n" );
}
