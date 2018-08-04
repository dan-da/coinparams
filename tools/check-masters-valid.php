#!/usr/bin/env php
<?php

/**
 * This tool reads all the JSON files in ./coins and
 * checks for any missing fields.
 *
 */

$fname = @$argv[1];

// allow filepath or symbol to be provided.
if($fname && !strstr($fname, '.json')) {
    $fname = __DIR__ . '/../coins/' . strtolower($fname) . '.json';
}

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

    if( !@$data['meta'] ) {
        err("'meta' metadata key missing");
    }
    if( !@$data['main'] ) {
        err("'main' network key missing");
    }
    if( !@$data['test'] ) {
        warn("'test' network key missing");
    }
    if( !@$data['regtest'] ) {
        warn("'regtest' network key missing");
    }
    
    foreach($data as $key => $netinfo) {
        if( !$netinfo ) {
            err("key '$key' is empty");
            continue;
        }
        
        if($key == 'meta') {
            check_valid_meta($key, $netinfo);
            continue;
        }
    
        check_valid_network($key, $netinfo);
    }
    
}


function check_valid_meta($keyname, $data) {
    $top_keys = ['symbol',
                 'name',
                 'supply',
                 'web',
                 'original_codebase',
                 ];
    
    foreach( $top_keys as $k ) {
        if( @$data[$k] === null ) {
            err( "key ['$keyname']['$k'] is unset" );
        }
    }


    $web_keys = ['websites',
                 'announcement',
                 'source_code',
                 'explorers',
                 'coinmarketcap',
                 'message_board',
                 'chat',
                 ];
    
    foreach( $web_keys as $k ) {
        if( @$data['web'][$k] === null ) {
            warn( "key ['$keyname']['web']['$k'] is unset" );
        }
    }

    $supply_keys = ['max',
                    ];
    
    foreach( $supply_keys as $k ) {
        if( @$data['supply'][$k] === null ) {
            warn( "key ['$keyname']['supply']['$k'] is unset" );
        }
    }
}


/* Should look like:
{
        "hash_genesis_block": "000000000019d6689c085ae165831e934ff763ae46a2a6c172b3f1b60a8ce26f",
        "port": 8333,
        "port_rpc": 8332,
        "protocol": {
            "magic": "0xd9b4bef9"
        },
        "seeds_dns": [
            "seed.bitcoin.sipa.be",
            "dnsseed.bluematt.me",
            "dnsseed.bitcoin.dashjr.org",
            "seed.bitcoinstats.com",
            "bitseed.xf2.org",
            "seed.bitcoin.jonasschnelli.ch"
        ],
        "prefixes": {
            "extended": {
                "xpub": {
                    "private": "0x488ade4",
                    "public": "0x488b21e"
                }
            },
            "bip44": "0x0",
            "private": "0x80",
            "public": "0x0",
            "scripthash": "0x5"
        },
        "name": "Bitcoin",
        "decimals": 8,
        "symbol": "BTC",
        "testnet": false
    }
*/    
function check_valid_network($netname, $data) {
    $top_keys = ['hash_genesis_block',
                 'port',
                 'port_rpc',
                 'protocol',
                 'seeds_dns',
                 'prefixes',
                 'name',
                 'decimals',
                 'symbol',
                 'testnet',
                 'message_magic',
                 ];
    
    foreach( $top_keys as $k ) {
        if( @$data[$k] === null ) {
            err( "key ['$netname']['$k'] is unset" );
        }
    }
    
    if(@$data['seedsDns'] !== null && !count(@$data['seedsDns'])) {
        if($netname == 'main') {
            // used to be an error for main, but changed it to a warning. considered optional.
            warn("key ['$netname']['seedsDns'] contains empty array");
        }
        else if($netname == 'test') {  // dns not needed for regtest.
            warn("key ['$netname']['seedsDns'] contains empty array");
        }
    }
    
    $version_keys = ['extended', 'private', 'public', 'scripthash' ];
    $version_keys_warn = ['bip44' ];
    switch($data['symbol']) {
        case 'XMR': array_remove($version_keys, ['scripthash', 'private']); break;
        case 'ETH': array_remove($version_keys, ['scripthash', 'private', 'public']); break;
    }
    foreach($version_keys as $k) {
        if( @$data['prefixes'][$k] === null ) {
            err( "key ['$netname']['prefixes']['$k'] is unset or null" );
        }
        else if( !@$data['prefixes'][$k] && @$data['prefixes'][$k] !== 0 ) {
            warn( "key ['$netname']['prefixes']['$k'] is empty" );
        }
    }
    foreach($version_keys_warn as $k) {
        if( @$data['prefixes'][$k] === null ) {
            warn( "key ['$netname']['prefixes']['$k'] is unset" );
        }
    }
    
    $extended_keys = ['xpub', 'ypub', 'zpub', 'Ypub', 'Zpub'];
    $bip32_keys = ['public', 'private'];
    switch($data['symbol']) {
        case 'XMR': array_remove($bip32_keys, ['public', 'private']); break;
        case 'ETH': array_remove($bip32_keys, ['public', 'private']); break;
    }
    foreach( $extended_keys as $ek ) {
        if( @!count(@$data['prefixes']['extended'][$ek]) ) {
            warn( "key ['$netname']['prefixes']['extended']['$ek'] is missing or empty" );
            continue;
        }
        
        foreach($bip32_keys as $k) {
            if( @$data['prefixes']['extended'][$ek][$k] === null ) {
                err( "key ['$netname']['prefixes']['extended']['$ek']['$k'] is unset" );
            }
        }
    }
    
    $protocol_keys = ['magic'];
    switch($data['symbol']) {
        case 'ETH':  array_remove($protocol_keys, 'magic'); break;
    }
    foreach($protocol_keys as $k) {
        if( @$data['protocol'][$k] === null ) {
            err( "key ['$netname']['protocol']['$k'] is unset" );
        }
    }
    
    
}

function array_remove(&$arr, $val) {
    if(is_array($val)) {
        foreach($val as $v) {
            array_remove($arr, $v);
        }
    }
    if (($key = array_search($val, $arr)) !== false) {
        unset($arr[$key]);
    }    
}

function err($msg) {
    fprintf(STDERR, "  |- error : $msg\n\n" );
}

function warn($msg) {
    fprintf(STDERR, "  |- warning : $msg\n\n" );
}
