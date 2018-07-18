#!/usr/bin/env php
<?php

namespace coinparams\tools;

require_once __DIR__  . '/../vendor/autoload.php';
\strictmode\initializer::init();

$argcoin = @$argv[1];

/**
 * This tool scrapes metadata for all coins on coinmarketcap.com
 */

$coinfile = __DIR__ . '/../coins/meta/coinmeta.json';
$coinmeta = file_exists($coinfile) ? json_decode(file_get_contents($coinfile), true) : [];
$coins = get_coin_list();

foreach($coins as $info) {
    if( $argcoin && $argcoin != $info['symbol']) {
        continue;
    }
    process_coin($coinmeta, $info);
    ksort($coinmeta);
    file_put_contents($coinfile, json_encode($coinmeta, JSON_PRETTY_PRINT));
}
echo "Data written to $coinfile\n";


function process_coin(&$meta, $info) {
    $symbol = $info['symbol'];
    $name = $info['name'];
    $symbol_comment = null;
    
    $resymbol_map = [
        'Bitgem' => ['BTGEM', 'BTG --> BTGEM due to collision between Bitcoin Gold and Bitgem.  Bitcoin Gold presently has much higher market cap and slip44 entry, so it won.'],
    ];
    if( @$resymbol_map[$name]) {
        list($symbol, $symbol_comment) = $resymbol_map[$name];
    }
    
    echo "\nProcessing $symbol - $name\n";
    
    if( @$meta[$symbol] ) {
        echo "  | -- We already have data for $symbol. skipping\n";
        return;
    }
    
    $url = sprintf('https://coinmarketcap.com/currencies/%s/', $info['website_slug']);
    echo "  |-- Fetching $url\n";
    $buf = file_get_contents($url);
    
    $d = ['symbol' => $symbol, 'name' => $name ];
    if($symbol_comment) {
        $d['symbol_comment'] = $symbol_comment;
    }

    $rc = preg_match_all('#<span class="label label-warning">(.*)</span>#', $buf, $matches);
    $tags = $rc ? $matches[1] : [];
    
    $d['flags']['is_coin'] = array_search('Coin', $tags) !== false;
    $d['flags']['is_token'] = array_search('Token', $tags) !== false;
    $d['flags']['is_mineable'] = array_search('Mineable', $tags) !== false;

    $pattern = '#item-header">Max Supply</h5>.*data-format-value="(.*)">#sU';
    $rc = preg_match($pattern, $buf, $matches);
    $d['supply']['max'] = $rc ? $matches[1] : null;

    $pattern = '#item-header">Circulating Supply</h5>.*data-format-value="(.*)">#sU';
    $rc = preg_match($pattern, $buf, $matches);
    $d['supply']['circulating'] = $rc ? $matches[1] : null;

    $pattern = '#item-header">Total Supply</h5>.*data-format-value="(.*)">#sU';
    $rc = preg_match($pattern, $buf, $matches);
    // supply total is not always present, in which case it matches circulating.
    // note: it is always present in API, eg:
    //    https://coinmarketcap.com/api/#endpoint_ticker_specific_cryptocurrency
    $d['supply']['total'] = $rc ? $matches[1] : $d['supply']['circulating'];
    
    
    $rc = preg_match_all('#href="(.*)" target="_blank" rel="noopener">Website.?\d?</a></li>#', $buf, $matches);
    $d['web']['websites'] = $rc ? $matches[1] : [];

    $rc = preg_match('#href="(.*)" target="_blank" rel="noopener">Announcement</a></li>#', $buf, $matches);
    $d['web']['announcement'] = $rc ? $matches[1] : null;

    $rc = preg_match('#href="(.*)" target="_blank" rel="noopener">Source Code</a></li>#', $buf, $matches);
    $d['web']['source_code'] = $rc ? $matches[1] : null;

    $rc = preg_match_all('#href="(.*)" target="_blank" rel="noopener">Explorer.?\d?</a></li>#', $buf, $matches);
    $d['web']['explorers'] = $rc ? $matches[1] : [];
    
    $d['web']['coinmarketcap'] = $url;
    
    $rc = preg_match_all('#href="(.*)" target="_blank" rel="noopener">Message Board.?\d?</a></li>#', $buf, $matches);
    $d['web']['message_board'] = $rc ? $matches[1] : [];
    
    $rc = preg_match_all('#href="(.*)" target="_blank" rel="noopener">Chat.?\d?</a></li>#', $buf, $matches);
    $d['web']['chat'] = $rc ? $matches[1] : [];
    
    $d['timestamp'] = time();
    
    $meta[$symbol] = $d;
}


function get_coin_list() {
    $url = 'https://api.coinmarketcap.com/v2/listings/';
    echo "Fetching url: $url\n";
    $buf = file_get_contents($url);
    
    $data = json_decode($buf, true);
    return $data['data'];
}


function write_file($file, $buf) {
    $rc = file_put_contents($file, $buf);
    
    if(!$rc) {
        throw new Exception("Error writing to $file");
    }
    $file = realpath($file);
    echo "Wrote file $file\n";
}
