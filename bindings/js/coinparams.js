"use strict"

class coinparams {
    
    /**
     * returns information about a coin matching $symbol.
     *
     * throws an exception if $symbol is not found,
     *  unless silentfail is true.
     */
    static get_coin(symbol, silentfail) {
        var data = this.get_all_coins();
        
        var info = data[symbol];
        if( !info && !silentfail ) {
            throw "Coin not found: " + $symbol;
        }
        
        return info;
    }

    /**
     * returns information about coin+network
     *
     * throws an exception if $symbol is not found,
     *  unless silentfail is true.
     */
    static get_coin_network(symbol, network, silentfail) {
        var data = this.get_coin(symbol, silentfail);

        var info = data[network];
        if( !info && !silentfail ) {
            throw "Network not found: " + symbol + "/" + network;
        }
        
        return info;
    }
    
    
    /**
     * returns raw json text for all coins
     *
     * data is read from disk each time called.
     */
    static get_raw_json() {
        var file = __dirname + '/../../coinparams.json';
        var fs = require('fs');
        var buf = fs.readFileSync(file);
        if( !buf ) {
            throw "Unable to read file " + file;
        }
        return buf;
    }

    /**
     * returns parsed json data for all coins
     *
     * data is cached between calls after initial read.
     */
    static get_all_coins() {
        // we use a static class var to cache allcoins data.
        if( this.allcoins ) {
            return this.allcoins;
        }
        var buf = this.get_raw_json();
        this.allcoins = JSON.parse(buf);  // throws SyntaxError on error.
        return this.allcoins;  
    }
    
}
// static class variable
coinparams.allcoins = null;


// Make the coinparams class available to other packages that require us
module.exports = coinparams;