#!/usr/bin/env php
<?php

// This code generates 1 json file per coin from a master JSON file.
//   we store most numbers as hex strings to match C code constants.

$info = json_decode(file_get_contents( __DIR__ . '/../coinparams.json'), true, 512, JSON_BIGINT_AS_STRING);

foreach($info as $symbol => $data ) {
//    array_walk_recursive ( $data , 'int_to_hex' );
    $lsymbol = strtolower($symbol);
    $fname = "./coins/$lsymbol.json";
    file_put_contents($fname, json_encode($data, JSON_PRETTY_PRINT));
}

function int_to_hex(&$val, $key) {
    $ignore_keys = ['port', 'portRpc', 'decimals' ];

    if(is_numeric($val) && !in_array($key, $ignore_keys)) {
        $val = "0x" . dechex($val);
    }
}

