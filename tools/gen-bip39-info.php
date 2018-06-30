#!/usr/bin/env php
<?php

/* This is a tool for retrieving coin params from iancoleman's bip39 generator
 * which are stored as javascript and converting them to our json schema.
 *
 * coinmarketcap's API is also consulted to determine a coin's symbol from its
 * name.
 *
 * The data from iancoleman is missing many fields from our schema, so this is
 * useful only as a starting point for new coins.
 */

// todo cache results in a file.
$url = 'https://raw.githubusercontent.com/iancoleman/bip39/master/src/js/bitcoinjs-extensions.js';
echo "Retrieving coin param data from\n  $url\n\n";
$data = file_get_contents($url);
//$data = file_get_contents( __DIR__ . '/../bitcoinjs-extensions.js');

if( !$data ) {
    throw new Exception("Error retrieving '$url'");
}

$coinparams = [];
$chunks = explode("};\n", $data . "\n");

foreach( $chunks as $chunk ) {
    $chunk .= '}';
    $idx = strpos($chunk, '= {');
    if( $idx !== false) {
        list($garbage, $goodstuff) = explode(' = ', $chunk);
        $parts = explode('.', $garbage);
        $coin = array_pop($parts);
        $lines = explode("\n", $goodstuff);
        $jsonbuf = '';
        foreach($lines as $line) {
            if( !strpos($line, ':')) {
                $jsonbuf .= $line . "\n";
                continue;
            }
            if( ($idx = strpos($line, '//')) !== false ) {
                $line = substr($line, 0, $idx);
            }            
            list($key, $value) = explode(':', $line, 2);
            $key = str_replace(" ", '', $key);
            $value = trim(str_replace(',', '', $value));
            $line = str_replace($key, "\"$key\"", $line);
            if( $value != '{') {
                $newvalue = str_replace("'", '', $value);
                if( $key == 'messagePrefix') {
                    continue;
                    // $newvalue = '';
                }
//                $line = str_replace($value, hexdec($value), $line);
                $line = str_replace($value, "\"$newvalue\"", $line);
                
                if( strstr($line, ',') && (strstr($line, '"wif":') || strstr($line, '"private":')) ) {
                    $line = str_replace(",", '', $line);
                }
            }
            $jsonbuf .= $line . "\n";
        }
        $result = json_decode( $jsonbuf, true );
        if( $result ) {
            list($coin, $network, $result) = translate_schema($coin, $result);
            if($result) {
                $coinparams[$coin][$network] = $result;
            }
        }
        else {
            echo $jsonbuf . "\n";
            echo "error: " . json_last_error_msg() . "\n";
        }
    }
}

echo json_encode($coinparams, JSON_PRETTY_PRINT) . "\n\n";


/* This function translates something like:
 * coin = blk

{
  bip32: {
    public: 0x76C0FDFB,
    private: 0x76C1077A
  },
  pubKeyHash: 0x7f,
  scriptHash: 0xc4,
  wif: 0xff
}

 * to something like:
{
    "main": {
        "hashGenesisBlock": null,
        "port": null,
        "portRpc": null,
        "protocol": {
            "magic": null
        },
        "seedsDns": [],
        "prefixes": {
            "bip32": {
                "private": "0x488ade4",
                "public": "0x488b21e"
            },
            "bip44": "0xa",
            "private": "0x99",
            "public": "0x19",
            "scripthash": "0x55"
        },
        "name": "BlackCoin",
        "decimals": 8,
        "symbol": "BLK",
        "testnet": false
    },
    "test": null
}
 
*/


function translate_schema($coin, $data) {
    $tn_len = 0;
    $testnet = substr($coin, -2) == 'tn';
    if($testnet) {
        $tn_len = 2;
    }
    else {
        $testnet = substr($coin, -7) == 'testnet';
        $tn_len = $testnet ? 7 : 0;
    }
    $name = $testnet ? substr($coin, 0, - $tn_len) : $coin;
    $network = $testnet ? 'test' : 'main';
    list($symbol, $realname) = name_to_symbol($name);
    
    if( !$symbol ) {
        echo "$name not found in coinmarketcap data. ignoring.\n";
        return null;
    }    
    
    $d = [
        "hashGenesisBlock" => null,
        "port" => null,
        "portRpc" => null,
        "protocol" => [
            "magic" => null
        ],
        "seedsDns" => [],
        "prefixes" => [
            "bip32" => [
                "private" => $data['bip32']['private'],
                "public" => $data['bip32']['public'],
            ],
            "bip44" => null,
            "private" => $data['wif'],
            "public" => $data['pubKeyHash'],
            "scripthash" => $data['scriptHash'],
        ],
        "name" => $realname,
        "decimals" => null,
        "symbol" => $symbol,
        "testnet" => $testnet
    ];
    
    return [$symbol, $network, $d];
}

function name_to_symbol($name) {
    static $listings = null;
    if( !$listings ) {
        // todo cache results in a file.
        $url = 'https://api.coinmarketcap.com/v2/listings/';
        $buf = file_get_contents($url);
        if( !$buf ) {
            throw new Exception("Error retrieving '$url'");
        }
        
        $data = json_decode($buf, true);
        $listings = [];
        foreach(@$data['data'] as $ci) {
            $listings[strtolower($ci['name'])] = $ci;
        }
    }
    $symbol = @$listings[strtolower($name)]['symbol'];
    $realname = @$listings[strtolower($name)]['name'];
        
    return [$symbol, $realname];
}
