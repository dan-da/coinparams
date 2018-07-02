#!/usr/bin/env php
<?php

namespace coinparams\tools;

require_once __DIR__  . '/../vendor/autoload.php';
\strictmode\initializer::init();

use texttable;

/**
 * This tool reads all the JSON files in ./coins and
 * generates markdown files with summary tables of all coins.
 *
 * todo: use json5 parser so that we can put comments into
 *       the original JSON files if desired.
 */

$files = glob(__DIR__ . '/../coins/*.json');

$coininfo = [];
foreach($files as $file) {
    $data = @json_decode( file_get_contents($file), true );
    $symbol = @$data['main']['symbol'];
    
    if( !$data || !$symbol ) {
        throw new Exception("Error reading file $file");
    }
    
    $coininfo[$symbol] = $data;
}

gen_meta_summary($coininfo);
gen_prefix_summary($coininfo);
gen_genesis_summary($coininfo);
gen_networking_summary($coininfo);

function gen_prefix_summary($info) {
    
    $title = "Cryptocurrency Address Prefixes";
    $desc = <<< END
### Jump to:

* [Mainnet](#mainnet)
* [Testnet](#testnet)
* [Regtest](#regtest)
    
Most of this data has been automatically parsed out of the original source code
for each cryptocurrency.  Still, there exists chance of bugs/error.

Please report any errors via github issue tracker at:
https://github.com/dan-da/coinparams

Many older coins do not have bip32 prefixes defined.  In these cases,
the values from bitcoin are used.
END;
    $body = '';

    $networks = [];
    $header = ['Symbol', 'Name', 'Privkey', 'Pubkey', 'P2SH', 'Ext Privkey', 'Ext Pubkey', 'Bip44', 'Bech32'];
    $networks['main'][] = $header;
    $networks['test'][] = $header;
    $networks['regtest'][] = $header;
    foreach($info as $symbol => $coin) {
        unset($coin['meta']);
        foreach($coin as $network => $d) {
            $p = $d['prefixes'];
            $networks[$network][] = [
              $d['symbol'],  
              @$d['name'],
              @$p['private'],
              @$p['public'],
              @$p['scripthash'],
              @$p['bip32']['private'],
              @$p['bip32']['public'],
              @$p['bip44'],
              @$p['bech32'],
            ];
        }
    }

    foreach($networks as $network => $rows) {
        $tbuf = markdown_table($rows);
        $netname = $network . ($network == 'regtest' ? '' : 'net');
        $body .= '## ' . ucfirst($netname) . "\n" . $tbuf . "\n\n";
    }

    $buf = "# $title\n\n";
    $buf .= $desc ? "$desc\n\n" : '';
    $buf .= $body ? "$body\n\n" : '';
    
    write_file(__DIR__ . '/../coinprefixes.md', $buf );
}


function gen_networking_summary($info) {
    
    $title = "Cryptocurrency Networking Info";
    $desc = <<< 'END'
### Jump to:

* [Mainnet](#mainnet)
* [Testnet](#testnet)
* [Regtest](#regtest)

Most of this data has been automatically parsed out of the original source code
for each cryptocurrency.  Still, there exists chance of bugs/error.

Note that P2P magic bytes are displayed in the original byte order in which they
appear in the code.  These are typically reversed (big-endian) for transfer
over the network.

The first byte of message magic represents the length of the rest of
the string.  eg:

    \u0018 = 0x18 = 23.  strlen('Bitcoin Signed message:\n') == 23.

Please report any errors via github issue tracker at:
https://github.com/dan-da/coinparams
END;
    $body = '';

    $networks = [];
    $header = ['Symbol', 'Name', 'P2P Port', 'RPC Port', 'DNS Seeds', 'P2P Magic', 'Message Magic'];
//    $header = ['Symbol', 'Name', 'P2P Port', 'RPC Port', 'DNS Seeds', 'P2P Magic'];
    $networks['main'][] = $header;
    $networks['test'][] = $header;
    $networks['regtest'][] = $header;
    foreach($info as $symbol => $coin) {
        unset($coin['meta']);
        foreach($coin as $network => $d) {
            $networks[$network][] = [
              $d['symbol'],  
              @$d['name'],
              @$d['port'],
              @$d['port_rpc'],
              @count($d['seeds_dns']),
              @$d['protocol']['magic'],
              @json_encode(@$d['message_magic']),
            ];
        }
    }
    
    foreach($networks as $network => $rows) {
        $tbuf = markdown_table($rows);
        $netname = $network . ($network == 'regtest' ? '' : 'net');
        $body .= '## ' . ucfirst($netname) . "\n\n" . $tbuf . "\n\n";
    }
    
    $buf = "# $title\n\n";
    $buf .= $desc ? "$desc\n\n" : '';
    $buf .= $body ? "$body\n\n" : '';
    
    write_file(__DIR__ . '/../coinnetworking.md', $buf );
}


function gen_meta_summary($info) {
    
    $title = "Cryptocurrency Meta Info";
    $desc = <<< END
Most of this metadata has been automatically scraped from coinmarketcap.com.
There exists chance of bugs/error.

Please report any errors via github issue tracker at:
https://github.com/dan-da/coinparams
END;
    $body = '';

    $coins = [];
    $header = ['Symbol', 'Name', 'Decimals', 'Max Supply', 'Website', 'Source Code', 'Announced', 'Explorers'];
    $coins[] = $header;
    foreach($info as $symbol => $c) {
        $coins[] = [
          $c['meta']['symbol'],  
          @$c['meta']['name'],
          @$c['main']['decimals'],
          @$c['meta']['supply']['max'],
          (@$c['meta']['web']['websites'][0] ? sprintf('[Site](%s)', @$c['meta']['web']['websites'][0]) : '') .
          (@$c['meta']['web']['websites'][1] ? sprintf(',&nbsp;[2](%s)', @$c['meta']['web']['websites'][1]) : '') .
          (@$c['meta']['web']['websites'][2] ? sprintf(',&nbsp;[2](%s)', @$c['meta']['web']['websites'][2]) : ''),
          @$c['meta']['web']['source_code'] ? sprintf('[Source](%s)', @$c['meta']['web']['source_code']) : '',
          @$c['meta']['web']['announcement'] ? sprintf('[Announced](%s)', @$c['meta']['web']['announcement']) : '',
          (@$c['meta']['web']['explorers'][0] ? sprintf('[Explorer](%s)', @$c['meta']['web']['explorers'][0]) : '') .
          (@$c['meta']['web']['explorers'][1] ? sprintf(',&nbsp;[2](%s)', @$c['meta']['web']['explorers'][1]) : '') .
          (@$c['meta']['web']['explorers'][2] ? sprintf(',&nbsp;[3](%s)', @$c['meta']['web']['explorers'][2]) : '')
        ];
    }
    $tbuf = markdown_table($coins);
    $body .= "## Coin List\n\n" . $tbuf . "\n\n";

    $buf = "# $title\n\n";
    $buf .= $desc ? "$desc\n\n" : '';
    $buf .= $body ? "$body\n\n" : '';
    
    write_file(__DIR__ . '/../coinmeta.md', $buf );
}


function gen_genesis_summary($info) {
    
    $title = "Cryptocurrency Genesis Block Hashes";
    $desc = <<< END
### Jump to:

* [Mainnet](#mainnet)
* [Testnet](#testnet)
* [Regtest](#regtest)
    
Most of this data has been automatically parsed out of the original source code
for each cryptocurrency.  Still, there exists chance of bugs/error.

Please report any errors via github issue tracker at:
https://github.com/dan-da/coinparams
END;
    $body = '';

    $networks = [];
    $header = ['Symbol', 'Name', 'Genesis Block Hash'];
    $networks['main'][] = $header;
    $networks['test'][] = $header;
    $networks['regtest'][] = $header;
    foreach($info as $symbol => $coin) {
        unset($coin['meta']);
        foreach($coin as $network => $d) {
            $networks[$network][] = [
              $d['symbol'],  
              @$d['name'],
              @$d['hash_genesis_block'],
            ];
        }
    }
    foreach($networks as $network => $rows) {
        $tbuf = markdown_table($rows);
        $netname = $network . ($network == 'regtest' ? '' : 'net');
        $body .= '## ' . ucfirst($netname) . "\n\n" . $tbuf . "\n\n";
    }
    $buf = "# $title\n\n";
    $buf .= $desc ? "$desc\n\n" : '';
    $buf .= $body ? "$body\n\n" : '';
    
    write_file(__DIR__ . '/../coingenesis.md', $buf );
}


function markdown_table($rows) {
    $buf = texttable::table($rows, 'firstrow' );
    $lines = explode("\n", $buf);
    $lines[2] = str_replace('+', '|', $lines[2]);
    array_shift($lines);
    array_pop($lines);
    array_pop($lines);
    return implode("\n", $lines);
}

function write_file($file, $buf) {
    $rc = file_put_contents($file, $buf);
    
    if(!$rc) {
        throw new Exception("Error writing to $file");
    }
    $file = realpath($file);
    echo "Wrote file $file\n";
}
