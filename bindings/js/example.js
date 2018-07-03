// Change './index' to 'is-null-or-empty' if you use this code outside of this package
var coinparams = require('./coinparams');

var btc_info = coinparams.get_coin('BTC');
testval("btc_info['main']['port']", btc_info['main']['port'], 8333);

var dash_testnet = coinparams.get_coin_network('DASH', 'test');
testval("dash_testnet['decimals']", dash_testnet['decimals'], 8);

// console.log(coinparams.get_all_coins());
// console.log(coinparams.get_raw_json());

function testval(valname, val, answer) {
    var correct = val == answer;
    var equality = correct ? ' == ' : ' != ';
    var passfail = correct ? '[Pass]' : '[Fail]';
    console.log(passfail + " : " + valname + equality + answer);
}