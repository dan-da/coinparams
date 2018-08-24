#!/usr/bin/env php
<?php

namespace coinparams\tools;

require_once __DIR__  . '/../vendor/autoload.php';
\strictmode\initializer::init();

define('EXCEPTION_CHAINPARAMS_NOTFOUND', 1001);

//globals;
$stop_on_main_validation_error = true;    // set to true to view exception details.
$stop_on_test_validation_error = false;    // set to true to view exception details.
$stop_on_regtest_validation_error = false;    // set to true to view exception details.
$skip_existing_files = true;        // set to false to overwrite existing files.
$use_projects_file = true;        // adds github projects from ./github-project-urls.json to coins list.

// Note: this script now relies on ../coins/meta/coinsmeta.json existing and to have an
//       entry for each item in $coins below.

$symbol = @$argv[1];
                 // $name, $url, $branch, $website_url, $announce_url, $whitepaper_url, $explorer_urls
$coins = [
    'btc'   => ['Bitcoin', 'https://github.com/bitcoin/bitcoin', 'master'],       // use branch/tag v0.8.1 for pre chainparams.cpp code.
    'dgb'   => ['Digibyte', 'https://github.com/digibyte/digibyte', 'master'],
    'vtc'   => ['Vertcoin', 'https://github.com/vertcoin-project/vertcoin-core', 'master'],
    'dash'  => ['Dash', 'https://github.com/dashpay/dash', 'master'],
    'bch'   => ['Bitcoin Cash', 'https://github.com/Bitcoin-ABC/bitcoin-abc', 'master'],
    'doge'  => ['Dogecoin', 'https://github.com/dogecoin/dogecoin', 'master'],
    'btg'   => ['Bitcoin Gold', 'https://github.com/BTCGPU/BTCGPU', 'master'],
    'ltc'   => ['Litecoin', 'https://github.com/litecoin-project/litecoin', 'master'],
    'qtum'  => ['Qtum', 'https://github.com/qtumproject/qtum', 'master'],
    'rdd'   => ['Reddcoin', 'https://github.com/reddcoin-project/reddcoin', 'master'],
    'zec'   => ['Zcash', 'https://github.com/zcash/zcash', 'master'],
    'blk'   => ['Blackcoin', 'https://github.com/CoinBlack/blackcoin', 'master'],
    'mona'  => ['Monacoin', 'https://github.com/monacoinproject/monacoin', 'master-0.15'],
    'nmc'   => ['Namecoin', 'https://github.com/namecoin/namecoin-core', 'master'],
    'bcd'   => ['Bitcoin Diamond', 'https://github.com/eveybcd/BitcoinDiamond', 'master'],
    'btcp'  => ['Bitcoin Private', 'https://github.com/BTCPrivate/BitcoinPrivate', 'master'],
    'kmd'   => ['Komodo', 'https://github.com/KomodoPlatform/komodo', 'master'],
    'xzc'   => ['ZCoin', 'https://github.com/zcoinofficial/zcoin', 'master'],
    'smart' => ['SmartCash', 'https://github.com/SmartCash/Core-Smart', '1.2.x'],
    'block' => ['Blocknet', 'https://github.com/BlocknetDX/BlockDX', 'master'],
    'zen'   => ['Zencash', 'https://github.com/ZencashOfficial/zen', 'master'],
    'pivx'  => ['PIVX', 'https://github.com/PIVX-Project/PIVX', 'master'],
    'game'  => ['GameCredits', 'https://github.com/gamecredits-project/GameCredits', 'master'],
    'grs'   => ['Groestlcoin', 'https://github.com/Groestlcoin/groestlcoin', 'master'],
    'zcl'   => ['ZClassic', 'https://github.com/z-classic/zclassic', 'master'],
    'bci'   => ['Bitcoin Interest', 'https://github.com/BitcoinInterestOfficial/BitcoinInterest', 'master'],   // bip44 not found.
    'xsn'   => ['Stakenet', 'https://github.com/X9Developers/XSN', 'master'],       // bip44 not found.
    'sxc'   => ['Sexcoin', 'https://github.com/sexcoin-project/sexcoin', 'master'], // bip44 not found
    'xpm'   => ['Primecoin', 'https://github.com/primecoin/primecoin', 'master'],  // no chainparams.cpp
    'lcc'   => ['Litecoin Cash', 'https://github.com/litecoincash-project/litecoincash', 'master'],
    'nav'   => ['Navcoin', 'https://github.com/NAVCoin/navcoin-core', 'master'],
    'btx'   => ['Bitcore', 'https://github.com/LIMXTEC/BitCore', '0.15'],
    'linda' => ['Linda', 'https://github.com/Lindacoin/Linda', 'master'],
    'emc2'  => ['Einsteinium', 'https://github.com/emc2foundation/einsteinium', 'master_EMC2_HardFork'],
    'uno'   => ['Unobtanium', 'https://github.com/unobtanium-official/Unobtanium', 'master'],
    'via'   => ['Viacoin', 'https://github.com/viacoin/viacoin', 'master'],
    'sls'   => ['SaluS', 'https://github.com/saluscoin/SaluS', 'master'],
    'bco'   => ['BridgeCoin', 'https://github.com/CryptoBridge/bridgecoin', 'master'],
    'rvn'   => ['Ravencoin', 'https://github.com/RavenProject/Ravencoin', 'master'],
    'gin'   => ['GINcoin', 'https://github.com/gincoin-dev/gincoin-core', 'master'],
    'ftc'   => ['Feathercoin', 'https://github.com/FeatherCoin/Feathercoin', 'master'],
    'ion'   => ['ION', 'https://github.com/ionomy/ion', 'master'],
    'flo'   => ['FlorinCoin', 'https://github.com/floblockchain/flo', 'flo-master'],
    'phr'   => ['Phore', 'https://github.com/phoreproject/Phore', 'master'],
    'html'  => ['HTMLCOIN', 'https://github.com/HTMLCOIN/HTMLCOIN', 'master-2.1'],
    'mnx'   => ['Minex', 'https://github.com/minexcoin/minexcoin', 'master'],
    'bitg'  => ['Bitcoin Green', 'https://github.com/bitcoingreen/bitcoingreen', 'master'],
    'pura'  => ['Pura', 'https://github.com/puracore/pura', 'master'],
    'xto'   => ['Tao', 'https://github.com/taoblockchain/tao-core', 'master'],
    'alqo'  => ['ALQO', 'https://github.com/alqocrypto/alqo', 'master'],
    'colx'  => ['ColossusXT', 'https://github.com/ColossusCoinXT/ColossusCoinXT', 'master'],
    'lux'   => ['LUXCoin', 'https://github.com/216k155/lux', 'master'],
    'crw'   => ['Crown', 'https://github.com/Crowndev/crown-core', 'master'],
    'dmd'   => ['Diamond', 'https://github.com/DMDcoin/Diamond', 'master'],
    'rads'  => ['Radium', 'https://github.com/RadiumCore/radium-0.11', 'master'],
    'moon'  => ['Mooncoin', 'https://github.com/mooncoincore/wallet', 'master'],
    'slr'   => ['SolarCoin', 'https://github.com/onsightit/solarcoin', 'master'],
    'dev'   => ['DeviantCoin', 'https://github.com/Deviantcoin/Source', 'master'],
    'rby'   => ['Rubycoin', 'https://github.com/rubycoinorg/rubycoin', 'master'],
    'clam'  => ['Clams', 'https://github.com/nochowderforyou/clams', 'master'],
    'xmy'   => ['Myriad', 'https://github.com/myriadteam/myriadcoin', 'master'],
    'bca'   => ['Bitcoin Atom', 'https://github.com/bitcoin-atom/bitcoin-atom', 'master'],
    'hxx'   => ['Hexx', 'https://github.com/hexxcointakeover/hexxcoin', 'master'],
    'sib'   => ['SIBCoin', 'https://github.com/ivansib/sibcoin', 'master'],
    'gam'   => ['Gambit', 'https://github.com/collincrypto/gambitcrypto', 'master'],  // no chainparams.cpp
    'bsd'   => ['BitSend', 'https://github.com/LIMXTEC/BitSend', 'master'],
    'bwk'   => ['Bulwark', 'https://github.com/bulwark-crypto/Bulwark', 'master'],
    'polis' => ['Polis', 'https://github.com/polispay/polis', 'master'],
    'au'    => ['AurumCoin', 'https://github.com/aurumcoin/Aurumcoin_AU', 'master'],  // no chainparams.cpp
    'gbx'   => ['GoByte', 'https://github.com/gobytecoin/gobyte', 'master'],
    'apr'   => ['APR Coin', 'https://github.com/APRCoin/zenith-repository', 'master'],
    'mlm'   => ['MktCoin', 'https://github.com/Mktcoin-official/Mktcoin', 'master'],
    'seq'   => ['Sequence', 'https://github.com/duality-solutions/Sequence', 'master'],
    'btcz'  => ['BitcoinZ', 'https://github.com/btcz/bitcoinz', 'master'],
    'zoi'   => ['Zoin', 'https://github.com/zoinofficial/zoin', 'master'],
    'sphr'  => ['Sphere', 'https://github.com/SphereDevs/sphere', 'master'],
    'fst'   => ['Fastcoin', 'https://github.com/fastcoinproject/fastcoin', 'master'],   // no chainparams.cpp
    'trc'   => ['Terracoin', 'https://github.com/terracoin/terracoin', 'master'],
    'aur'   => ['Auroracoin', 'https://github.com/aurarad/auroracoin', 'master'],
//    ''   => ['', '', 'master'],

    'ppc'   => ['Peercoin', 'https://github.com/peercoin/peercoin', 'master'],  // no chainparams.cpp
    'cnx'   => ['Kryptonex', 'https://github.com/Cryptonex/source', 'master'],  // no chainparams.cpp   
    'emc'   => ['Emercoin', 'https://github.com/emercoin/emercoin', 'master'],  // bip44 unset
    'btcd'  => ['BitcoinDark', 'https://github.com/jl777/btcd', 'master'],   // no chainparams.cpp
    'nlg'   => ['Gulden', 'https://github.com/Gulden/gulden-official', 'master'],   // parse errors in chainparams.cpp
    'tpay'  => ['TokenPay', 'https://github.com/tokenpay/tokenpay', 'master'],     // not working yet.  can't find where COIN is defined for decimals.        
    'part'  => ['Particle', 'https://github.com/particl/particl-core', 'master'],  // not working yet.  needs modified parsing of PUBLIC_KEY, et al.
    'bay'   => ['BitBay', 'https://github.com/bitbaymarket/bitbay-core', 'master'],   // parse error in chainparams.cpp
    'fair'  => ['FairCoin', 'https://github.com/FairCoinTeam/fair-coin', 'master'],  // no chainparams.cpp
//    'cloak' => ['CloakCoin', 'https://github.com/CloakProject/CloakCoin', 'master'],  // no chainparams.cpp, no main.cpp
    'xwc'   => ['WhiteCoin', 'https://github.com/Whitecoin-org/whitecoin', 'master'],  // parse error in chainparams.cpp
    '$pac'  => ['PACcoin', 'https://github.com/PACCommunity/PAC', 'master'],   // parse error in chainparams.cpp
    'lbc'   => ['Library Credits', 'https://github.com/lbryio/lbrycrd', 'master'],   // no port_rpc in chainparamsbase.cpp
    'xp'    => ['Experience Points', 'https://github.com/eXperiencePoints/XPCoin', 'master'],  // no chainparams.cpp
    'medic' => ['MedicCoin', 'https://github.com/MEDICCOIN/MedicCoin', 'master'],  // parse error in chainparams.cpp
    'nlc2'  => ['NoLimiteCoin', 'https://github.com/NoLimitCoin/NoLimitCoin-Core', 'master'],   // no chainparams.cpp
//    'ecc'   => ['ECC', 'https://github.com/project-ecc/eccoin', 'master'],  // no chainparams.cpp, parse error for pchMessages
//    'xby'   => ['XTRABYTES', 'https://github.com/XTRABYTES/XTRABYTES', 'master'],  // no chainparams.cpp,  no bitcoinrpc.cpp
    'pot'   => ['PotCoin', 'https://github.com/potcoin/Potcoin', 'master'],  // no chainparams.cpp,  no base58.cpp
    'leo'   => ['LEOcoin', 'https://github.com/Leocoin-project/LEOcoin', 'master'],  // COIN not defined in amount.h or util.h
    'thc'   => ['HempCoin', 'https://github.com/hempcoin-project/THC', 'master'],  // no chainparams.cpp
    'onion' => ['DeepOnion', 'https://github.com/deeponion/deeponion', 'master'],  // no chainparams.cpp
    'dime'  => ['Dimecoin', 'https://github.com/dime-coin/dimecoin', 'master'],  // no chainparams.cpp, no base58.cpp
//    'bitb'  => ['Bean Cash', 'https://github.com/TeamBitBean/bitbean-core', 'master'],   // parse error in chainparams.cpp
    'grc'   => ['Gridcoin', 'https://github.com/gridcoin-community/Gridcoin-Research', 'master'],  // no chainparams.cpp
    'mue'   => ['MonetaryUnit', 'https://github.com/muecoin/MUECore', 'master'],   // parse error in chainparams.cpp
//    'flash' => ['FLASH', 'https://github.com/flash-coin/flash-fullnode', 'master'],   // parse error in chainparams.cpp
//    'shnd'  => ['StrongHands', 'https://github.com/stronghands/stronghands', 'master'],  // no chainparams.cpp, pchMessageStart not in main.cpp
    'ioc'   => ['IO Coin', 'https://github.com/IOCoin/DIONS', 'master'],  // no chainparams.cpp,  no base58.cpp
    'nyc'   => ['NewYorkCoin', 'https://github.com/NewYorkCoin-NYC/nycoin', 'master'],  // no chainparams.cpp, no base58.cpp
//    'lmc'   => ['LoMoCoin', 'https://github.com/lomocoin/lomocoin-qt', 'master'],  // no chainparams.cpp, parse error in main.cpp
    'hwc'   => ['Hollywood Coin', 'https://github.com/hollywoodcoin-project/HollyWoodCoin', 'master'],  // no chainparams
    'vrc'   => ['Vericoin', 'https://github.com/vericoin/vericoin', 'master'],  // no chainparams.cpp
//    'dyn'   => ['Dynamic', 'https://github.com/duality-solutions/Dynamic', 'master'],  // parse error in chainparams.cpp
    'nvc'   => ['Novacoin', 'https://github.com/novacoin-project/novacoin', 'master'],  // no chainparams
//    'esp'   => ['Espers', 'https://github.com/cryptocoderz/espers', 'master'],  // parse error in chainparams.cpp
//    'sprts' => ['Sprouts', 'https://github.com/sprouts-coin-org/sprouts', 'master'],  // no chainparams.cpp,  parse error in main.cpp
//    'xst'   => ['Stealth', 'https://github.com/StealthSend/Stealth', 'master'],  // no chainparams.cpp, error parsing hash_genesis_block
    'bio'   => ['Biocoin', 'https://github.com/Blackithart/biocoin', 'master'],  // no chainparams.cpp
    'ok'    => ['OKCash', 'https://github.com/okcashpro/okcash', 'master'],  // COIN not defined in amount.h, util.h
    'pink'  => ['PinkCoin', 'https://github.com/Pink2Dev/Pink2', 'master'],  // no chainparams.cpp
    'bcc'   => ['Bitconnect', 'https://github.com/bitconnectcoin/bitconnectcoin', 'master'],  // no chainparams.cpp. also, ponzi scammers
    'pnd'   => ['Pandacoin', 'https://github.com/DigitalPandacoin/pandacoin', 'master'],  // no chainparams.cpp
    'xspec' => ['Spectrecoin', 'https://github.com/spectrecoin/spectre', 'master'],  // COIN not defined in amount.h, util.h
    'enrg'  => ['Energycoin', 'https://github.com/EnergyCoinProject/energycoin', 'master'],   // no chainparams.cpp
    'cure'  => ['Curecoin', 'https://github.com/cygnusxi/CurecoinSource', 'master'],  // no chainparams.cpp, missing base58.cpp
//    'qrk'   => ['Quark', 'https://github.com/quark-project/quark', 'master'],   // parse error in chainparams.cpp (hash_genesis_block difficult to parse, outside main section.)
    '42'    => ['42-Coin', 'https://github.com/42-coin/42', 'master'],  // no chainparams.cpp
    'hold'  => ['Interstellar Holdings', 'https://github.com/InterstellarHoldings/StellarHoldings', 'master'],   // parser error message_magic not found.
];

