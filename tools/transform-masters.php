#!/usr/bin/env php
<?php

$symbol = @$argv[1];
if($symbol) {
    $files = [realpath(__DIR__ . "/../coins/$symbol.json")];
}
else {
    $files = glob( __DIR__ . '/../coins/*.json');
}


foreach( $files as $file ) {
    $data = @json_decode(file_get_contents($file), true);
    if(!$data) {
        throw new Exception("Error reading $file");
    }
    
    $data = transform_data($data);
    file_put_contents($file, json_encode($data, JSON_PRETTY_PRINT));
    echo "wrote $file\n";
}


function transform_data($data) {
    $newdata = [];
    foreach($data as $network => &$params) {
        
        if( isset($params['unit'] )) {
            $params['symbol'] = $params['unit'];
            unset($params['unit']);
        }
        
        if( isset($params['hashGenesisBlock'] )) {
            $params['hash_genesis_block'] = $params['hashGenesisBlock'];
            unset($params['hashGenesisBlock']);
        }
        
        if( isset($params['seedsDns'] )) {
            $params['seeds_dns'] = $params['seedsDns'];
            unset($params['seedsDns']);
        }

        if( isset($params['versions'] )) {
            $params['prefixes'] = $params['versions'];
            unset($params['versions']);
        }
            
        if( isset($params['portRpc'] )) {
            $params['port_rpc'] = $params['portRpc'];
            unset($params['portRpc']);
        }
            
        if( isset($params['messageMagic'] )) {
            $params['message_magic'] = $params['messageMagic'];
            unset($params['messageMagic']);
        }

        if( isset($params['per1'] )) {
            $params['decimals'] = log((int)$params['per1'], 10);
            unset($params['per1']);
        }
        
        // This step is to normalize key order.
        $p2['symbol'] = $params['symbol'];
        $p2['name'] = $params['name'];
        $p2['testnet'] = $params['testnet'];
        $p2['port'] = $params['port'];
        $p2['port_rpc'] = $params['port_rpc'];
        $p2['protocol'] = $params['protocol'];
        $p2['seeds_dns'] = $params['seeds_dns'];
        $p2['prefixes'] = $params['prefixes'];
        $p2['hash_genesis_block'] = $params['hash_genesis_block'];
        $p2['decimals'] = $params['decimals'];
        $p2['message_magic'] = $params['message_magic'];
        
        $newdata[$network] = $p2;
        
    }
    return $newdata;
}
