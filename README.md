# coinparams

This project provides crypto currency specific information such
as key prefixes, DNS seeds, network ports, etc.

Data is available in JSON format and human readable tables.  Language
bindings are available for JS and PHP.

It is intended for use as a quick reference or in any software that is working
with multiple cryptocurrencies, no matter the programming language.

## Here's the data.

<table><tr>
<td><a href="coinmeta.md">Meta</a></td>
<td><a href="coinprefixes.md">Prefixes</a></td>
<td><a href="coinnetworking.md">Networking</a></td>
<td><a href="coingenesis.md">Genesis Blocks</a></td>
<td><a href="coinparams.json">JSON</a></td>
</tr></table>

The above files contain data mainly for bitcoin-derived coins.

Some additional metadata for coins and tokens not listed can be found
in [coinmeta.json](coins/meta/coinmeta.json).

## How to use

### For any language

Just copy coinparams.json into your project and read it as you would
read any JSON file.

### JS

First, install the package using npm:

    npm install coinparams --save

Then, require the package and use it like so:
    
    var coinparams = require('coinparams');

    console.log(coinparams.get_coin('BTC'));
    console.log(coinparams.get_coin_network('DASH', 'test'));
    
    // console.log(coinparams.get_all_coins());
    // console.log(coinparams.get_raw_json());

### PHP

    $ cd yourproject
    $ composer require dan-da/coinparams
    
include in your code and use via:

    require_once 'path/to/vendor/autoload.php';
    
    // get all info for single coin
    $info = coinParams::get_coin('BTC');
    
    // get info for a coin + network (main, test, regest)
    $info = coinParams::get_coin_network('DOGE', 'main');

    // get info for all coins
    $info = coinParams::get_all_coins();
    
    // get raw json text for all coins
    $buf = coinParams::get_raw_json();



## How values are obtained

For bitcoin and bitcoin derivates, values have been 
automatically parsed directly from the original source code of each 
cryptocurrency repo on github.  The script gen-masters-from-coin-src.php 
performs this task.

For non bitcoin derivates (eg eth, monero, decred, etc) the values are
manually obtained.

Metadata such as website urls and max supply have been scraped from
coinmarketcap.com.

## How values are tested

There is a simple validation script that checks for any problems in the
json tree structure, ie missing or empty fields.  It does not ensure 
correctness of values.

Advanced testing such as generating addresses or connecting to a
a running instance of each altcoin has not been attempted.

## Contributions welcome.

If you wish to add new coins or update an existing one, please submit a pull request.
There is one file per coin in the ./coins directory.  Just use an existing file such
as BTC.json as a template.

If you are adding a bitcoin derivative, you can try adding it to the list in
gen-masters-from-coin-src.php.  Then run the script.  If successful, validate
with check-masters-valid.php then submit a pull request for the script and 
the new coin.json file.

If you wish to add new language bindings, please see the example under
bindings/php or bindings/js and try to keep the api similar.  Also, please try
to use no more than one file (eg for package manager) in the project root
directory per language.

### Pull Requests

Please include the output of running:

    $ ./check-masters-valid.php <yourcoin-symbol>

The file should fully validate (main, test, regtest) for the 
pull request to be accepted.
 

## Todos

* Add more coins.  esp top 20 by market cap.  many are non bitcoin codebase.
* Add bindings for other languages, to easily install and use the list as a class.
* add meta fields for hashing algorithm, POW, POS, mineable, etc...
* add seed node list (maybe: btc mainnet has more than 1500)
* Use a json5 parser when reading the individual JSON files for each coin.  This will allow comments to be used in them.
* document the schema/format used.
* add better tests.


## Use at your own risk.

The author makes no claims or guarantees of correctness.

By using this software you agree to take full responsibility for any losses
incurred before, during, or after the usage, whatsoever the cause, and not to
hold the software author liable in any manner.