if( $use_projects_file ) {
    $projects_file = __DIR__ . '/github-project-urls.json';
    $data = @json_decode(@file_get_contents($projects_file), true);
    if($data) {
        ksort($data);
        foreach($data as $sym => $info) {
            if( @$coins['sym']) {
                continue;
            }
            $coins[strtolower($sym)] = [$info['name'], rtrim($info['github'], '/'), $info['branch']];
        }
    }
}

if( $symbol ) {
    $ci = @$coins[strtolower($symbol)];
    if( !$ci ) {
        throw new \Exception( "Coin $symbol not found.");
    }
    process_coin($symbol, $ci);
}
else {
    foreach($coins as $symbol => $ci) {
        process_coin($symbol, $ci);
    }
}

function process_coin($symbol, $coininfo) {
    
    list($name, $project_url, $branch) = $coininfo;
    echo "\nProcessing $symbol - $name\n";
    
    $allmeta = coins_metadata();
    $cmeta = $allmeta[strtoupper($symbol)];

    // windows special filenames, also cannot use eg con.json
    $specialnames = ['CON', 'PRN', 'AUX', 'NUL',
                     'COM1', 'COM2', 'COM3', 'COM4', 'COM5',
                     'COM6', 'COM7', 'COM8', 'COM9', 'COM0',
                     'LPT1', 'LPT2', 'LPT3', 'LPT4', 'LPT5',
                     'LPT6', 'LPT7', 'LPT8', 'LPT9', 'LPT0',
                    ];
    $name = in_array(strtoupper($symbol), $specialnames) ? $symbol . '_' : $symbol;
    
    $outfile = sprintf( "%s/../coins/%s.json", __DIR__, strtolower($name));
    if(file_exists($outfile)) {
        if($GLOBALS['skip_existing_files']) {
            warn("file " . basename($outfile) . " exists. skipping $name");
            return;
        }
    }

    // replace coinmarketcap url because usually theirs is
    // to the project owner, but ours version is direct to the
    // individual github project.    
    $cmeta['web']['source_code'] = $project_url;
    
    if( !strstr($project_url, 'github')) {
        throw new \Exception("only github urls supported. found: $project_url");
    }
    
    @list($prefix, $path) = explode('github.com/', $project_url);
    $urlbase = sprintf("https://raw.githubusercontent.com/%s/%s", $path, $branch);
    
    $data = [];
    $meta = $cmeta;
    $meta['symbol'] = $symbol;  // keep lowercase.
    $meta['project_url'] = $project_url;
    $meta['urlbase'] = $urlbase;
    $meta['original_codebase'] = 'bitcoin';   // eg bitcoin, cryptonote, ethereum etc.
    
    $networks = ['main', 'test', 'regtest'];
    
    process_coin_meta($data, $meta);
    
    foreach($networks as $network) {
        try {
            $meta['network'] = $network;
            process_network($data, $meta);
        }
        catch(\Exception $e) {
            if($GLOBALS["stop_on_{$network}_validation_error"]) {
                throw $e;
            }
            warn($e->getMessage() . "  --> $network will be ignored.");
            unset($data[$network]);
            if($network == 'main') {
                break;
            }
            continue;
        }
    }
    
    if(@$data['main']) {
        $json = json_encode($data, JSON_PRETTY_PRINT);
        file_put_contents($outfile, $json);
        echo "  |- Wrote $outfile\n";
    }
}

