<?php

/**
 * This tool reads all the JSON files in ./coins and
 * checks for any missing fields.
 *
 */

$fname = @$argv[1];
$files = $fname ? [$fname] : glob(__DIR__ . '/../coins/*.json');

foreach($files as $file) {
    echo "Validating " . basename($file) . "\n\n";

    $data = @json_decode( file_get_contents($file), true );
    
    if( !$data ) {
        err("file $file is empty or could not be parsed");
        continue;
    }

    check_valid_coin( $file, $data);
}


function check_valid_coin($file, $data) {
        
    if( !@$data['main'] ) {
        err("'main' network key missing");
    }
    if( !@$data['test'] ) {
        warn("'test' network key missing");
    }
    if( !@$data['regtest'] ) {
        warn("'regtest' network key missing");
    }
    
    foreach($data as $netname => $netinfo) {
        if( !$netinfo ) {
            err("network '$netname' is empty");
            continue;
        }
        
        check_valid_network($netname, $netinfo);
    }
    
}

/* Should look like:
{
        "hashGenesisBlock": "000000000019d6689c085ae165831e934ff763ae46a2a6c172b3f1b60a8ce26f",
        "port": 8333,
        "portRpc": 8332,
        "protocol": {
            "magic": "0xd9b4bef9"
        },
        "seedsDns": [
            "seed.bitcoin.sipa.be",
            "dnsseed.bluematt.me",
            "dnsseed.bitcoin.dashjr.org",
            "seed.bitcoinstats.com",
            "bitseed.xf2.org",
            "seed.bitcoin.jonasschnelli.ch"
        ],
        "versions": {
            "bip32": {
                "private": "0x488ade4",
                "public": "0x488b21e"
            },
            "bip44": "0x0",
            "private": "0x80",
            "public": "0x0",
            "scripthash": "0x5"
        },
        "name": "Bitcoin",
        "per1": 100000000,
        "unit": "BTC",
        "testnet": false
    }
*/    
function check_valid_network($netname, $data) {
    $top_keys = ['hashGenesisBlock',
                 'port',
                 'portRpc',
                 'protocol',
                 'seedsDns',
                 'versions',
                 'name',
                 'per1',
                 'unit',
                 'testnet'];
    
    foreach( $top_keys as $k ) {
        if( @$data[$k] === null ) {
            err( "key ['$netname']['$k'] is unset" );
        }
    }
    
    $version_keys = ['bip32', 'bip44', 'private', 'public', 'scripthash' ];
    foreach($version_keys as $k) {
        if( @$data['versions'][$k] === null ) {
            err( "key ['$netname']['versions']['$k'] is unset" );
        }
    }
    
    $bip32_keys = ['public', 'private'];
    foreach($bip32_keys as $k) {
        if( @$data['versions']['bip32'][$k] === null ) {
            err( "key ['$netname']['versions']['bip32']['$k'] is unset" );
        }
    }
    
    $protocol_keys = ['magic'];
    foreach($protocol_keys as $k) {
        if( @$data['protocol'][$k] === null ) {
            err( "key ['$netname']['protocol']['$k'] is unset" );
        }
    }
    
    
}

function err($msg) {
    fprintf(STDERR, "  |- error : $msg\n\n" );
}

function warn($msg) {
    fprintf(STDERR, "  |- warning : $msg\n\n" );
}