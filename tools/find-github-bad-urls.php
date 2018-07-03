#!/usr/bin/env php
<?php

$file = __DIR__ . '/../coins/meta/coinmeta.json';
$data = json_decode(file_get_contents($file), true);

$urlfile = './github-project-urls.json';
$urldata = json_decode(file_get_contents($urlfile), true);

$list = [];
foreach($data as $coin) {
    $url = $coin['web']['source_code'];
    $symbol = $coin['symbol'];

    // find urls with NOT fully qualified projects.
    if(strstr($url, 'github.com') && !preg_match('#github.com/.+/.+#', $url)) {
        
        if( @$urldata[@$symbol] || file_exists(__DIR__ . "/../coins/" . strtolower($symbol) . ".json") ) {
//            echo " --> found $symbol\n";
            continue;
        }
        
        $list[$symbol] = [$coin['name'], $url];
    }
}

ksort($list );
foreach( $list as $symbol => $d ) {
    echo sprintf("  |- %s : %s : %s\n", str_pad($symbol, 5), str_pad($d[0], 15), $d[1] );
    
}