function coins_metadata() {
    static $data = null;
    if( $data ) {
        return $data;
    }
    $file = __DIR__ . '/../coins/meta/coinmeta.json';
    $data = json_decode(file_get_contents($file), true);
    return $data;
}

function process_network(&$data, $meta) {
    
    $network = $meta['network'];
    info("Processing network '$network'");

    try {    
        process_chainparams_codebase($data, $meta);
    }
    catch(\Exception $e) {
        switch( $e->getCode() ) {
            case EXCEPTION_CHAINPARAMS_NOTFOUND:
                unset($data[$network]);
                // be silent about missing regtest because it is always missing for old codebases.
                if( $network == 'regtest' ) {
                    break;
                }
                if($network == 'main') {
                    // be silent about this for testnet, because already warned for mainnet.
                    warn("chainparams.cpp not found. Coin is old or wrong branch? will parse as old codebase.");
                }
                process_oldbitcoin_codebase($data, $meta);
                break;
            default:
                throw($e);
        }
    }    
}

function process_chainparams_codebase(&$data, $meta) {
    process_network_meta($data, $meta);
    process_chainparams($data, $meta);
    process_message_magic($data, $meta);
    process_decimals($data, $meta);
    process_bip44($data, $meta);
    process_extended($data, $meta);
}

function process_chainparams(&$data, $meta) {
    $network = $meta['network'];

    // note: chainparams.cpp was introduced around bitcoin v0.9.0.
    // older altcoins (eg Peercoin) may not have it and would
    // require a different parsing implementation.
    $url =  $meta['urlbase'] . '/src/chainparams.cpp';
    $buf = get_url($url, false);
    
    if(!$buf) {
        throw new \Exception("$url not found", EXCEPTION_CHAINPARAMS_NOTFOUND);
    }
    
    $main = $testnet = $regtest = null;
    $chunks = explode("Params : public", $buf);
    $chunkbuf = null;

    foreach($chunks as $chunk) {
        $chunk = str_replace("\t", "    ", $chunk); // tabs to spaces.
        if(strstr($chunk, '   CMainParams()') && $network =='main') {
            $chunkbuf = $chunk;
        }
        else if(strstr($chunk, '   CTestNetParams()') && $network == 'test') {
            $chunkbuf = $chunk;
        }
        else if(strstr($chunk, '   CRegTestParams()') && $network == 'regtest') {
            $chunkbuf = $chunk;
        }
    }

    process_chainparam_network( $data, $chunkbuf, $buf, $meta);
}

