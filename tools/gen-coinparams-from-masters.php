#!/usr/bin/env php
<?php

/**
 * This tool reads all the JSON files in ./coins and
 * generates a consolidated json file with all coins.
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

$outfile = __DIR__ . "/../coinparams.json";
$rc = file_put_contents($outfile, json_encode($coininfo, JSON_PRETTY_PRINT));

if(!$rc) {
    throw new Exception("Error writing to $outfile");
}
echo "Coin info was successfully written to $outfile\n";
