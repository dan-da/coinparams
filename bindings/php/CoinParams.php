<?php

namespace CoinParams;

class CoinParams {
    
    /**
     * returns information about a coin matching $symbol.
     *
     * throws an exception if $symbol is not found,
     *  unless $silentfail is true.
     */
    static public function get_coin($symbol, $silentfail=false) {
        $data = self::get_all_coins();
        
        $info = @$data[strtoupper($symbol)];
        if( !$info && !$silentfail ) {
            throw new \Exception("Coin not found: $symbol");
        }
        
        return $info;
    }

    /**
     * returns information about coin+network
     *
     * throws an exception if $symbol is not found,
     *  unless $silentfail is true.
     */
    static public function get_coin_network($symbol, $network, $silentfail=false) {
        $data = self::get_coin($symbol, $silentfail);
        
        $info = @$data[$network];
        if( !$info && !$silentfail ) {
            throw new \Exception("Network not found: $symbol/$network");
        }
        
        return $info;
    }
    
    
    /**
     * returns raw json text for all coins
     *
     * data is read from disk each time called.
     */
    static public function get_raw_json() {
        $file = __DIR__ . '/../../coinparams.json';
        $buf = @file_get_contents($file);
        if( !$buf ) {
            throw new \Exception("Unable to read file $file");
        }
        return $buf;
    }

    /**
     * returns parsed json data for all coins
     *
     * data is cached between calls after initial read.
     */
    static public function get_all_coins() {
        static $data = null;
        if( $data ) {
            return $data;
        }
        $buf = self::get_raw_json();
        $data = @json_decode($buf, true);
        if( !$data ) {
            throw new \Exception("Unable to parse json: " . json_last_error_msg());
        }
        return $data;
    }
    
}