function process_chainparam_network( &$data, $buf, $filebuf, $meta) {

    $network = $meta['network'];
    $name = $meta['name'];
    $symbol = $meta['symbol'];

    $magic = null;        
    $matched_hex = preg_match_all("/pchMessageStart\[.\] = 0x(..)\s*;/", $buf, $matches_hex) ||
                   preg_match_all("/netMagic\[.\] = 0x(..)\s*;/", $buf, $matches_hex);  // bch just has to be special.  ;-)
    $matched_chr = preg_match_all("/pchMessageStart\[.\] = {?\s*'(.)'\s*}?\s*;/", $buf, $matches_chr);
    if($matched_hex) {
        $magic = '0x' . implode( $matches_hex[1] );
    }
    else if($matched_chr) {
        $magic = '0x';
        foreach( $matches_chr[1] as $val) {
            $magic .= dechex(ord($val));
        }
    }
    ne(@$magic);
    
    preg_match("/nDefaultPort = (\d+)/", $buf, $matches);
    ne(@$matches[1]);
    $port = $matches[1];

    $data[$network]['port'] = (int)$port;

    // rpcPort is usually in chainparamsbase.cpp, but sometimes
    // found in chainparams.cpp, eg blackcoin.
    preg_match("/nRPCPort = (\d+)/", $buf, $matches);
    if(@$matches[1]) {
        $data[$network]['port_rpc'] = (int)$matches[1];
    }
    else {
        $data[$network]['port_rpc'] = get_port_rpc($meta);
    }

    $data[$network]['protocol']['magic'] = $magic;
    
    preg_match_all('/vSeeds.emplace_back\("(.*)".*\)/', $buf, $matches) ||
    preg_match_all('/PUSH_SEED\("(.*)"\)/', $buf, $matches) ||               // clams.
    preg_match_all('/vSeeds.push_back\(.*CDNSSeedData\(".*",.*"(.*)"[,\)]/sU', $buf, $matches);
    
    $seeds_dns = filter_dns_seeds($matches[1], $meta);
    $data[$network]['seeds_dns'] = @$seeds_dns;

    // must not be empty for network = main.
    if( !count($data[$network]['seeds_dns']) && $network != 'regtest') {
        warn("'$network' - no DNS seeds found. seeds_dns is empty.");
    }        

    $matched_int = preg_match("/base58Prefixes.SECRET_KEY.*>\s?\(1,\s?(\d+)\);/", $buf, $matches_int) ||
                   preg_match("/base58Prefixes.SECRET_KEY.*list_of.(\d+)\)/", $buf, $matches_int);
    $matched_int2= preg_match("/base58Prefixes.SECRET_KEY.*>\s?\(1,\s?(\d+)\+(\d+)\);/", $buf, $matches_int2);    // example is Gulden.
    $matched_hex = preg_match("/base58Prefixes.SECRET_KEY.*0x(..).;/", $buf, $matches_hex) ||    // zcash is a special child.
                   preg_match("/base58Prefixes.SECRET_KEY.*>\s?\(1,\s?0x(..)\);/", $buf, $matches_hex);
    @array_shift($matches_int);
    @array_shift($matches_int2);
    @array_shift($matches_hex);
    if($matched_int2) {
        $val = i($matches_int2[0]) + i($matches_int2=[1]);
    }
    else {
        $val = $matched_int ? i($matches_int[0]) : hexdec(strtolower(implode('', $matches_hex)));
    }
    ne($val);
    $data[$network]['prefixes']['private'] = $val;
    
    $matched_int = preg_match("/base58Prefixes.PUBKEY_ADDRESS.*>\s?\(1,\s?(\d+)\);/", $buf, $matches_int) ||
                   preg_match("/base58Prefixes.PUBKEY_ADDRESS.*list_of.(\d+)\)/", $buf, $matches_int);
    $matched_hex = preg_match("/base58Prefixes.PUBKEY_ADDRESS.*0x(..),0x(..).;/", $buf, $matches_hex) ||    // zcash is a special child.
                   preg_match("/base58Prefixes.PUBKEY_ADDRESS.*>\s?\(1,\s?0x(..)\);/", $buf, $matches_hex);
    @array_shift($matches_int);
    @array_shift($matches_hex);
    $val = $matched_int ? i($matches_int[0]) : hexdec(strtolower(implode('', $matches_hex)));
    ne($val);
    $data[$network]['prefixes']['public'] = $val;
    
    //if(!$matches[1]) echo $buf; exit;

    $matched_2 =   preg_match("/base58Prefixes.SCRIPT_ADDRESS2.*>\s?\(1,\s?(\d+)\);/", $buf, $matches_2);
    $matched_int = preg_match("/base58Prefixes.SCRIPT_ADDRESS.*>\s?\(1,\s?(\d+)\);/", $buf, $matches_int) ||
                   preg_match("/base58Prefixes.SCRIPT_ADDRESS.*list_of.(\d+)\)/", $buf, $matches_int);
    $matched_hex = preg_match("/base58Prefixes.SCRIPT_ADDRESS.*0x(..),0x(..).;/", $buf, $matches_hex) ||    // zcash is a special child.
                   preg_match("/base58Prefixes.SCRIPT_ADDRESS.*>\s?\(1,\s?0x(..)\);/", $buf, $matches_hex);
    @array_shift($matches_2);
    @array_shift($matches_int);
    @array_shift($matches_hex);
    // note: we use end for matches_int because of lame coins like LTC that define SCRIPT_ADDRESS and then SCRIPT_ADDRESS2.
    $val = $matched_int ? i($matches_int[0]) : hexdec(strtolower(implode('', $matches_hex)));
    ne($val);
    $data[$network]['prefixes']['scripthash'] = $val;
    $val2 = $matched_2 ? i($matches_2[0]) : null;
    if($val2) {
        $data[$network]['prefixes']['scripthash2'] = $val2;
        $data[$network]['prefixes']['scripthash2_comment'] = 'For LTC, scripthash2 is for newer addresses and, scripthash is legacy. Other coins are probably similar but ymmv';
    }
    
    preg_match("/base58Prefixes.EXT_PUBLIC_KEY.*\{0x(..),\s?0x(..),\s?0x(..),\s?0x(..)\}/", $buf, $matches) ||
    preg_match("/base58Prefixes.EXT_PUBLIC_KEY.*list_of.0x(..)..0x(..)..0x(..)..\s*0x(..)/sU", $buf, $matches);
    ne(@$matches[1]);
    array_shift($matches);
    $data[$network]['prefixes']['bip32']['public'] = zpx(strtolower(implode('',($matches))));

    preg_match("/base58Prefixes.EXT_SECRET_KEY.*\{0x(..),\s?0x(..),\s?0x(..),\s?0x(..)\}/", $buf, $matches) ||
    preg_match("/base58Prefixes.EXT_SECRET_KEY.*list_of.0x(..)..0x(..)..0x(..)..\s*0x(..)/sU", $buf, $matches);
    ne(@$matches[1]);
    array_shift($matches);
    $data[$network]['prefixes']['bip32']['private'] = zpx(strtolower(implode('',($matches))));

    preg_match('/bech32_hrp = "([^"]*)"/', $buf, $matches);
    // ne(@$matches[1]);  // can be null
    $data[$network]['prefixes']['bech32'] = @$matches[1];

//    preg_match('/{     0, uint256S\("([^"]*)"\)}/', $buf, $matches);
//                    assert(   hashGenesisBlock == uint256("0xe5524c7f4b08e6a04689a551fa060d9e39934991d5a4111105d9359447733285")); //DIME
    preg_match('/\s+assert\(.*hashGenesisBlock == uint256S?\("0?x?(.*)"\)\);/', $buf, $matches);
    if( !@$matches[1] ) {
        // special case for BCH.  (and others?)
        if(preg_match('/assert\(consensus.hashGenesisBlock ==.*uint256S\("(.*)".*"(.*)"\)\);/sU', $buf, $matches)) {
            array_shift($matches);
            $matches[1] = implode('', $matches);
        }
        else {
            // search in whole file, not only network buf.
            $pattern = sprintf( '/define\s+%s.*_GENESIS_HASH\s+"(.*)"/', strtoupper($network));
            if(preg_match( $pattern, $filebuf, $matches) ||
               ($network == 'main' && preg_match('/uint256S? hashMainGenesisBlock\("0?x?(.*)"\);/', $filebuf, $matches))) {  // Dimecoin
                array_shift($matches);
                $matches[1] = implode('', $matches);
            }
        }
    }
    
    ne(@$matches[1]);
    $data[$network]['hash_genesis_block'] = @$matches[1];
}

