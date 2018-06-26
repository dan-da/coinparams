# coinparams

This project provides crypto currency specific information such
as version numbers, DNS seeds, etc, available in JSON format.

It is intended for use in any software that is working with multiple
cryptocurrencies, no matter the programming language.

This is a fork of https://github.com/cryptocoinjs/coininfo.

The fork was made because that project maintains the information
in javascript files.  I wanted to access the information from other
programming languages, so I chose JSON as a neutral format.

## How to use

Just copy coininfo.json into your project and read it as you would
read any JSON file.

Be aware that most numeric values are specified as hex strings.  Hex is 
used for easy porting from C code, and to aid with visual comparison.
Unfortunately, json does not support raw hex, so they must be encoded as
strings. Your application may need to perform a conversion operation before
these values can be used as integers.

## How values are obtained

For bitcoin and bitcoin derivates, the majority of values have been 
automatically parsed directly from the original source code of each 
cryptocurrency repo on github.  The script gen-masters-from-coin-src.php 
performs this task.

For non bitcoin derivates (eg eth, monero, decred, etc) the values are
manually obtained.

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

### Pull Requests

Please include the output of running:

    $ ./check-masters-valid.php <yourcoin-symbol>

The file should fully validate (main, test, regtest) for the 
pull request to be accepted.
 

## Todos

* Add more coins.
* Add more testnet and regtest info.
* Use a json5 parser when reading the individual JSON files for each coin.  This will allow comments to be used in them.
* Add wrappers for JS and other languages, to easily install and use the list as a class.
* document the schema/format used.
* add better tests.


## Use at your own risk.

The author makes no claims or guarantees of correctness.

By using this software you agree to take full responsibility for any losses
incurred before, during, or after the usage, whatsoever the cause, and not to
hold the software author liable in any manner.
