#!/usr/bin/env php
<?php

$sym = @$argv[1];
$url = @$argv[2];

$file = __DIR__ . '/../coins/meta/coinmeta.json';
$data = json_decode(file_get_contents($file), true);

$urlfile = './github-project-urls.json';
$urldata = json_decode(file_get_contents($urlfile), true);

$meta = $data[$sym];

if( !$meta || !$url ) {
    die("Unknown symbol");
}

$urldata[$sym] = [
    'name' => $meta['name'],
    'github' => $url,
    'branch' => 'master',
];

file_put_contents($urlfile, json_encode($urldata, JSON_PRETTY_PRINT));