function get_port_rpc($meta) {
    $network = $meta['network'];

    $url = $meta['urlbase'] . '/src/chainparamsbase.cpp';
    $buf = get_url($url);
    
    $port_rpc = null;

    if($network == 'main') {
        preg_match('/MakeUnique<CBaseChainParams>\("", (\d+)\)/', $buf, $matches);
        $port_rpc = (int)@$matches[1];
    }
    else if($network == 'test') {
        preg_match('/MakeUnique<CBaseChainParams>\("testnet3", (\d+)\)/', $buf, $matches);
        $port_rpc = (int)@$matches[1];
    }
    else if($network == 'regtest') {
        preg_match('/MakeUnique<CBaseChainParams>\("regtest", (\d+)\)/', $buf, $matches);
        $port_rpc = (int)@$matches[1];
    }

    // if above fails, try older/legacy formatting.
    if( !$port_rpc ) {
        preg_match_all('/nRPCPort = (\d+);/', $buf, $matches);
        if($network == 'main') {
            $port_rpc = (int)@$matches[1][0];
        }
        else if($network == 'test') {
            $port_rpc = (int)@$matches[1][1];
        }
        else if($network == 'regtest') {
            $port_rpc = (int)@$matches[1][2];
        }
    }
    
    ne($port_rpc);
    return $port_rpc;
}


function process_decimals(&$data, $meta) {
    $symbol = $meta['symbol'];
    $network = $meta['network'];

    $url = $meta['urlbase'] . '/src/amount.h';
    $buf = get_url($url, false);
    if(!$buf || !strstr($buf, ' COIN')) {
        $url = $meta['urlbase'] . '/src/util.h';   // blackcoin has it in util.h.
        $buf = get_url($url, false);
    }
    if(!$buf || !strstr($buf, ' COIN')) {
        $url = $meta['urlbase'] . '/src/state.h';   // tpay has it in state.h.
        $buf = get_url($url);
    }

    preg_match('/static const .* COIN\s+=\s+(\d+);/', $buf, $matches) ||
    preg_match('/static const Amount COIN\((\d+)\);/', $buf, $matches);  // bch is different of course.
    $special = [       // special cases, hard to parse.
        'bcd' => 100000000 / 10,
        'lcc' => 100000000 / 10,  // https://github.com/litecoincash-project/litecoincash/blob/master/src/amount.h
        'clam' => 1000000 * 100, // https://raw.githubusercontent.com/nochowderforyou/clams/master/src/util.h
    ];
    
    if( @$special[$symbol] ) {
        $matches[1] = $special[$symbol];
    }
    
    ne(@$matches[1]);
    $val = @$matches[1] ? (int)@$matches[1] : null;
    $data[$network]['decimals'] = $val !== null ? log($val, 10) : null;

    return true;   // disabling MAX_MONEY logic.  too many problems.
    
    // For MAX_MONEY
    if(!strstr($buf, 'MAX_MONEY')) {
        $url = $meta['urlbase'] . '/src/core.h';   // reddcoin has it in core.h.
        $buf = get_url($url, false);
    }
    if(!strstr($buf, 'MAX_MONEY')) {
        $url = $meta['urlbase'] . '/src/main.h';   // Linda has it in main.h.
        $buf = get_url($url, false);
    }
    if(!strstr($buf, 'MAX_MONEY')) {
        $url = $meta['urlbase'] . '/src/chainparams.cpp';   // bitcoingreen has it in chainparams.cpp.
        $buf = get_url($url, false);
    }

    preg_match('/static const .* MAX_MONEY = (\d+)u? \* COIN.*/', $buf, $matches) ||
    preg_match('/nMaxMoneyOut = (\d+) \* COIN;/', $buf, $matches);
    $special = [       // special cases, hard to parse.
        'blk' => (int)((pow(2,63)-1) / 100000000),
        'rads' => (int)((pow(2,63)-1) / 100000000),    // https://raw.githubusercontent.com/RadiumCore/radium-0.11/master/src/main.h
        'pivx' => 'unlimited',
        'clam' => 'unlimited',
        'ion' => 50900000,    // no MAX_MONEY in source.  stated in announcement here. https://bitcointalk.org/index.php?topic=1443633.0
        'phr' => 'unlimited',   // https://drive.google.com/file/d/1HcNyhlmY0C-1mjBmgXu54Qsw77foCh7Y/view
        'colx' => 'unlimited',  // https://www.reddit.com/r/ColossuscoinX/comments/85v8ne/whats_the_max_total_supply_z/
        'rby' => 25790950,      // http://cryptocoin.cc/table.php?cryptocoin=rubycoin
    ];
    if( @$special[$symbol] ) {
        $matches[1] = $special[$symbol];
    }
    if(!@$matches[1]) {
        // if all parsing fails, use data from coinmarketcap.
        $matches[1] = @$data['meta']['supply']['max'];
    }
    
    ne(@$matches[1]);
    $data['meta']['supply']['max'] = @$matches[1];
    
    return true;
}


function process_message_magic(&$data, $meta) {
    $urlbase = $meta['urlbase'];
    $network = $meta['network'];

    $url = $urlbase . '/src/validation.cpp';
    $buf = get_url($url, false);
    if(!$buf || !strstr($buf, 'strMessageMagic')) {
        $url = $urlbase . '/src/main.cpp';
        $buf = get_url($url, false);
    }
    if(!$buf || !strstr($buf, 'strMessageMagic')) {    // gulden (and others?) has it here.
        $url = $urlbase . '/src/validation/validation.cpp';
        $buf = get_url($url, false);
    }

    preg_match('/const .*string strMessageMagic = "(.*)";/', $buf, $matches);
    ne(@$matches[1]);
    
    // remove trailing \n, if present.
    $prefix = str_replace( '\n', "\n", $matches[1]);
    $magic = chr(strlen($prefix)) . $prefix;
    $data[$network]['message_magic'] = $magic;
    return true;
}


