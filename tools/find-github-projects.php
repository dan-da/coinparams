#!/usr/bin/env php
<?php

$file = __DIR__ . '/../coins/meta/coinmeta.json';
$data = json_decode(file_get_contents($file), true);

$outfile = './github-project-urls.json';

$list = [];
foreach($data as $coin) {
    $url = $coin['web']['source_code'];
    
    // find urls with fully qualified projects.
    if(preg_match('#github.com/.+/.+#', $url)) {
        $test_url = "$url/blob/master/src/addrman.cpp";
        echo "\nFetching test url: $test_url\n";
        $buf = @file_get_contents($test_url);
        
        if( $buf ) {
            echo "  |-- found bitcoin repo!\n";
            $symbol = $coin['symbol'];
            $name = $coin['name'];
            $list[$symbol] = ['name' => $name,
                              'github' => $url,
                              'branch' => 'master',
                             ];
        }
        file_put_contents($outfile, json_encode($list, JSON_PRETTY_PRINT));
    }
    sleep(1);
}

echo "Wrote $outfile\n";