function process_bip44(&$data, $meta) {
    $symbol = $meta['symbol'];
    $network = $meta['network'];
    
    static $bip44map = null;
    if(!$bip44map) {
        $fixmap = ['DSH' => 'DASH',
                   ];
        
        $url = 'https://raw.githubusercontent.com/bitcoinjs/bip44-constants/master/index.js';
        $buf = get_url($url);
        
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
    if( $network == 'main' ) {
        $data['main']['prefixes']['bip44'] = $bip44;
    }
    else {
        $data[$network]['prefixes']['bip44'] = 1;     // testnets are always 1, per bip44 spec.
    }
}

function process_coin_meta(&$data, $meta) {
    $name = $meta['name'];
    $symbol = $meta['symbol'];
    $symbol_comment = @$meta['symbol_comment'];
    $project_url = $meta['project_url'];
    
    $data['meta']['symbol'] = strtoupper($symbol);
    if($symbol_comment) {
        $data['meta']['symbol_comment'] = $symbol_comment;
    }
    $data['meta']['name'] = $name;
    $data['meta']['supply']['max'] = $meta['supply']['max'];
    $data['meta']['web'] = $meta['web'];
    $data['meta']['original_codebase'] = $meta['original_codebase'];
}


function process_network_meta(&$data, $meta) {
    $name = $meta['name'];
    $network = $meta['network'];
    $symbol = $meta['symbol'];
    
    $netname = $network == 'regtest' ? $network : $network . 'net';
    $suffix = ' - ' . ucfirst($netname);
    $data[$network]['symbol'] = strtoupper($symbol);
    $data[$network]['name'] = $name . $suffix;
    $data[$network]['testnet'] = $network == 'main' ? false : true;
}


function process_oldbitcoin_codebase(&$data, $meta) {
    if($meta['network'] == 'regtest') {
        // regtest network is not available in old bitcoin codebases.
        // so we fail silently.
        return;
    }
    
    process_network_meta($data, $meta);
    process_oldcode_supply_max($data, $meta);
    process_oldcode_ports($data, $meta);
    process_oldcode_protocol_magic($data, $meta);
    process_oldcode_dns_seeds($data, $meta);
    process_oldcode_keys($data, $meta);
    process_oldcode_hash_genesis_block($data, $meta);
    process_oldcode_message_magic($data, $meta);
    process_oldcode_decimals($data, $meta);
    process_bip44($data, $meta);
    process_extended($data, $meta);
}

function process_oldcode_hash_genesis_block(&$data, $meta) {
    $urlbase = $meta['urlbase'];
    $network = $meta['network'];
    
    $hash = null;

/** For orig bitcoin, looks like in main.cpp:
   uint256 hashGenesisBlock("0x000000000019d6689c085ae165831e934ff763ae46a2a6c172b3f1b60a8ce26f");
... later on, for testnet ...
    hashGenesisBlock = uint256("000000000933ea01ad0ee984209779baaec3ced90fa3f408719526f8d77f4943");
*/

    $url = $urlbase . '/src/main.cpp';
    $buf = get_url($url);
    
    if( $network == 'main') {
        preg_match('/uint256 hashGenesisBlock\("0x(.*)"\);/', $buf, $matches);
        $hash = @$matches[1];
    }
    else {
        preg_match('/hashGenesisBlock = uint256\("(.*)"\);/', $buf, $matches);
        $hash = @$matches[1];
    }    
    
    if($hash) {
        $data[$network]['hash_genesis_block'] = $hash;
        return;
    }

    /** For peercoin, primecoin, looks like, in main.h:
    static const uint256 hashGenesisBlockOfficial("0x0000000032fe677166d54963b62a4677d8957e87c508eaa4fd7eb1c880cd27e3");
    static const uint256 hashGenesisBlockTestNet("0x00000001f757bb737f6596503e17cd17b0658ce630cc727c0cca81aec47c9f06");
     */
    
    $url = $urlbase . '/src/main.h';
    $buf = get_url($url);
    
    if( $network == 'main') {
        preg_match('/static const uint256 hashGenesisBlockOfficial\s?\("0?x?(.*)"\);/', $buf, $matches) ||
        preg_match('/static const uint256 hashGenesisBlock\s?(?!TestNet)\("0?x?(.*)"\);/', $buf, $matches);
        $hash = @$matches[1];
    }
    else {
        preg_match('/static const uint256 hashGenesisBlockTestNet\s?\("0?x?(.*)"\);/', $buf, $matches);
        $hash = @$matches[1];
    }
    
    ne($hash);
    $data[$network]['hash_genesis_block'] = $hash;
}

function process_oldcode_ports(&$data, $meta) {
    $symbol = strtolower($meta['symbol']);
    $urlbase = $meta['urlbase'];
    $network = $meta['network'];

    // Shortcut for certain hard-to-parse codebases.    
    $known = [
        'cure' => [ 'main' => ['port' => 9911, 'rpc' => 19911],
                    'test' => ['port' => 8600, 'rpc' => 18600] ],
        'ifc'  => [ 'main' => ['port' => 9321, 'rpc' => 9322],
                    'test' => ['port' => 19321, 'rpc' => 9322] ],  // testnet RPC is same as mainnet.
    ];
    if(@$known[$symbol]) {
        $data[$network]['port'] = $known[$symbol][$network]['port'];
        $data[$network]['port_rpc'] = $known[$symbol][$network]['rpc'];
        return;
    }    
    
    $url = $urlbase . '/src/protocol.h';
    $buf = get_url($url);
    
/*  In ppc, xpm looks like
        #define PPCOIN_PORT  9901
        #define RPC_PORT     9902
        #define TESTNET_PORT 9903
        #define TESTNET_RPC_PORT 9904
 */

    if(strstr($buf, 'COIN_PORT') && strstr($buf, 'RPC_PORT')) {
        if( $network == 'main') {
            preg_match('/#define .*COIN_PORT \s*(\d+)/', $buf, $matches);
            ne(@$matches[1]);
            $data[$network]['port'] = i($matches[1]);
    
            preg_match('/#define .*RPC_PORT \s*(\d+)/', $buf, $matches);
            ne(@$matches[1]);
            $data[$network]['port_rpc'] = i($matches[1]);
        }
        else {
            preg_match('/#define .*TESTNET_PORT \s*(\d+)/', $buf, $matches);
            ne(@$matches[1]);
            $data[$network]['port'] = i($matches[1]);
    
            preg_match('/#define .*TESTNET_RPC_PORT \s*(\d+)/', $buf, $matches);
            ne(@$matches[1]);
            $data[$network]['port_rpc'] = i($matches[1]);
        }
    }

/** In btc, looks looks like
File: protocol.h
    return testnet ? 18333 : 8333;
File: bitcoinrpc.cpp
    return GetBoolArg("-testnet", false) ? 18332 : 8332;
 */
    else {
        preg_match('/return.*[tT]est[nN]et \? (\d+) : (\d+).?;/', $buf, $matches);
        ne(@$matches[1]);
        $data[$network]['port'] = $network == 'main' ? i($matches[2]) : i($matches[1]);
        
        $url = $urlbase . '/src/bitcoinrpc.cpp';
        $buf = get_url($url, false);
        
        if(!$buf) {
            $url = $urlbase . '/src/rpcserver.cpp';    // Gridcoin GRC
            $buf = get_url($url, false);
        }

        preg_match('/return GetBoolArg.*testnet.*false.*\? (\d+) : (\d+);/', $buf, $matches);
        ne(@$matches[1]);
        $data[$network]['port_rpc'] = $network == 'main' ? i($matches[2]) : i($matches[1]);
    }
}

function process_oldcode_protocol_magic(&$data, $meta) {
    $urlbase = $meta['urlbase'];
    $symbol = $meta['symbol'];
    $network = $meta['network'];
    
    // Shortcut for certain hard-to-parse codebases.    
    $known = [
        'ppc' => ['main' => '0xe5e9e8e6', 'test' => '0xefc0f2cb'],
    ];
    if(@$known[$symbol]) {
        $data[$network]['protocol']['magic'] = $known[$symbol][$network];
        return;
    }

    $url = $urlbase . '/src/main.cpp';
    $buf = get_url($url);
    
/*  In orig bitcoin looks like in main.cpp
unsigned char pchMessageStart[4] = { 0xf9, 0xbe, 0xb4, 0xd9 };
 ...  
    if (fTestNet)
    {
        pchMessageStart[0] = 0x0b;
        pchMessageStart[1] = 0x11;
        pchMessageStart[2] = 0x09;
        pchMessageStart[3] = 0x07;
        hashGenesisBlock = uint256("000000000933ea01ad0ee984209779baaec3ced90fa3f408719526f8d77f4943");
    }
 */
 
    if( $network == 'main') {
        preg_match('/unsigned char pchMessageStart\[4\] = { 0x(.*), 0x(.*), 0x(.*), 0x(.*) }/', $buf, $matches);
        ne(@$matches[1]);
        array_shift($matches);
        $data[$network]['protocol']['magic'] = zpx(implode($matches));
    }
    else {
        preg_match_all('/pchMessageStart\[\d\] = 0x(.*);/', $buf, $matches);
        ne(@$matches[1]);
        $data[$network]['protocol']['magic'] = zpx(implode($matches[1]));
    }

}


function process_oldcode_decimals(&$data, $meta) {
    $urlbase = $meta['urlbase'];
    $symbol = $meta['symbol'];
    $network = $meta['network'];
    
    // Shortcut for certain hard-to-parse codebases.    
    $known = [
//        'ppc' => 6,
    ];
    if(@$known[$symbol]) {
        $data[$network]['decimals'] = $known[$symbol];
        return;
    }

    $url = $urlbase . '/src/util.h';
    $buf = get_url($url);
    
/*  In orig bitcoin looks like in util.h
static const int64 COIN = 100000000;
 */
 
    if(!preg_match('/static .* COIN = (\d+);/', $buf, $matches)) {
        $url = $urlbase . '/src/amount.h';
        $buf = get_url($url);
        preg_match('/static.* COIN = (\d+);/', $buf, $matches);
        ne(@$matches[1]);
    }
    $val = $matches[1] ? i($matches[1]) : null;
    $data[$network]['decimals'] = $val === null ?: log($val, 10);    
}


function process_oldcode_supply_max(&$data, $meta) {
    return;  // disabling for now.  to many problems.

    $urlbase = $meta['urlbase'];
    $symbol = $meta['symbol'];
    $network = $meta['network'];

    $url = $urlbase . '/src/main.h';
    $buf = get_url($url);
 
    preg_match('/static const int64 MAX_MONEY = (\d+)u? \* COIN;/', $buf, $matches);
    ne(@$matches[1]);
    $data['meta']['supply']['max'] = @$matches[1];    
}


function process_oldcode_message_magic(&$data, $meta) {
    $urlbase = $meta['urlbase'];
    $symbol = $meta['symbol'];
    $network = $meta['network'];
    
    // Shortcut for certain hard-to-parse codebases.    
    $known = [
//        'myc' => "Mycoin signed message\n",
    ];
    if(@$known[$symbol]) {
        $data[$network]['message_magic'] = $known[$symbol];
        return;
    }

    $url = $urlbase . '/src/main.cpp';
    $buf = get_url($url);
    
    preg_match('/const .*string strMessageMagic = "(.*)";/', $buf, $matches);
    ne(@$matches[1]);

    // remove trailing \n, if present.
    $prefix = str_replace( '\n', "\n", $matches[1]);
    $magic = chr(strlen($prefix)) . $prefix;
    $data[$network]['message_magic'] = $magic;
}


function process_oldcode_dns_seeds(&$data, $meta) {
    $urlbase = $meta['urlbase'];
    $network = $meta['network'];

    $url = $urlbase . '/src/net.cpp';
    $buf = get_url($url);
    
    /** looks like:
static const char *strMainNetDNSSeed[][2] = {
    {"primecoin.net", "seed.ppcoin.net"},
    {"xpm.altcointech.net", "dnsseed.xpm.altcointech.net"},
    {"xpm2.altcointech.net", "dnsseed.xpm2.altcointech.net"},
    {"primeseed.muuttuja.org", "primeseed.muuttuja.org"},
    {NULL, NULL}
};

static const char *strTestNetDNSSeed[][2] = {
    {"primecoin.net", "tnseed.ppcoin.net"},
    {"primeseedtn.muuttuja.org", "primeseedtn.muuttuja.org"},
    {NULL, NULL}
};
     */
    
    $pattern = sprintf('/str%sNetDNSSeed.*{(.*){NULL,\s+NULL}/sU', ucfirst($network) );
    preg_match( $pattern, $buf, $matches);

    if( @$matches[1] ) {    
        preg_match_all('/{".*", "(.*)"},/', $matches[1], $matches);
        if(@count($matches[1])) {
            $seeds_dns = filter_dns_seeds($matches[1], $meta);
            $data[$network]['seeds_dns'] = $seeds_dns;
        }
    }
    
/**
 Another form looks like:
static const char *strDNSSeed[][2] = {
    {"seed1.gambit", "node1.gambitcrypto.com"},
    {"seed2.gambit", "node2.gambitcrypto.com"},
    {"seed3.gambit", "node3.gambitcrypto.com"}
};
from: https://raw.githubusercontent.com/collincrypto/gambitcrypto/master/src/net.cpp
*/  

    else {
        $pattern = '/strDNSSeed.*{(.*)};/sU';
        preg_match( $pattern, $buf, $matches);
    
        if( @$matches[1] ) {    
            preg_match_all('/{".*", "(.*)"}/', $matches[1], $matches);
            if(@count($matches[1]) && $network == 'main') {
                $seeds_dns = filter_dns_seeds($matches[1], $meta);
                $data[$network]['seeds_dns'] = $seeds_dns;
            }
        }
    }

    if( !@count($data[$network]['seeds_dns']) ) {
        warn("'$network' - no DNS seeds found. seeds_dns is empty.");
        $data[$network]['seeds_dns'] = [];
    }
}

function filter_dns_seeds($list, $meta) {
    $network = $meta['network'];
    // sanity check that it appears to be a domain.            
    $seeds = [];
    foreach($list as $v) {
        $added = false;
        if(strstr($v, '.')) {
            // do not include if it apears to be an IP address.
            if(!preg_match('/(\d+).(\d+).(\d+).(\d+):?/', $v)) {
                $seeds[] = $v;
                $added = true;
            }
        }
        if(!$added) {
            warn("['$network']['seeds_dns'] - ignoring invalid dns seed: $v");
        }
    }
    return array_unique($seeds);
}

function process_oldcode_keys(&$data, $meta) {
    $urlbase = $meta['urlbase'];
    $network = $meta['network'];

    $url = $urlbase . '/src/base58.h';
    $buf = get_url($url);

/** Looks like
        PUBKEY_ADDRESS = 23,  // primecoin: pubkey address starts with 'A'
        SCRIPT_ADDRESS = 83,  // primecoin: script address starts with 'a'
        PUBKEY_ADDRESS_TEST = 111,
        SCRIPT_ADDRESS_TEST = 196,
*/        
    
    if( $network == 'main') {
        preg_match('/PUBKEY_ADDRESS = (\d+)/', $buf, $matches);
        ne(@$matches[1]);
        $data[$network]['prefixes']['public'] = i($matches[1]);
        
        preg_match('/SCRIPT_ADDRESS = (\d+)/', $buf, $matches);
        ne(@$matches[1]);
        $data[$network]['prefixes']['scripthash'] = i($matches[1]);
    }
    else {
        preg_match('/PUBKEY_ADDRESS_TEST = (\d+)/', $buf, $matches);
        ne(@$matches[1]);
        $data[$network]['prefixes']['public'] = i($matches[1]);
        
        preg_match('/SCRIPT_ADDRESS_TEST = (\d+)/', $buf, $matches);
        ne(@$matches[1]);
        $data[$network]['prefixes']['scripthash'] = i($matches[1]);
    }
    
    
/** SECRET_KEY.
 *  Looks like, in orig bitcoin.
            SetData(fTestNet ? 239 : 128, vchSecret.begin(), vchSecret.size());
 *  Looks like, in ppc, xpm
            SetData(128 + (fTestNet ? CBitcoinAddress::PUBKEY_ADDRESS_TEST : CBitcoinAddress::PUBKEY_ADDRESS), &vchSecret[0], vchSecret.size());
 *  In maxcoin.
        PRIVKEY_ADDRESS = 128,
        PRIVKEY_ADDRESS_TEST = 239, 
*/

    if( $network == 'main') {
        if(preg_match('/PRIVKEY_ADDRESS = (\d+)/', $buf, $matches)) {
            $data[$network]['prefixes']['private'] = i($matches[1]);
        }
    }
    else {
        if( preg_match('/PRIVKEY_ADDRESS_TEST = (\d+)/', $buf, $matches) ) {
            $data[$network]['prefixes']['private'] = i($matches[1]);
        }
    }

    if( @$data[$network]['prefixes']['private'] ) {
        
    }
    else if( preg_match('/SetData\(fTestNet \? (\d+) : (\d+),/', $buf, $matches) ) {
        $val = $network == 'main' ? $matches[2] : $matches[1];
        $data[$network]['prefixes']['private'] = i($val);
    }
    else if(preg_match('/SetData\((\d+) \+ \(fTestNet \? .*::PUBKEY_ADDRESS_TEST : .*::PUBKEY_ADDRESS\)/', $buf, $matches)) {
            $data[$network]['prefixes']['private'] = i( $matches[1] + $data[$network]['prefixes']['public'] );
    }
    else if(preg_match('/PRIVKEY_ADDRESS = CBitcoinAddress::PUBKEY_ADDRESS \+ (\d+)/', $buf, $matches) && $network == 'main') {
        // matches potcoin, and others?        
        $data[$network]['prefixes']['private'] = i( $matches[1] + $data[$network]['prefixes']['public'] );
    }
    else if(preg_match('/PRIVKEY_ADDRESS_TEST = CBitcoinAddress::PUBKEY_ADDRESS_TEST \+ (\d+)/', $buf, $matches) && $network == 'test') {
        // matches potcoin, and others?        
        $data[$network]['prefixes']['private'] = i( $matches[1] + $data[$network]['prefixes']['public'] );
    }
    else {
        // one last thing to try.
        // see: https://raw.githubusercontent.com/eXperiencePoints/XPCoin/master/src/base58.cpp
        if(!@$matches[1]) {
            $url = $urlbase . '/src/base58.cpp';
            $buf = get_url($url);
            
            preg_match('/SetData\((\d+) \+ \(fTestNet \? CBitcoinAddress::PUBKEY_ADDRESS_TEST : CBitcoinAddress::PUBKEY_ADDRESS\)/', $buf, $matches);
            ne(@$matches[1]);
            $data[$network]['prefixes']['private'] = i( $matches[1] + $data[$network]['prefixes']['public'] );
        }
    }
    
    // Use bitcoin values for all coins using old codebase because
    // old codebase does not define bip32 extended key prefixes.
    // note: maybe there should be an option to turn this off,
    //       but then the values would be undefined and json files
    //       would not validate.
    $map = json_decode(file_get_contents(__DIR__ . '/../coins/meta/extended.json'), true);
    $extbtc = @$map['BTC'][$network];
    $data[$network]['prefixes']['bip32']['public'] = $extbtc['xpub']['public'];
    $data[$network]['prefixes']['bip32']['private'] = $extbtc['xpub']['private'];
    $data[$network]['prefixes']['bip32']['undefined_used_btc'] = true;
    $data[$network]['prefixes']['bech32'] = null;
}

function process_extended(&$data, $meta) {
    $symbol = $meta['symbol'];
    $network = $meta['network'];
    $bip32 = $data[$network]['prefixes']['bip32'];    
    
    $file = __DIR__ . '/../coins/meta/extended.json';
    $map = json_decode(file_get_contents(__DIR__ . '/../coins/meta/extended.json'), true);
    if(!$map) {
        throw new Exception("Error reading $file");
    }
    $extended_btc = @$map['BTC'][$network];
    $extended = @$map[strtoupper($symbol)][$network];

    // use parsed values for 'xpub/xprv' instead of default values from extended.json.
    $extended['xpub'] = $bip32;
    unset($data[$network]['prefixes']['bip32']);
    
    $keytypes = ['xpub', 'ypub', 'zpub', 'Ypub', 'Zpub'];

    if(strtoupper($symbol) != 'BTC') {
        foreach($keytypes as $kt) {
            $use_btc = false;
            if( !@$extended[$kt]['public'] ||
                !@$extended[$kt]['private']) {
                if( @$extended_btc[$kt] ) {
                    $extended[$kt] = $extended_btc[$kt];
                    $extended[$kt]['undefined_used_btc'] = true;
                }
            }
        }
    }
    
    $data[$network]['prefixes']['extended'] = $extended;
}


function get_url($url, $throw = true) {
    static $urlcache = [];
    if( isset($urlcache[$url]) ) {
        echo "  |- Cached: $url\n";
        return $urlcache[$url];
    }
    
    echo "  |- Loading $url\n";
    $buf = trim(@file_get_contents($url));
    
    if( !$buf && $throw ) {
        throw new \Exception("Error loading $url");
    }
    
    $urlcache[$url] = $buf;
    return $buf;
}

function i($val) {
    return (int)$val;
}

function ihex($val) {
    return zpx(($val));
}

// zero pads a string to an even length of characters.
// intended for hex numbers.
function zp($val) {
    if(strlen($val) % 2 != 0) {
        $val = '0' . $val;
    }
    return $val;
}

function zpx($val) {
    return '0x' . zp($val);
}

function ne($val) {
    if( $val === null ) {
        throw new \Exception("required value not found.");
    }
}

function err($msg) {
    fprintf(STDERR, "  |- Error : $msg\n" );
}

function warn($msg) {
    fprintf(STDERR, "  |- Warning : $msg\n" );
}

function info($msg) {
    fprintf(STDERR, "  |- Info : $msg\n" );
}
