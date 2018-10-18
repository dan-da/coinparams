# Cryptocurrency Networking Info

### Jump to:

* [Mainnet](#mainnet)
* [Testnet](#testnet)
* [Regtest](#regtest)

Most of this data has been automatically parsed out of the original source code
for each cryptocurrency.  Still, there exists chance of bugs/error.

Note that P2P magic bytes are displayed in the original byte order in which they
appear in the code.  These are typically reversed (big-endian) for transfer
over the network.

The first byte of message magic represents the length of the rest of
the string.  eg:

    \u0018 = 0x18 = 23.  strlen('Bitcoin Signed message:\n') == 23.

Please report any errors via github issue tracker at:
https://github.com/dan-da/coinparams

## Mainnet

| Symbol | Name                               | P2P Port | RPC Port | DNS Seeds | P2P Magic  | Message Magic                               |
|--------|------------------------------------|----------|----------|-----------|------------|---------------------------------------------|
| $PAC   | PACcoin - Mainnet                  |     7112 |     7111 |         4 | 0xc8e5612c | "\u0019DarkCoin Signed Message:\n"          |
|   1337 | Elite - Mainnet                    |    13373 |    13372 |         4 | 0x5ac382d3 | "\u00151337 Signed Message:\n"              |
|     42 | 42-coin - Mainnet                  |     4242 |     2121 |         0 | 0x1d05140b | "\u001342 Signed Message:\n"                |
| ABJC   | Abjcoin Commerce - Mainnet         |    69082 |    69082 |         0 | 0x325e6f86 | " AbjcoinCommerce Signed Message:\n"        |
| ACC    | AdCoin - Mainnet                   |    19499 |    19500 |         2 | 0x3d053577 | "\u0017AdCoin Signed Message:\n"            |
| ACES   | Aces - Mainnet                     |    21274 |    21273 |         0 | 0x70352205 | "\u0019AcesCoin Signed Message:\n"          |
| ACP    | AnarchistsPrime - Mainnet          |    11050 |    21050 |         1 | 0xf9beb4d9 | " AnarchistsPrime Signed Message:\n"        |
| ADC    | AudioCoin - Mainnet                |    25159 |    26159 |         1 | 0xfaf4fbff | "\u001aBlackCoin Signed Message:\n"         |
| ADZ    | Adzcoin - Mainnet                  |    43029 |    43028 |         2 | 0xfdc3b9de | "\u0018AdzCoin Signed Message:\n"           |
| AIB    | Advanced Internet Blocks - Mainnet |     5223 |        0 |         3 | 0x0f68c6cb | "\u0014Aib Signed Message:\n"               |
| ALL    | Allion - Mainnet                   |    12916 |    11916 |        14 | 0xa4a6fd05 | "\u001dTrollPayCoin Signed Message:\n"      |
| ALQO   | ALQO - Mainnet                     |    55500 |    55000 |         2 | 0x94041514 | "\u0015ALQO Signed Message:\n"              |
| AMMO   | Ammo Reloaded - Mainnet            |    21582 |    21583 |         1 | 0xc3c5a2a3 | "\u0015Ammo Signed Message:\n"              |
| AMS    | AmsterdamCoin - Mainnet            |    50020 |    51020 |         6 | 0x002200aa | "\u0018DarkNet Signed Message:\n"           |
| ANI    | Animecoin - Mainnet                |     1212 |     2121 |         0 | 0x414e494d | "\u001aAnimecoin Signed Message:\n"         |
| ANTX   | Antimatter - Mainnet               |    18595 |    18596 |         0 | 0xad61f3ce | "\u001bAntimatter Signed Message:\n"        |
| APR    | APR Coin - Mainnet                 |     3133 |     3132 |         0 | 0xa4ec922e | "\u0018DarkNet Signed Message:\n"           |
| ARB    | ARbit - Mainnet                    |    31930 |    31931 |         0 | 0xe3a77c0e | "\u0016ARbit Signed Message:\n"             |
| ARC    | Advanced Technology Coin - Mainnet |     7209 |     7208 |         0 | 0x3dd22861 | "\u0019DarkCoin Signed Message:\n"          |
| ARCO   | AquariusCoin - Mainnet             |     6205 |     6206 |        10 | 0x933064c7 | "\u001dAquariusCoin Signed Message:\n"      |
| ARG    | Argentum - Mainnet                 |    13580 |    13581 |         0 | 0xfbc1b8dc | "\u0019Argentum Signed Message:\n"          |
| ASAFE2 | AllSafe - Mainnet                  |    30234 |    30244 |         0 | 0x325e6f86 | "\u0019Allsafe2 Signed Message:\n"          |
| ATC    | Arbitracoin - Mainnet              |    32540 |    32640 |         0 | 0xec221025 | "\u0018Arbitra Signed Message:\n"           |
| AU     | AurumCoin - Mainnet                |    11080 |    21080 |         0 | 0xf9beb4d9 | "\u0016Aurum Signed Message:\n"             |
| AUR    | Auroracoin - Mainnet               |    12340 |    12341 |         8 | 0xfda4dc6c | "\u001bAuroracoin Signed Message:\n"        |
| AV     | AvatarCoin - Mainnet               |     9712 |     9711 |         2 | 0xb23bf8a6 | "\u001bAvatarcoin Signed Message:\n"        |
| AXIOM  | Axiom - Mainnet                    |    15760 |    15770 |         1 | 0x033f1a0c | "\u0016Axiom Signed Message:\n"             |
| BAY    | BitBay - Mainnet                   |    19914 |    19915 |         0 | 0x70352205 | "\u0017BitBay Signed Message:\n"            |
| BCA    | Bitcoin Atom - Mainnet             |     7333 |     7332 |         3 | 0x4fc11de8 | "\u0018Bitcoin Signed Message:\n"           |
| BCC    | BitConnect - Mainnet               |     9239 |     9240 |         0 | 0x325e6f86 | "\u001bbitconnect Signed Message:\n"        |
| BCD    | Bitcoin Diamond - Mainnet          |     7117 |     7116 |         6 | 0xbddeb4d9 | " Bitcoin Diamond Signed Message:\n"        |
| BCF    | Bitcoin Fast - Mainnet             |    25671 |    25672 |         1 | 0xcefbfadb | "\u001cBitcoinFast Signed Message:\n"       |
| BCH    | Bitcoin Cash - Mainnet             |     8333 |     8332 |         6 | 0xe3e1f3e8 | "\u0018Bitcoin Signed Message:\n"           |
| BCI    | Bitcoin Interest - Mainnet         |     8331 |     8332 |         3 | 0xede4fe26 | "!Bitcoin Interest Signed Message:\n"       |
| BCO    | BridgeCoin - Mainnet               |     6333 |     6332 |         3 | 0xfbc0b6db | "\u001bbridgecoin Signed Message:\n"        |
| BENJI  | BenjiRolls - Mainnet               |     1777 |     1776 |         0 | 0xfbc0b6db | "\u001bBENJIROLLS Signed Message:\n"        |
| BERN   | BERNcash - Mainnet                 |    32020 |    32016 |        27 | 0x09111620 | "\u0015BERN Signed Message:\n"              |
| BIO    | BioCoin - Mainnet                  |    24885 |    24889 |         5 | 0xb4f9e1a5 | "\u0018BioCoin Signed Message:\n"           |
| BIOB   | BioBar - Mainnet                   |    37257 |    37258 |         0 | 0xa4d2f8a6 | "\u0017BioBar Signed Message:\n"            |
| BIRDS  | Birds - Mainnet                    |    20013 |    20014 |         0 | 0x17f7fedf | "\u0016BIRDS Signed Message:\n"             |
| BITG   | Bitcoin Green - Mainnet            |     9333 |     9332 |         3 | 0x54dc12ae | "\u0018DarkNet Signed Message:\n"           |
| BITOK  | Bitok - Mainnet                    |    11122 |    11100 |         0 | 0xbca3fb5c | "\u0016BitOK Signed Message:\n"             |
| BITS   | Bitstar - Mainnet                  |    62123 |    62124 |         4 | 0xcef1dbfa | "\u0018Bitstar Signed Message:\n"           |
| BLAZR  | BlazerCoin - Mainnet               |     8213 |     8212 |         0 | 0xfbc0b6db | "\u001bBlazerCoin Signed Message:\n"        |
| BLK    | BlackCoin - Mainnet                |    15714 |    15715 |         1 | 0x70352205 | "\u001aBlackCoin Signed Message:\n"         |
| BLOCK  | Blocknet - Mainnet                 |    41412 |    41414 |         0 | 0xa1a0a2a3 | "\u0018DarkNet Signed Message:\n"           |
| BLU    | BlueCoin - Mainnet                 |    27104 |    27105 |         0 | 0xf3f2aead | "\u0019Bluecoin Signed Message:\n"          |
| BOAT   | BOAT - Mainnet                     |    33827 |    33828 |         4 | 0x1c3b1aa3 | "\u0019Doubloon Signed Message:\n"          |
| BOLI   | Bolivarcoin - Mainnet              |     3893 |     3563 |         0 | 0xfdc3b9de | "\u001cBolivarcoin Signed Message:\n"       |
| BRO    | Bitradio - Mainnet                 |    32454 |    32455 |         3 | 0xd31a3de4 | "\u0019Bitradio Signed Message:\n"          |
| BSC    | BowsCoin - Mainnet                 |     8155 |     8145 |         0 | 0xffc4badf | "\u0019bowscoin Signed Message:\n"          |
| BSD    | BitSend - Mainnet                  |     8886 |     8800 |         1 | 0xa3d5c2f9 | "\u0018Bitsend Signed Message:\n"           |
| BSR    | BitSoar - Mainnet                  |    40119 |    50119 |         0 | 0x53746942 | "\u0018BitSoar Signed Message:\n"           |
| BSTY   | GlobalBoost-Y - Mainnet            |     8226 |     8225 |         2 | 0xa2b2e2f2 | "\u001cGlobalboost Signed Message:\n"       |
| BTA    | Bata - Mainnet                     |     5784 |     5493 |         2 | 0x34c3afeb | "\u0015Bata Signed Message:\n"              |
| BTB    | BitBar - Mainnet                   |     8777 |     9344 |         1 | 0xe4e8e9e5 | "\u0017BitBar Signed Message:\n"            |
| BTC    | Bitcoin - Mainnet                  |     8333 |     8332 |         7 | 0xf9beb4d9 | "\u0018Bitcoin Signed Message:\n"           |
| BTCD   | BitcoinDark - Mainnet              |    14631 |    14632 |         0 | 0xa4a2d8e7 | "\u001cBitcoinDark Signed Message:\n"       |
| BTCP   | Bitcoin Private - Mainnet          |     7933 |     7932 |         2 | 0xa8eaa2cd | "\u001fBitcoinPrivate Signed Message:\n"    |
| BTCR   | Bitcurrency - Mainnet              |    15814 |    15815 |         3 | 0x70421309 | "\u001cBitCurrency Signed Message:\n"       |
| BTCZ   | BitcoinZ - Mainnet                 |     1989 |     1979 |         6 | 0x24e92764 | "\u0019BitcoinZ Signed Message:\n"          |
| BTDX   | Bitcloud - Mainnet                 |     8329 |     8330 |         1 | 0xe4e8bdfd | "\u0018Diamond Signed Message:\n"           |
| BTG    | Bitcoin Gold - Mainnet             |     8338 |     8332 |         3 | 0xe1476d44 | "\u001dBitcoin Gold Signed Message:\n"      |
| BTGEM  | Bitgem - Mainnet                   |     7692 |     8348 |         1 | 0xe4e8e9e5 | "\u0017BitGem Signed Message:\n"            |
| BTX    | Bitcore - Mainnet                  |     8555 |     8556 |         1 | 0xf9beb4d9 | "\u0018BitCore Signed Message:\n"           |
| BUB    | Bubble - Mainnet                   |    15716 |    15719 |         0 | 0xcd2119dd | "\u0017Bubble Signed Message:\n"            |
| BUMBA  | BumbaCoin - Mainnet                |    20222 |    10111 |         0 | 0xb1c0d2e3 | "\u001bbumbacoin2 Signed Message:\n"        |
| BUZZ   | BuzzCoin - Mainnet                 |    25128 |    25129 |         0 | 0x07358205 | "\u0019BuzzCoin Signed Message:\n"          |
| BWK    | Bulwark - Mainnet                  |    52543 |    52541 |        11 | 0x08020117 | "\u0018DarkNet Signed Message:\n"           |
| CANN   | CannabisCoin - Mainnet             |    39348 |    39347 |         2 | 0xfec3b9de | "\u001dCannabisCoin Signed Message:\n"      |
| CARBON | Carboncoin - Mainnet               |     9350 |     9351 |         2 | 0xabccbbdf | "\u001bCarboncoin Signed Message:\n"        |
| CAT    | Catcoin - Mainnet                  |     9933 |     9932 |         2 | 0xfcc1b7dc | "\u0018Catcoin Signed Message:\n"           |
| CAZ    | Cazcoin - Mainnet                  |    17350 |    17358 |        10 | 0x3da232b4 | "\u0018DarkNet Signed Message:\n"           |
| CBX    | Bullion - Mainnet                  |     7695 |     8395 |         1 | 0xe4e8e9e5 | "\u0018Bullion Signed Message:\n"           |
| CHAN   | ChanCoin - Mainnet                 |    19117 |    19118 |         5 | 0x0f9154f8 | "\u0019Chancoin Signed Message:\n"          |
| CHEAP  | Cheapcoin - Mainnet                |    36648 |    36645 |         0 | 0xf32da571 | "\u001acheapcoin Signed Message:\n"         |
| CHESS  | ChessCoin - Mainnet                |     7323 |     7324 |         1 | 0xde3aae3c | "\u001aChessCoin Signed Message:\n"         |
| CHIPS  | CHIPS - Mainnet                    |    57777 |    57776 |         6 | 0xffeeddcc | "\u0018Bitcoin Signed Message:\n"           |
| CJ     | Cryptojacks - Mainnet              |    33433 |    33533 |         7 | 0x5ac382d3 | "\u001cCryptoJacks Signed Message:\n"       |
| CLAM   | Clams - Mainnet                    |    31174 |    30174 |         1 | 0x03223515 | "\u0015Clam Signed Message:\n"              |
| CLUB   | ClubCoin - Mainnet                 |    18114 |    19114 |         5 | 0x70354205 | "\u0019ClubCoin Signed Message:\n"          |
| CMPCO  | CampusCoin - Mainnet               |    28195 |    28199 |         0 | 0xd7cfa4e6 | "\u001bCampusCoin Signed Message:\n"        |
| CNNC   | Cannation - Mainnet                |    12367 |    12368 |         0 | 0x52568b9e | "\u001acannation Signed Message:\n"         |
| CNX    | Cryptonex - Mainnet                |    20863 |    20864 |         7 | 0x18e482a0 | "\u001aCryptonex Signed Message:\n"         |
| COLX   | ColossusXT - Mainnet               |    51572 |    51473 |         3 | 0x91c5feea | "\u0018DarkNet Signed Message:\n"           |
| CON    | PayCon - Mainnet                   |     9455 |     9456 |         2 | 0x4b3c3b2d | "\u0017PayCon Signed Message:\n"            |
| CPC    | Capricoin - Mainnet                |    22714 |    22713 |        12 | 0xa1a0a2a3 | "\u001aCapricoin Signed Message:\n"         |
| CRAVE  | Crave - Mainnet                    |    48882 |    48883 |        10 | 0x564f4944 | "\u0018DarkNet Signed Message:\n"           |
| CRC    | CrowdCoin - Mainnet                |    12875 |     9998 |         7 | 0x1a4a5aaa | "\u0019DarkCoin Signed Message:\n"          |
| CRM    | Cream - Mainnet                    |    45066 |    45077 |         0 | 0x22e4c314 | "\u0016Cream Signed Message:\n"             |
| CROP   | Cropcoin - Mainnet                 |    17720 |    17721 |        10 | 0x11c3b1de | "\u0019CropCoin Signed Message:\n"          |
| CRW    | Crown - Mainnet                    |     9340 |     9341 |         8 | 0xb8ebb3df | "\u0016Crown Signed Message:\n"             |
| CTO    | Crypto - Mainnet                   |     8899 |     8898 |         0 | 0xa2c4b4da | "\u0017Crypto Signed Message:\n"            |
| CURE   | Curecoin - Mainnet                 |     9911 |    19911 |         2 | 0xe4e8e9e5 | "\u0019curecoin Signed Message:\n"          |
| CYDER  | Cyder - Mainnet                    |    48848 |    48845 |         0 | 0xf32da571 | "\u001acydercoin Signed Message:\n"         |
| DASH   | Dash - Mainnet                     |     9999 |     9998 |         4 | 0xbf0c6bbd | "\u0019DarkCoin Signed Message:\n"          |
| DCR    | Decred - Mainnet                   |     9108 |     9109 |         4 | 0xf900b4d9 | "\u0017Decred Signed Message:\n"            |
| DEM    | Deutsche eMark - Mainnet           |     5556 |     6666 |         1 | 0xe4e8e9e5 | "\u0016eMark Signed Message:\n"             |
| DEV    | DeviantCoin - Mainnet              |    22618 |    22617 |         5 | 0x28b4adb8 | "\u0018DarkNet Signed Message:\n"           |
| DGB    | DigiByte - Mainnet                 |    12024 |     8332 |         7 | 0xfac3b6da | "\u0019DigiByte Signed Message:\n"          |
| DGC    | Digitalcoin - Mainnet              |     7999 |     7998 |         2 | 0xfbc0b6db | "\u001cDigitalcoin Signed Message:\n"       |
| DIME   | Dimecoin - Mainnet                 |    11931 |     8372 |         0 | 0xfea503dd | "\u0019Dimecoin Signed Message:\n"          |
| DLC    | Dollarcoin - Mainnet               |     8145 |     8146 |         0 | 0xfc9b3d41 | "\u001bdollarcoin Signed Message:\n"        |
| DMB    | Digital Money Bits - Mainnet       |    35097 |    35098 |         0 | 0xf12ffeef | "!Digitalmoneybits Signed Message:\n"       |
| DMD    | Diamond - Mainnet                  |    17771 |    17770 |         1 | 0xe4e8bdfd | "\u0018Diamond Signed Message:\n"           |
| DNR    | Denarius - Mainnet                 |    33339 |    32339 |         9 | 0xfaf2efb4 | "\u0019Denarius Signed Message:\n"          |
| DOGE   | Dogecoin - Mainnet                 |    22556 |    22555 |         4 | 0xc0c0c0c0 | "\u0019Dogecoin Signed Message:\n"          |
| DOLLAR | Dollar Online - Mainnet            |    22888 |    22882 |        10 | 0xa1a0a2a3 | "\u001dDOLLAROnline Signed Message:\n"      |
| DRXNE  | DROXNE - Mainnet                   |    41241 |    41242 |         0 | 0xb4fee4e5 | "\u0017Droxne Signed Message:\n"            |
| ECN    | E-coin - Mainnet                   |    18741 |    18742 |         1 | 0xb4f8e2e5 | "\u0016eCoin Signed Message:\n"             |
| EGC    | EverGreenCoin - Mainnet            |     5757 |     5758 |        27 | 0x21246247 | "\u001eEverGreenCoin Signed Message:\n"     |
| EGG    | EggCoin - Mainnet                  |    31104 |    31105 |         0 | 0x1a320320 | "\u0018Eggcoin Signed Message:\n"           |
| EMB    | EmberCoin - Mainnet                |    10024 |    10022 |         3 | 0xefa9657c | "\u0016Ember Signed Message:\n"             |
| EMC    | Emercoin - Mainnet                 |     6661 |     6662 |         4 | 0xe6e8e9e5 | "\u0019EmerCoin Signed Message:\n"          |
| EMC2   | Einsteinium - Mainnet              |    41878 |    41879 |         9 | 0xe8f1c4ac | "\u001cEinsteinium Signed Message:\n"       |
| EMD    | Emerald Crypto - Mainnet           |    12127 |    12128 |         5 | 0xfbc0b6db | "\u0018Emerald Signed Message:\n"           |
| ENRG   | Energycoin - Mainnet               |    22706 |    22705 |         0 | 0xfcd9b7dd | "\u001bEnergyCoin Signed Message:\n"        |
| ENT    | Eternity - Mainnet                 |     4855 |     4854 |         1 | 0x8ff74d2e | "\u0019DarkCoin Signed Message:\n"          |
| EQT    | EquiTrader - Mainnet               |    43103 |    43102 |         6 | 0xb4f8e7a5 | "\u001bEquiTrader Signed Message:\n"        |
| ERA    | ERA - Mainnet                      |    14442 |    14443 |         0 | 0xea117acc | "\u001aBlakeStar Signed Message:\n"         |
| ERC    | EuropeCoin - Mainnet               |     8881 |    11989 |         0 | 0x4555524f | "\u0018Bitcoin Signed Message:\n"           |
| ETH    | Ethereum - Mainnet                 |    30303 |     8545 |         0 |            | "\u0019Ethereum Signed Message:\n"          |
| EVIL   | Evil Coin - Mainnet                |    20001 |    20002 |         0 | 0xa1a0a2a3 | "\u0019EvilCoin Signed Message:\n"          |
| EXCL   | ExclusiveCoin - Mainnet            |    23230 |    23231 |         1 | 0xa23d2ff3 | "\u001eExclusiveCoin Signed Message:\n"     |
| FAIR   | FairCoin - Mainnet                 |    46392 |    46393 |         2 | 0xe4e8e9e5 | "\u0019FairCoin Signed Message:\n"          |
| FGC    | FantasyGold - Mainnet              |    57810 |    57814 |        24 | 0x54494D42 | "\u0018DarkNet Signed Message:\n"           |
| FJC    | FujiCoin - Mainnet                 |     3777 |     3776 |         2 | 0x66756a69 | "\u0019FujiCoin Signed Message:\n"          |
| FLO    | FlorinCoin - Mainnet               |     7312 |     7313 |         5 | 0xfdc0a5f1 | "\u001bFlorincoin Signed Message:\n"        |
| FLT    | FlutterCoin - Mainnet              |     7408 |     7474 |         1 | 0xcfd1e8ea | "\u001cFlutterCoin Signed Message:\n"       |
| FRC    | Freicoin - Mainnet                 |     8639 |     8638 |         4 | 0x2cfe7e6d | "\u0019Freicoin Signed Message:\n"          |
| FST    | Fastcoin - Mainnet                 |     9526 |     9527 |         5 | 0xfbc0b6db | "\u0019Fastcoin Signed Message:\n"          |
| FTC    | Feathercoin - Mainnet              |     9336 |     9337 |         4 | 0x41151a21 | "\u001cFeathercoin Signed Message:\n"       |
| FTO    | FuturoCoin - Mainnet               |     9009 |     9008 |         2 | 0xCFD2D4C6 | "\u0019DarkCoin Signed Message:\n"          |
| FUNK   | The Cypherfunks - Mainnet          |    33666 |    34666 |         1 | 0xfbc0b6db | "\u001bCypherfunk Signed Message:\n"        |
| GAIN   | UGAIN - Mainnet                    |     7891 |     7892 |         0 | 0x06bbe2e5 | "\u0016UGAIN Signed Message:\n"             |
| GAM    | Gambit - Mainnet                   |    47077 |    47177 |         3 | 0xf2f4f6f8 | "\u0017Gambit Signed Message:\n"            |
| GAME   | GameCredits - Mainnet              |    40002 |    40001 |         1 | 0xfbc0b6db | "\u001cGameCredits Signed Message:\n"       |
| GB     | GoldBlocks - Mainnet               |    27920 |    26920 |         7 | 0x60b6cdf4 | "\u001bGoldBlocks Signed Message:\n"        |
| GBX    | GoByte - Mainnet                   |    12455 |    12454 |        10 | 0x1ab2c3d4 | "\u0019DarkCoin Signed Message:\n"          |
| GEERT  | GeertCoin - Mainnet                |    64333 |    64332 |         1 | 0xf8d2e3bc | "\u001aGeertcoin Signed Message:\n"         |
| GIN    | GINcoin - Mainnet                  |    10111 |    10211 |         5 | 0xbf0c6bbd | "\u0019DarkCoin Signed Message:\n"          |
| GLD    | GoldCoin - Mainnet                 |     9333 |     9332 |         5 | 0xfbc0b6db | "\u0019Litecoin Signed Message:\n"          |
| GLT    | GlobalToken - Mainnet              |     9319 |     9320 |         1 | 0xc708d32d | "\u001cGlobaltoken Signed Message:\n"       |
| GPL    | Gold Pressed Latinum - Mainnet     |    23635 |    23645 |         1 | 0xcdf2c0ef | "#GoldPressedLatinum Signed Message:\n"     |
| GRC    | GridCoin - Mainnet                 |    32749 |    15715 |         6 | 0x70352205 | "\u0019Gridcoin Signed Message:\n"          |
| GRIM   | Grimcoin - Mainnet                 |    24861 |    24862 |         2 | 0xe7420652 | "\u0015Grim Signed Message:\n"              |
| GRLC   | Garlicoin - Mainnet                |    42069 |    42068 |         3 | 0xd2c6b6db | "\u001aGarlicoin Signed Message:\n"         |
| GRN    | Granite - Mainnet                  |    21777 |    21776 |        25 | 0xfec3b9de | "\u0018granite Signed Message:\n"           |
| GRS    | Groestlcoin - Mainnet              |     8333 |     1441 |         6 | 0xf9beb4d9 | "\u001cGroestlCoin Signed Message:\n"       |
| GSR    | GeyserCoin - Mainnet               |    10556 |    10555 |         3 | 0x60341208 | "\u001bGeyserCoin Signed Message:\n"        |
| GTC    | Global Tour Coin - Mainnet         |    28111 |    28110 |         0 | 0xd4caafeb | "\u001fGlobalTourCoin Signed Message:\n"    |
| HAL    | Halcyon - Mainnet                  |    21108 |    21109 |         2 | 0xa1a0a2a3 | "\u0018Halcyon Signed Message:\n"           |
| HALLO  | Halloween Coin - Mainnet           |    35727 |    35718 |         0 | 0x2cc34aa3 | "\u001aHalloween Signed Message:\n"         |
| HBN    | HoboNickels - Mainnet              |     7372 |     7373 |         5 | 0xe4e8e9e5 | "\u001cHoboNickels Signed Message:\n"       |
| HC     | Harvest Masternode Coin - Mainnet  |    12116 |    12117 |         0 | 0x1d7ea62d | "\u0018Harvest Signed Message:\n"           |
| HOLD   | Interstellar Holdings - Mainnet    |    10130 |    10131 |         2 | 0x902f3215 | "%InterstellarHoldings Signed Message:\n"   |
| HPC    | Happycoin - Mainnet                |    12846 |    12847 |         5 | 0xb4f3efcc | "\u001aHappyCoin Signed Message:\n"         |
| HTML   | HTMLCOIN - Mainnet                 |     4888 |     4889 |         4 | 0x1f2e3d4c | "\u0019HTMLCOIN Signed Message:\n"          |
| HVCO   | High Voltage - Mainnet             |    47824 |    47823 |         2 | 0xb1b6f8a6 | " HighVoltageCoin Signed Message:\n"        |
| HWC    | HollyWoodCoin - Mainnet            |    10267 |    11030 |         1 | 0x3b409d4f | "\u001eHollyWoodCoin Signed Message:\n"     |
| HXX    | Hexx - Mainnet                     |    29100 |    29200 |         5 | 0x68657878 | "\u0019hexxcoin Signed Message:\n"          |
| HYP    | HyperStake - Mainnet               |    18775 |    18777 |         2 | 0xdbadbdda | "\u001bHyperStake Signed Message:\n"        |
| HYPER  | Hyper - Mainnet                    |    11194 |    11195 |         0 | 0xcefbfadb | "\u0016hyper Signed Message:\n"             |
| I0C    | I0Coin - Mainnet                   |     7333 |     7332 |         1 | 0xf1b2b3d4 | "\u0018Bitcoin Signed Message:\n"           |
| IBANK  | iBank - Mainnet                    |     7619 |     7620 |         0 | 0xf45490dc | "\u0016iBank Signed Message:\n"             |
| ICON   | Iconic - Mainnet                   |    47426 |    47425 |         2 | 0xa3a5f8a6 | "\u0017Iconic Signed Message:\n"            |
| IFC    | Infinitecoin - Mainnet             |     9321 |     9322 |         3 | 0xfbc0b6db | "\u001dInfinitecoin Signed Message:\n"      |
| IFLT   | InflationCoin - Mainnet            |    11370 |    11371 |         0 | 0xdbc4f1fa | "\u001eInflationCoin Signed Message:\n"     |
| IMS    | Independent Money System - Mainnet |     6177 |     6178 |         0 | 0xcaa57766 | "'IndependentMoneySystem Signed Message:\n" |
| IMX    | Impact - Mainnet                   |    22629 |    21529 |         0 | 0xb1f5d3a9 | "\u0017impact Signed Message:\n"            |
| INFX   | Influxcoin - Mainnet               |     9238 |     9239 |        70 | 0xf1e0a2d3 | "\u0017Influx Signed Message:\n"            |
| INN    | Innova - Mainnet                   |    14520 |     8818 |         2 | 0x3c2a3ab9 | "\u0019DarkCoin Signed Message:\n"          |
| IOC    | I/O Coin - Mainnet                 |    33764 |    33765 |         0 | 0xfec3bade | "\u0018I\/OCoin Signed Message:\n"          |
| ION    | ION - Mainnet                      |    12700 |    12705 |         2 | 0xc4e1d8ec | "\u0014Ion Signed Message:\n"               |
| IRL    | IrishCoin - Mainnet                |    12375 |    11372 |         2 | 0xf7c1b6db | "\u001aIrishcoin Signed Message:\n"         |
| ISL    | IslaCoin - Mainnet                 |     9731 |     9831 |         3 | 0xa1a0a2a3 | "\u0019IslaCoin Signed Message:\n"          |
| ITI    | iTicoin - Mainnet                  |    42177 |    42144 |         3 | 0xe4e8e9e5 | "\u0018iTiCoin Signed Message:\n"           |
| IXC    | Ixcoin - Mainnet                   |     8337 |     8338 |         3 | 0xf1bab6db | "\u0018Bitcoin Signed Message:\n"           |
| JIYO   | Jiyo - Mainnet                     |     6080 |     6070 |         6 | 0x63434956 | "\u0018DarkNet Signed Message:\n"           |
| KEK    | KekCoin - Mainnet                  |    13337 |    13377 |         0 | 0x11223344 | "\u0018Kekcoin Signed Message:\n"           |
| KMD    | Komodo - Mainnet                   |     7770 |     7771 |         3 | 0xf9eee48d | "\u0017Komodo Signed Message:\n"            |
| KNC    | KingN Coin - Mainnet               |    18373 |    18374 |         1 | 0xfc4c8736 | "\u001aKingNCoin Signed Message:\n"         |
| KOBO   | Kobocoin - Mainnet                 |     9011 |     3341 |         4 | 0xa1a0a2a3 | "\u0019Kobocoin Signed Message:\n"          |
| KUSH   | KushCoin - Mainnet                 |    31544 |    31543 |         2 | 0xb4e9c2ee | "\u0019KushCoin Signed Message:\n"          |
| LANA   | LanaCoin - Mainnet                 |     7506 |     5706 |         9 | 0xa5f790fd | "\u0019Lanacoin Signed Message:\n"          |
| LBC    | LBRY Credits - Mainnet             |     9246 |     9245 |         3 | 0xfae4aaf1 | "\u0018LBRYcrd Signed Message:\n"           |
| LBTC   | LiteBitcoin - Mainnet              |    19037 |    19038 |         1 | 0x5b6d2f54 | "\u001cLitebitcoin Signed Message:\n"       |
| LCC    | Litecoin Cash - Mainnet            |    62458 |    62457 |         1 | 0xc7e4baf8 | "\u0019Litecoin Signed Message:\n"          |
| LCP    | Litecoin Plus - Mainnet            |    44351 |    44350 |         2 | 0xcefbfadb | "\u001dLitecoinPlus Signed Message:\n"      |
| LEO    | LEOcoin - Mainnet                  |     5840 |     5211 |         0 | 0x646e7882 | "\u0018LEOcoin Signed Message:\n"           |
| LINDA  | Linda - Mainnet                    |    33820 |    33821 |         0 | 0x9cd31701 | "\u0016Linda Signed Message:\n"             |
| LIR    | LetItRide - Mainnet                |     2717 |     2718 |         0 | 0x2fc3e527 | "\u001aLetItRide Signed Message:\n"         |
| LOG    | Woodcoin - Mainnet                 |     8338 |     9332 |         6 | 0xfcd9b7dd | "\u0019Woodcoin Signed Message:\n"          |
| LTC    | Litecoin - Mainnet                 |     9333 |     9332 |         5 | 0xfbc0b6db | "\u0019Litecoin Signed Message:\n"          |
| LUX    | LUXCoin - Mainnet                  |    26969 |     9888 |         0 | 0x6ab3c8a9 | "\u0014Lux Signed Message:\n"               |
| MAC    | Machinecoin - Mainnet              |    40333 |    40332 |         3 | 0xfbc0b6db | "\u001cMachinecoin Signed Message:\n"       |
| MAGN   | Magnetcoin - Mainnet               |    22458 |    22459 |         0 | 0xa4d2f8a6 | "\u001bMagnetCoin Signed Message:\n"        |
| MAO    | Mao Zedong - Mainnet               |     9670 |     9669 |        14 | 0xf4d335f1 | "\u0014mao Signed Message:\n"               |
| MARX   | MarxCoin - Mainnet                 |    41103 |    41102 |         4 | 0xfec3b9de | "\u0015MARX Signed Message:\n"              |
| MAX    | MaxCoin - Mainnet                  |     8668 |     8669 |         2 | 0xf9bebbd2 | "\u0018MaxCoin Signed Message:\n"           |
| MAY    | Theresa May Coin - Mainnet         |    35010 |    35011 |         0 | 0xa4d2f8a6 | "\u001bTheresaMay Signed Message:\n"        |
| MAZA   | MAZA - Mainnet                     |    12835 |    12832 |         1 | 0xf8b503df | "\u0015Maza Signed Message:\n"              |
| MCRN   | MACRON - Mainnet                   |    55553 |    55555 |         0 | 0xa4d2f8a6 | "\u0017MACRON Signed Message:\n"            |
| MEC    | Megacoin - Mainnet                 |     7951 |     7952 |         0 | 0xede0e4ee | "\u0019MegaCoin Signed Message:\n"          |
| MEDIC  | MedicCoin - Mainnet                |     2118 |     2117 |         0 | 0x1bd76fc9 | "\u001aMedicCoin Signed Message:\n"         |
| MEME   | Memetic / PepeCoin - Mainnet       |    29377 |    29376 |         2 | 0x3ac42c2f | "\u0019PepeCoin Signed Message:\n"          |
| METAL  | MetalCoin - Mainnet                |    22332 |    22333 |         0 | 0xa1a0a2a3 | "\u001aMetalCoin Signed Message:\n"         |
| MINT   | Mintcoin - Mainnet                 |    12788 |    12789 |         3 | 0xced5dbfa | "\u0019MintCoin Signed Message:\n"          |
| MLM    | MktCoin - Mainnet                  |     9275 |     9276 |         1 | 0xf9beb4d9 | "\u0018MKTcoin Signed Message:\n"           |
| MNM    | Mineum - Mainnet                   |    31316 |    31315 |         1 | 0x5ac382d3 | "\u0017Mineum Signed Message:\n"            |
| MNX    | MinexCoin - Mainnet                |     8335 |    17786 |         5 | 0x4b4a4c5d | "\u0018Bitcoin Signed Message:\n"           |
| MOJO   | MojoCoin - Mainnet                 |     9495 |     9496 |         9 | 0x71312106 | "\u0019Mojocoin Signed Message:\n"          |
| MONA   | MonaCoin - Mainnet                 |     9401 |     9402 |         1 | 0xfbc0b6db | "\u0019Monacoin Signed Message:\n"          |
| MONK   | Monkey Project - Mainnet           |     8710 |     8101 |         6 | 0x42a4c52b | "\u0017Monkey Signed Message:\n"            |
| MOON   | Mooncoin - Mainnet                 |    44664 |    44663 |         3 | 0xf9f7c0e8 | "\u0019Mooncoin Signed Message:\n"          |
| MRQ    | MIRQ - Mainnet                     |    55611 |    55622 |         0 | 0xe1ab3cc1 | "\u0018DarkNet Signed Message:\n"           |
| MST    | MustangCoin - Mainnet              |    19667 |    19668 |         0 | 0xa1a0a2a3 | "\u0018mustang Signed Message:\n"           |
| MTNC   | Masternodecoin - Mainnet           |    10086 |    10085 |         0 | 0xd5ce8c5e | "\u001fMasternodecoin Signed Message:\n"    |
| MUE    | MonetaryUnit - Mainnet             |    19683 |    29683 |         4 | 0xb5cccda7 | "\u0014MUE Signed Message:\n"               |
| MXT    | MarteXcoin - Mainnet               |    51315 |    51314 |         5 | 0x2d3fa2f5 | "\u0017MarteX Signed Message:\n"            |
| NAV    | NavCoin - Mainnet                  |    44440 |    44444 |         2 | 0x80503420 | "\u0018Navcoin Signed Message:\n"           |
| NEVA   | NevaCoin - Mainnet                 |     7391 |     3791 |        12 | 0xe483e632 | "\u0019Nevacoin Signed Message:\n"          |
| NLC2   | NoLimitCoin - Mainnet              |     6521 |     6520 |         3 | 0xb1b6f8a6 | "\u001cNoLimitCoin Signed Message:\n"       |
| NLG    | Gulden - Mainnet                   |     9231 |     9232 |         5 | 0xfcfef7e0 | "\u001bGuldencoin Signed Message:\n"        |
| NLX    | Nullex - Mainnet                   |     6897 |     6898 |         0 | 0x9f180a16 | "\u0017NulleX Signed Message:\n"            |
| NMC    | Namecoin - Mainnet                 |     8334 |     8336 |         2 | 0xf9beb4fe | "\u0018Bitcoin Signed Message:\n"           |
| NMS    | Numus - Mainnet                    |    28121 |    28122 |         0 | 0xf1eca1c7 | "\u0016Numus Signed Message:\n"             |
| NUMUS  | NumusCash - Mainnet                |    21139 |    21140 |         1 | 0x654ac5d5 | "\u001aNumusCash Signed Message:\n"         |
| NVC    | Novacoin - Mainnet                 |     7777 |     8344 |         4 | 0xe4e8e9e5 | "\u0019NovaCoin Signed Message:\n"          |
| NYC    | NewYorkCoin - Mainnet              |    17020 |    18823 |         0 | 0xc0c0c0c0 | "\u0019newyorkc Signed Message:\n"          |
| OCC    | Octoin Coin - Mainnet              |    16840 |     8332 |         3 | 0x64736261 | "\u001bOctoinCoin Signed Message:\n"        |
| ODN    | Obsidian - Mainnet                 |    56660 |    56661 |         5 | 0x4f646e31 | "\u0019Obsidian Signed Message:\n"          |
| OK     | OKCash - Mainnet                   |     6970 |     6969 |         6 | 0x69f00f69 | "\u0017OKCash Signed Message:\n"            |
| OMC    | Omicron - Mainnet                  |     8519 |     8520 |         0 | 0xf240ebb3 | "\u0018Omicron Signed Message:\n"           |
| ONION  | DeepOnion - Mainnet                |    17570 |    18580 |         0 | 0xd1f1dbf2 | "\u001aDeepOnion Signed Message:\n"         |
| OPC    | OP Coin - Mainnet                  |    13355 |    13357 |         3 | 0x9be0d8e9 | "\u0017OPCoin Signed Message:\n"            |
| ORE    | Galactrum - Mainnet                |     6270 |     6269 |         5 | 0xb1ded0af | "\u0019DarkCoin Signed Message:\n"          |
| PAK    | Pakcoin - Mainnet                  |     7867 |     7866 |         1 | 0x70616b63 | "\u0018Pakcoin Signed Message:\n"           |
| PART   | Particl - Mainnet                  |    51738 |    51735 |         3 | 0xfbf2efb4 | "\u0018Bitcoin Signed Message:\n"           |
| PHR    | Phore - Mainnet                    |    11771 |    11772 |         2 | 0x91c4fde9 | "\u0018DarkNet Signed Message:\n"           |
| PHS    | Philosopher Stones - Mainnet       |    16281 |    16282 |         0 | 0xe4efdbfd | "!Philosopherstone Signed Message:\n"       |
| PIGGY  | Piggycoin - Mainnet                |    54481 |    54480 |         4 | 0xa1a0a2a3 | "\u001dnewpiggycoin Signed Message:\n"      |
| PINK   | PinkCoin - Mainnet                 |     9134 |     9135 |         6 | 0xf2f4f9fb | "\u0019Pinkcoin Signed Message:\n"          |
| PIVX   | PIVX - Mainnet                     |    51472 |    51473 |         4 | 0x90c4fde9 | "\u0018DarkNet Signed Message:\n"           |
| PLACO  | PlayerCoin - Mainnet               |    16666 |    17321 |         1 | 0xeb3d1cc4 | "\u001bPlayerCoin Signed Message:\n"        |
| PND    | Pandacoin - Mainnet                |    22445 |    22444 |         1 | 0xc0c0c0c0 | "\u001aPandacoin Signed Message:\n"         |
| PNX    | Phantomx - Mainnet                 |    31978 |    21978 |         0 | 0xd627d6e2 | "\u0016Cream Signed Message:\n"             |
| POLIS  | Polis - Mainnet                    |    24126 |    24127 |         5 | 0xbf0c6bbd | "\u0019DarkCoin Signed Message:\n"          |
| POP    | PopularCoin - Mainnet              |    18181 |    27172 |         0 | 0xcefbfadb | "\u001cPopularCoin Signed Message:\n"       |
| POST   | PostCoin - Mainnet                 |     9130 |     9131 |         0 | 0x35c3d6a2 | "\u0019PostCoin Signed Message:\n"          |
| POT    | PotCoin - Mainnet                  |     4200 |    42000 |         1 | 0xfbc0b6db | "\u0018Potcoin Signed Message:\n"           |
| PPC    | Peercoin - Mainnet                 |     9901 |     9902 |         2 | 0xe5e9e8e6 | "\u0019Peercoin Signed Message:\n"          |
| PROUD  | PROUD Money - Mainnet              |    24241 |    24242 |         9 | 0xf1e0a2d3 | "\u0019GAY Coin Signed Message:\n"          |
| PURA   | Pura - Mainnet                     |    44444 |    55555 |         0 | 0xb897c543 | "\u0015Pura Signed Message:\n"              |
| PURE   | Pure - Mainnet                     |    32745 |    32746 |        10 | 0x11c3b1de | "\u0015Pure Signed Message:\n"              |
| PUT    | PutinCoin - Mainnet                |    20095 |    20094 |         0 | 0xb7f0e2e5 | "\u001aPutinCoin Signed Message:\n"         |
| Q2C    | QubitCoin - Mainnet                |     7788 |     7799 |         4 | 0xfea503dd | "\u001aQubitcoin Signed Message:\n"         |
| QBC    | Quebecoin - Mainnet                |    56790 |    56789 |         2 | 0xd3edc9f1 | "\u001aQuebecoin Signed Message:\n"         |
| QTL    | Quatloo - Mainnet                  |    17012 |    17011 |         3 | 0xfacebeda | "\u0018Quatloo Signed Message:\n"           |
| QTUM   | Qtum - Mainnet                     |     3888 |     3889 |         4 | 0xf1cfa6d3 | "\u0015Qtum Signed Message:\n"              |
| RADS   | Radium - Mainnet                   |    27913 |    27914 |         0 | 0x2a7ccbab | "\u0017radium Signed Message:\n"            |
| RBY    | Rubycoin - Mainnet                 |     5937 |     5938 |         4 | 0x13121611 | "\u0019Rubycoin Signed Message:\n"          |
| RC     | RussiaCoin - Mainnet               |    19992 |    19991 |         0 | 0xc0c0c0c0 | "\u001bRussiaCoin Signed Message:\n"        |
| RDD    | ReddCoin - Mainnet                 |    45444 |    45443 |         4 | 0xfbc0b6db | "\u0019Reddcoin Signed Message:\n"          |
| REGA   | Regacoin - Mainnet                 |    28192 |    28190 |         0 | 0xd4ca3fec | "\u0015REGA Signed Message:\n"              |
| RIC    | Riecoin - Mainnet                  |    28333 |    28332 |         1 | 0xfcbcb2db | "\u0018riecoin Signed Message:\n"           |
| RNS    | Renos - Mainnet                    |    57155 |    57154 |         2 | 0xaaa3b2c4 | "\u001aRenosCoin Signed Message:\n"         |
| ROOFS  | Roofs - Mainnet                    |    20019 |    20020 |         0 | 0x904a9240 | "\u0016ROOFS Signed Message:\n"             |
| RPC    | RonPaulCoin - Mainnet              |     9027 |     9026 |         1 | 0xfbc0b6db | "\u001cRonPaulCoin Signed Message:\n"       |
| RUP    | Rupee - Mainnet                    |    10459 |    10460 |         0 | 0x3b69ded4 | "\u0016RUPEE Signed Message:\n"             |
| RUPX   | Rupaya - Mainnet                   |     9020 |     7020 |         6 | 0x63434956 | "\u0018DarkNet Signed Message:\n"           |
| RVN    | Ravencoin - Mainnet                |     8767 |     8766 |         2 | 0x5241564e | "\u0016Raven Signed Message:\n"             |
| SAGA   | SagaCoin - Mainnet                 |    48744 |    48844 |         2 | 0xaaa3b2c4 | "\u0019SagaCoin Signed Message:\n"          |
| SAK    | Sharkcoin - Mainnet                |     4011 |     4009 |         2 | 0xfea503db | "\u001aSharkcoin Signed Message:\n"         |
| SBC    | StrikeBitClub - Mainnet            |    21575 |    21576 |         2 | 0x556a3299 | "\u0018SBCcoin Signed Message:\n"           |
| SEQ    | Sequence - Mainnet                 |    16662 |    16663 |         4 | 0x01100220 | "\u0015Silk Signed Message:\n"              |
| SIB    | SIBCoin - Mainnet                  |     1945 |     1944 |         5 | 0xbf0c6bbd | "\u0018SibCoin Signed Message:\n"           |
| SKC    | Skeincoin - Mainnet                |    11230 |    21230 |        11 | 0xf726a1bf | "\u001aSkeincoin Signed Message:\n"         |
| SLR    | SolarCoin - Mainnet                |    18188 |    18181 |         2 | 0x04f104fd | "\u001aSolarCoin Signed Message:\n"         |
| SLS    | SaluS - Mainnet                    |    22534 |    22530 |         0 | 0xd3c5a721 | "\u0016SaluS Signed Message:\n"             |
| SMART  | SmartCash - Mainnet                |     9678 |     9679 |         9 | 0x5ca1ab1e | "\u001aSmartCash Signed Message:\n"         |
| SOCC   | SocialCoin - Mainnet               |    18645 |    18646 |         0 | 0xee64e31d | "\u001bSocialcoin Signed Message:\n"        |
| SONG   | SongCoin - Mainnet                 |     8335 |     8334 |         1 | 0x534f4e47 | "\u0019Songcoin Signed Message:\n"          |
| SPACE  | SpaceCoin - Mainnet                |     9172 |     9173 |         3 | 0xf4f2f9fb | "\u001aSpaceCoin Signed Message:\n"         |
| SPD    | Stipend - Mainnet                  |    46978 |    46979 |         0 | 0xa3fbdbdb | "\u0018Stipend Signed Message:\n"           |
| SPHR   | Sphere - Mainnet                   |    37544 |    37545 |         1 | 0xa8b81130 | "\u0017Sphere Signed Message:\n"            |
| SPK    | Sparks - Mainnet                   |     8890 |     8892 |         4 | 0x1ab2c3d4 | "\u0019DarkCoin Signed Message:\n"          |
| SRC    | SecureCoin - Mainnet               |    12567 |    12568 |         1 | 0xfcb4d9ab | "\u001bSecurecoin Signed Message:\n"        |
| STAK   | STRAKS - Mainnet                   |     7575 |     7574 |         5 | 0xb0d5f02c | "\u0017Straks Signed Message:\n"            |
| STN    | Steneum Coin - Mainnet             |    26965 |    26966 |         0 | 0xe626170d | "\u0018Steneum Signed Message:\n"           |
| STRAT  | Stratis - Mainnet                  |    26965 |    26966 |         0 | 0xe626170d | "\u0018Stratis Signed Message:\n"           |
| STV    | Sativacoin - Mainnet               |    60990 |    62990 |         3 | 0xa1a0a2a3 | "\u001bsativacoin Signed Message:\n"        |
| SUPER  | SuperCoin - Mainnet                |    19390 |    19391 |         2 | 0xdbfafcfd | "\u001aSuperCoin Signed Message:\n"         |
| SWING  | Swing - Mainnet                    |    16061 |    16080 |         1 | 0xdd1ee2af | "\u0016Swing Signed Message:\n"             |
| SXC    | Sexcoin - Mainnet                  |     9560 |     9561 |         3 | 0xface6969 | "\u0018Sexcoin Signed Message:\n"           |
| SYS    | Syscoin - Mainnet                  |     8369 |     8370 |         4 | 0xf9beb4d9 | "\u0018Syscoin Signed Message:\n"           |
| TAJ    | TajCoin - Mainnet                  |    10712 |    12107 |         9 | 0x7d4f8b4d | "\u0018Tajcoin Signed Message:\n"           |
| TELL   | Tellurion - Mainnet                |     9999 |    33716 |         5 | 0x1a1c3a1b | "\u001aTellurion Signed Message:\n"         |
| THC    | HempCoin - Mainnet                 |    21054 |    12055 |         0 | 0xa5a5fd01 | "\u0019Hempcoin Signed Message:\n"          |
| TOA    | ToaCoin - Mainnet                  |     9642 |     3564 |         0 | 0xeaafe3c7 | "\u0014TOA Signed Message:\n"               |
| TOKC   | TOKYO - Mainnet                    |    23517 |    23518 |         1 | 0x005aab1e | "\u001aTokyocoin Signed Message:\n"         |
| TOP    | TopCoin - Mainnet                  |    22561 |    22562 |         0 | 0xcefbfadb | "\u0019TopCoin3 Signed Message:\n"          |
| TPAY   | TokenPay - Mainnet                 |     8801 |     8800 |         0 | 0xfbf1e2b1 | "\u0019TokenPay Signed Message:\n"          |
| TRC    | Terracoin - Mainnet                |    13333 |    13332 |         2 | 0x42babe56 | "\u0019DarkCoin Signed Message:\n"          |
| TRK    | Truckcoin - Mainnet                |    18775 |    18776 |         5 | 0xdbadbdda | "\u001aTruckcoin Signed Message:\n"         |
| TX     | TransferCoin - Mainnet             |    17170 |    17171 |         3 | 0xd12e1ee6 | "\u0019Transfer Signed Message:\n"          |
| UIS    | Unitus - Mainnet                   |    50603 |    50604 |         4 | 0xc5abc69d | "\u0017Unitus Signed Message:\n"            |
| ULA    | Ulatech - Mainnet                  |    21659 |    21660 |         2 | 0x8ba3369a | "\u0018UlaTech Signed Message:\n"           |
| UNIFY  | Unify - Mainnet                    |    18649 |    18650 |         6 | 0xc447f9ee | "\u0016Unify Signed Message:\n"             |
| UNIT   | Universal Currency - Mainnet       |    14158 |    14157 |         0 | 0xa4d2f8a6 | "\"UniversalCurrency Signed Message:\n"     |
| UNO    | Unobtanium - Mainnet               |    65534 |    65535 |         3 | 0x03d5b503 | "\u001bUnobtanium Signed Message:\n"        |
| USC    | Ultimate Secure Cash - Mainnet     |    51737 |    51736 |         0 | 0xfaf2efb4 | "#UltimateSecureCash Signed Message:\n"     |
| VEC2   | VectorAI - Mainnet                 |     1715 |     1716 |         0 | 0xe79260e8 | "\u0017Vector Signed Message:\n"            |
| VIA    | Viacoin - Mainnet                  |     5223 |     5222 |         3 | 0x0f68c6cb | "\u0018Viacoin Signed Message:\n"           |
| VIDZ   | PureVidz - Mainnet                 |     3818 |     4818 |         0 | 0xe4155311 | "\u0019PureVidz Signed Message:\n"          |
| VIPS   | Vipstar Coin - Mainnet             |    31915 |    31916 |         1 | 0x012CE7B5 | "\u001cVIPSTARCOIN Signed Message:\n"       |
| VISIO  | Visio - Mainnet                    |    16778 |    16774 |         4 | 0x70352205 | "\u0016Visio Signed Message:\n"             |
| VIVO   | VIVO - Mainnet                     |    12845 |     9998 |         2 | 0x1d425ba7 | "\u0019DarkCoin Signed Message:\n"          |
| VOLT   | Bitvolt - Mainnet                  |    11516 |    15615 |         0 | 0x12695122 | "\u0019VoltCoin Signed Message:\n"          |
| VOT    | VoteCoin - Mainnet                 |     8144 |     8242 |         3 | 0x24e92764 | "\u0016Zcash Signed Message:\n"             |
| VRC    | VeriCoin - Mainnet                 |    58684 |    58683 |         3 | 0x70352205 | "\u0019VeriCoin Signed Message:\n"          |
| VSX    | Vsync - Mainnet                    |    65010 |    65015 |        10 | 0x21550a5a | "\u0018DarkNet Signed Message:\n"           |
| VTA    | Virtacoin - Mainnet                |    22816 |    22815 |         2 | 0xbed0c8d1 | "\u001aVirtaCoin Signed Message:\n"         |
| VTC    | Vertcoin - Mainnet                 |     5889 |     5888 |         7 | 0xfabfb5da | "\u0019Vertcoin Signed Message:\n"          |
| VULC   | Vulcano - Mainnet                  |    21041 |    21042 |         4 | 0xe5777746 | "\u0018VULCANO Signed Message:\n"           |
| WC     | WINCOIN - Mainnet                  |    11610 |    11611 |         0 | 0xf9beb4d9 | "\u001dWinCoin Signed Message, sun:\n"      |
| WINK   | Wink - Mainnet                     |    37748 |    37745 |         0 | 0xf32da571 | "\u0019winkcoin Signed Message:\n"          |
| WOMEN  | WomenCoin - Mainnet                |    19207 |    19208 |         0 | 0xf11394ee | "\u001aWOMENCOIN Signed Message:\n"         |
| XBTC21 | Bitcoin 21 - Mainnet               |    21008 |    21007 |         6 | 0xb4f8e2e5 | "\u001aBitcoin21 Signed Message:\n"         |
| XBTS   | Beatcoin - Mainnet                 |    26152 |    26151 |         0 | 0xa1a0a2a3 | "\u001aBeatsCoin Signed Message:\n"         |
| XCO    | X-Coin - Mainnet                   |    14641 |    14642 |         0 | 0xa5d2d7a6 | "\u0016Xcoin Signed Message:\n"             |
| XCT    | C-Bit - Mainnet                    |     8289 |     8288 |         0 | 0xdeadfed5 | "\u0018Bitcoin Signed Message:\n"           |
| XGOX   | XGOX - Mainnet                     |    23185 |    23186 |         2 | 0x71ae7664 | "\u0015xgox Signed Message:\n"              |
| XJO    | Joulecoin - Mainnet                |    26789 |     8844 |         6 | 0xa5c07955 | "\u001aJoulecoin Signed Message:\n"         |
| XLR    | Solaris - Mainnet                  |    60020 |    61020 |        13 | 0x022101a1 | "\u0018DarkNet Signed Message:\n"           |
| XMR    | Monero - Mainnet                   |    18080 |    18081 |         4 |            | ""                                          |
| XMY    | Myriad - Mainnet                   |    10888 |    10889 |         9 | 0xaf4576ee | "\u001bMyriadcoin Signed Message:\n"        |
| XP     | Experience Points - Mainnet        |    28192 |    28191 |         4 | 0xb4f8e2e5 | "\u0013XP Signed Message:\n"                |
| XPM    | Primecoin - Mainnet                |     9911 |     9912 |         4 | 0xe4e7e5e7 | "\u001aPrimecoin Signed Message:\n"         |
| XPTX   | PlatinumBAR - Mainnet              |    18993 |    18994 |         5 | 0x03030606 | "\u001cPlatinumBar Signed Message:\n"       |
| XQN    | Quotient - Mainnet                 |    30994 |    30997 |         1 | 0xefb2faf2 | "\u0019Quotient Signed Message:\n"          |
| XRA    | Ratecoin - Mainnet                 |    35851 |    35850 |         3 | 0xa1a0a2a3 | "\u0019RATECoin Signed Message:\n"          |
| XRE    | RevolverCoin - Mainnet             |     8777 |     8775 |         0 | 0xf9beb4d9 | "\u001dRevolverCoin Signed Message:\n"      |
| XSN    | Stakenet - Mainnet                 |    62583 |    51473 |         6 | 0xbf0c6cbd | "\u0019DarkCoin Signed Message:\n"          |
| XSPEC  | Spectrecoin - Mainnet              |    37347 |    36657 |         0 | 0xb5225cd3 | "\u001cSpectreCoin Signed Message:\n"       |
| XTO    | Tao - Mainnet                      |    15150 |    15151 |         7 | 0x1dd11ee1 | "\u0014Tao Signed Message:\n"               |
| XVG    | Verge - Mainnet                    |    21102 |    20102 |         0 | 0xf7a77eff | "\u0016VERGE Signed Message:\n"             |
| XWC    | WhiteCoin - Mainnet                |    15814 |    15815 |         4 | 0x182d43f3 | "\u001aWhitecoin Signed Message:\n"         |
| XZC    | ZCoin - Mainnet                    |     8168 |     8888 |         5 | 0xe3d9fef1 | "\u0016Zcoin Signed Message:\n"             |
| YTN    | YENTEN - Mainnet                   |     9981 |     9252 |         1 | 0xad5aeb9f | "\u0017Yenten Signed Message:\n"            |
| ZCL    | ZClassic - Mainnet                 |     8033 |     8023 |        13 | 0x24e92764 | "\u0016Zcash Signed Message:\n"             |
| ZEC    | Zcash - Mainnet                    |     8233 |     8232 |         3 | 0x24e92764 | "\u0016Zcash Signed Message:\n"             |
| ZEIT   | Zeitcoin - Mainnet                 |    44845 |    44843 |         3 | 0xced5dbfa | "\u0019Zeitcoin Signed Message:\n"          |
| ZEN    | ZenCash - Mainnet                  |     9033 |     8231 |         6 | 0x63617368 | "\u0016Zcash Signed Message:\n"             |
| ZENI   | Zennies - Mainnet                  |    11011 |    11012 |         2 | 0x2a7ccbab | "\u0019ZeniCoin Signed Message:\n"          |
| ZET    | Zetacoin - Mainnet                 |    17333 |     8332 |        12 | 0xfab503df | "\u0019Zetacoin Signed Message:\n"          |
| ZOI    | Zoin - Mainnet                     |     8255 |     8255 |         0 | 0xf503a951 | "\u0015Zoin Signed Message:\n"              |
| ZYD    | Zayedcoin - Mainnet                |     8371 |     8372 |         0 | 0xd0cecf9c | "\u001aZayedcoin Signed Message:\n"         |
| ZZC    | ZoZoCoin - Mainnet                 |    19995 |     3882 |         9 | 0xbf0c6bbd | "\u0019DarkCoin Signed Message:\n"          |

## Testnet

| Symbol | Name                               | P2P Port | RPC Port | DNS Seeds | P2P Magic          | Message Magic                               |
|--------|------------------------------------|----------|----------|-----------|--------------------|---------------------------------------------|
| $PAC   | PACcoin - Testnet                  |    17112 |    17111 |         1 | 0x9b2ffae3         | "\u0019DarkCoin Signed Message:\n"          |
|   1337 | Elite - Testnet                    |    26714 |    26715 |         0 | 0xcdf2c0ef         | "\u00151337 Signed Message:\n"              |
|     42 | 42-coin - Testnet                  |    42420 |    21210 |         0 | 0xcdf2c0ef         | "\u001342 Signed Message:\n"                |
| ABJC   | Abjcoin Commerce - Testnet         |    69081 |    69081 |         0 | 0x1bba63c5         | " AbjcoinCommerce Signed Message:\n"        |
| ACC    | AdCoin - Testnet                   |    19335 |    29500 |         3 | 0xfdd2c8f1         | "\u0017AdCoin Signed Message:\n"            |
| ACES   | Aces - Testnet                     |    21275 |    21275 |         0 | 0x70352205         | "\u0019AcesCoin Signed Message:\n"          |
| ACP    | AnarchistsPrime - Testnet          |     5744 |     5745 |         0 | 0x0b110907         | " AnarchistsPrime Signed Message:\n"        |
| ADZ    | Adzcoin - Testnet                  |   143029 |   143028 |         0 | 0xfec4bade         | "\u0018AdzCoin Signed Message:\n"           |
| ALL    | Allion - Testnet                   |        0 |        0 |         0 | 0xf1f3c0ef         | "\u001dTrollPayCoin Signed Message:\n"      |
| ALQO   | ALQO - Testnet                     |    55600 |    55000 |         0 | 0x64446554         | "\u0015ALQO Signed Message:\n"              |
| AMMO   | Ammo Reloaded - Testnet            |    28582 |    28583 |         0 | 0x                 | "\u0015Ammo Signed Message:\n"              |
| ANI    | Animecoin - Testnet                |     2424 |     4242 |         0 | 0x4d494e41         | "\u001aAnimecoin Signed Message:\n"         |
| ANTX   | Antimatter - Testnet               |    28595 |    28596 |         0 | 0x66791ae3         | "\u001bAntimatter Signed Message:\n"        |
| APR    | APR Coin - Testnet                 |    13133 |    13132 |         0 | 0xaa2d92bc         | "\u0018DarkNet Signed Message:\n"           |
| ARB    | ARbit - Testnet                    |    31914 |    31915 |         0 | 0xadf1c2af         | "\u0016ARbit Signed Message:\n"             |
| ARC    | Advanced Technology Coin - Testnet |    17209 |    17208 |         0 | 0x2a2c2c2d         | "\u0019DarkCoin Signed Message:\n"          |
| ARCO   | AquariusCoin - Testnet             |    16205 |    16206 |         0 | 0x6a1cd5e6         | "\u001dAquariusCoin Signed Message:\n"      |
| ARG    | Argentum - Testnet                 |    13555 |    13556 |         0 | 0xfcc1b7dc         | "\u0019Argentum Signed Message:\n"          |
| ASAFE2 | AllSafe - Testnet                  |    40234 |    40244 |         0 | 0x1bba63c5         | "\u0019Allsafe2 Signed Message:\n"          |
| ATC    | Arbitracoin - Testnet              |    32541 |    32641 |         0 | 0xedc6feeb         | "\u0018Arbitra Signed Message:\n"           |
| AU     | AurumCoin - Testnet                |     5744 |     5745 |         0 | 0x0b110907         | "\u0016Aurum Signed Message:\n"             |
| AV     | AvatarCoin - Testnet               |    19712 |    19711 |         0 | 0xb23b2adf         | "\u001bAvatarcoin Signed Message:\n"        |
| AXIOM  | Axiom - Testnet                    |    25760 |    25770 |         0 | 0x3f1a1c05         | "\u0016Axiom Signed Message:\n"             |
| BCA    | Bitcoin Atom - Testnet             |    17333 |    17332 |         3 | 0xa68e3fd6         | "\u0018Bitcoin Signed Message:\n"           |
| BCC    | BitConnect - Testnet               |    19239 |    19240 |         0 | 0x1bba63c5         | "\u001bbitconnect Signed Message:\n"        |
| BCD    | Bitcoin Diamond - Testnet          |    17117 |    17116 |         1 | 0x0bcd2018         | " Bitcoin Diamond Signed Message:\n"        |
| BCF    | Bitcoin Fast - Testnet             |    35671 |    35672 |         0 | 0xcdf1c0ef         | "\u001cBitcoinFast Signed Message:\n"       |
| BCH    | Bitcoin Cash - Testnet             |    18333 |    18332 |         4 | 0xf4e5f3f4         | "\u0018Bitcoin Signed Message:\n"           |
| BCI    | Bitcoin Interest - Testnet         |    18331 |    18332 |         4 | 0xdd74e77b         | "!Bitcoin Interest Signed Message:\n"       |
| BCO    | BridgeCoin - Testnet               |    16333 |    16332 |         3 | 0xfdd2c8f1         | "\u001bbridgecoin Signed Message:\n"        |
| BENJI  | BenjiRolls - Testnet               |    17763 |    17762 |         0 | 0xfcc1b7dc         | "\u001bBENJIROLLS Signed Message:\n"        |
| BERN   | BERNcash - Testnet                 |    42020 |    42016 |         0 | 0x70352205         | "\u0015BERN Signed Message:\n"              |
| BIO    | BioCoin - Testnet                  |    17778 |    18345 |         0 | 0xcdf2c0ef         | "\u0018BioCoin Signed Message:\n"           |
| BIOB   | BioBar - Testnet                   |    21650 |    21655 |         0 | 0xb8a64dc2         | "\u0017BioBar Signed Message:\n"            |
| BIRDS  | Birds - Testnet                    |    30013 |    30014 |         0 | 0x131f9ae3         | "\u0016BIRDS Signed Message:\n"             |
| BITG   | Bitcoin Green - Testnet            |    19333 |    19332 |         0 | 0x4a2d32bc         | "\u0018DarkNet Signed Message:\n"           |
| BITOK  | Bitok - Testnet                    |    21997 |    21996 |         0 | 0xa7b1a5ab         | "\u0016BitOK Signed Message:\n"             |
| BITS   | Bitstar - Testnet                  |    63123 |    63124 |         0 | 0xcdf1c0ef         | "\u0018Bitstar Signed Message:\n"           |
| BLAZR  | BlazerCoin - Testnet               |    18213 |    18212 |         0 | 0xfcc1b7dc         | "\u001bBlazerCoin Signed Message:\n"        |
| BLK    | BlackCoin - Testnet                |    25714 |    25715 |         0 | 0xcdf2c0ef         | "\u001aBlackCoin Signed Message:\n"         |
| BLOCK  | Blocknet - Testnet                 |    41474 |    41419 |         0 | 0x457665ba         | "\u0018DarkNet Signed Message:\n"           |
| BLU    | BlueCoin - Testnet                 |    17104 |    17105 |         0 | 0xfef5abaa         | "\u0019Bluecoin Signed Message:\n"          |
| BOAT   | BOAT - Testnet                     |    33728 |    33882 |         0 | 0x2d3c0f1e         | "\u0019Doubloon Signed Message:\n"          |
| BOLI   | Bolivarcoin - Testnet              |    13893 |    13563 |         0 | 0xfec4bade         | "\u001cBolivarcoin Signed Message:\n"       |
| BSC    | BowsCoin - Testnet                 |    18155 |    18145 |         0 | 0xffc4b9de         | "\u0019bowscoin Signed Message:\n"          |
| BSD    | BitSend - Testnet                  |    18333 |    18800 |         0 | 0x0b110907         | "\u0018Bitsend Signed Message:\n"           |
| BSR    | BitSoar - Testnet                  |    50119 |    40119 |         0 | 0xa1a0a2a3         | "\u0018BitSoar Signed Message:\n"           |
| BSTY   | GlobalBoost-Y - Testnet            |    18226 |    18225 |         1 | 0x                 | "\u001cGlobalboost Signed Message:\n"       |
| BTA    | Bata - Testnet                     |    33813 |    33812 |         3 | 0xbaadafc5         | "\u0015Bata Signed Message:\n"              |
| BTB    | BitBar - Testnet                   |    18777 |    19344 |         0 | 0xcdf2c0ef         | "\u0017BitBar Signed Message:\n"            |
| BTC    | Bitcoin - Testnet                  |    18333 |    18332 |         4 | 0x0b110907         | "\u0018Bitcoin Signed Message:\n"           |
| BTCD   | BitcoinDark - Testnet              |    25714 |    25715 |         0 | 0xcdf2c0ef         | "\u001cBitcoinDark Signed Message:\n"       |
| BTCP   | Bitcoin Private - Testnet          |    17933 |    17932 |         2 | 0xf61bf6d6         | "\u001fBitcoinPrivate Signed Message:\n"    |
| BTCR   | Bitcurrency - Testnet              |    25814 |    25815 |         0 | 0xbca4b0da         | "\u001cBitCurrency Signed Message:\n"       |
| BTCZ   | BitcoinZ - Testnet                 |    11989 |    11979 |         2 | 0xfa1af9bf         | "\u0019BitcoinZ Signed Message:\n"          |
| BTDX   | Bitcloud - Testnet                 |    51474 |     8329 |         0 | 0x457665ba         | "\u0018Diamond Signed Message:\n"           |
| BTG    | Bitcoin Gold - Testnet             |    18338 |    18332 |         3 | 0xe2486e45         | "\u001dBitcoin Gold Signed Message:\n"      |
| BTGEM  | Bitgem - Testnet                   |    17692 |    18348 |         0 | 0xcdf2c0ef         | "\u0017BitGem Signed Message:\n"            |
| BTX    | Bitcore - Testnet                  |     8666 |    50332 |         2 | 0xfdd2c8f1         | "\u0018BitCore Signed Message:\n"           |
| BUB    | Bubble - Testnet                   |    38881 |    38882 |         0 | 0x08121619         | "\u0017Bubble Signed Message:\n"            |
| BUMBA  | BumbaCoin - Testnet                |    20202 |    10101 |         0 | 0x                 | "\u001bbumbacoin2 Signed Message:\n"        |
| BUZZ   | BuzzCoin - Testnet                 |    20114 |    20115 |         0 | 0x1f220530         | "\u0019BuzzCoin Signed Message:\n"          |
| BWK    | Bulwark - Testnet                  |    42133 |    42132 |         3 | 0xb5d9f4a0         | "\u0018DarkNet Signed Message:\n"           |
| CANN   | CannabisCoin - Testnet             |    29347 |    29347 |         1 | 0xfec4bade         | "\u001dCannabisCoin Signed Message:\n"      |
| CARBON | Carboncoin - Testnet               |    19350 |    19351 |         2 | 0xfcc1b7dc         | "\u001bCarboncoin Signed Message:\n"        |
| CAT    | Catcoin - Testnet                  |    19933 |    19932 |         1 | 0xfdcbb8dd         | "\u0018Catcoin Signed Message:\n"           |
| CBX    | Bullion - Testnet                  |    51474 |    18395 |         0 | 0x457665ba         | "\u0018Bullion Signed Message:\n"           |
| CHAN   | ChanCoin - Testnet                 |    29117 |    19332 |         0 | 0x93973717         | "\u0019Chancoin Signed Message:\n"          |
| CHEAP  | Cheapcoin - Testnet                |    36647 |    36646 |         0 | 0x                 | "\u001acheapcoin Signed Message:\n"         |
| CHESS  | ChessCoin - Testnet                |    17323 |    17324 |         0 | 0xbf46c174         | "\u001aChessCoin Signed Message:\n"         |
| CHIPS  | CHIPS - Testnet                    |    18333 |    18332 |         4 | 0x0b110907         | "\u0018Bitcoin Signed Message:\n"           |
| CJ     | Cryptojacks - Testnet              |    26714 |    26715 |         0 | 0xcdf2c0ef         | "\u001cCryptoJacks Signed Message:\n"       |
| CLAM   | Clams - Testnet                    |    35714 |    35715 |         0 | 0xc4f1c0df         | "\u0015Clam Signed Message:\n"              |
| CLUB   | ClubCoin - Testnet                 |    28114 |    29114 |         0 | 0xcdf242ef         | "\u0019ClubCoin Signed Message:\n"          |
| CMPCO  | CampusCoin - Testnet               |    33813 |    33812 |         0 | 0xbcadafc4         | "\u001bCampusCoin Signed Message:\n"        |
| CNNC   | Cannation - Testnet                |    22367 |    22368 |         0 | 0xd8889442         | "\u001acannation Signed Message:\n"         |
| CNX    | Cryptonex - Testnet                |    30863 |    30864 |         0 | 0x4c7951f0         | "\u001aCryptonex Signed Message:\n"         |
| COLX   | ColossusXT - Testnet               |    51374 |    51475 |         0 | 0x467766bb         | "\u0018DarkNet Signed Message:\n"           |
| CON    | PayCon - Testnet                   |    25072 |    25073 |         0 | 0x70352205         | "\u0017PayCon Signed Message:\n"            |
| CPC    | Capricoin - Testnet                |    22715 |    22712 |         0 | 0xa1a0a2a3         | "\u001aCapricoin Signed Message:\n"         |
| CRC    | CrowdCoin - Testnet                |    13845 |    19998 |         1 | 0xda24b57a         | "\u0019DarkCoin Signed Message:\n"          |
| CRM    | Cream - Testnet                    |    16066 |    17077 |         0 | 0xedc6fe20         | "\u0016Cream Signed Message:\n"             |
| CRW    | Crown - Testnet                    |    19340 |    19341 |         8 | 0x0f180e06         | "\u0016Crown Signed Message:\n"             |
| CTO    | Crypto - Testnet                   |    18899 |    18898 |         1 | 0xf7c1d4dc         | "\u0017Crypto Signed Message:\n"            |
| CURE   | Curecoin - Testnet                 |     8600 |    18600 |         0 | 0xcdf2c0ef         | "\u0019curecoin Signed Message:\n"          |
| CYDER  | Cyder - Testnet                    |    48847 |    48846 |         0 | 0x                 | "\u001acydercoin Signed Message:\n"         |
| DASH   | Dash - Testnet                     |    19999 |    19998 |         2 | 0xcee2caff         | "\u0019DarkCoin Signed Message:\n"          |
| DCR    | Decred Testnet                     |    19108 |    19109 |         4 | 0x48e7a065         | "\u0017Decred Signed Message:\n"            |
| DEM    | Deutsche eMark - Testnet           |    15556 |    16666 |         0 | 0xfec3b9de         | "\u0016eMark Signed Message:\n"             |
| DGB    | DigiByte - Testnet                 |    12025 |    18332 |         4 | 0xfdc8bddd         | "\u0019DigiByte Signed Message:\n"          |
| DGC    | Digitalcoin - Testnet              |    17999 |    17998 |         2 | 0xcee2cafffbc0b6db | "\u001cDigitalcoin Signed Message:\n"       |
| DIME   | Dimecoin - Testnet                 |    21931 |    11930 |         0 | 0x011A39F7         | "\u0019Dimecoin Signed Message:\n"          |
| DLC    | Dollarcoin - Testnet               |    18145 |    18146 |         0 | 0xd5acae18         | "\u001bdollarcoin Signed Message:\n"        |
| DMB    | Digital Money Bits - Testnet       |    32097 |    32098 |         0 | 0x2eea4eee         | "!Digitalmoneybits Signed Message:\n"       |
| DMD    | Diamond - Testnet                  |    51474 |    17772 |         1 | 0x457665ba         | "\u0018Diamond Signed Message:\n"           |
| DNR    | Denarius - Testnet                 |    33338 |    32338 |         0 | 0x0711050b         | "\u0019Denarius Signed Message:\n"          |
| DOGE   | Dogecoin - Testnet                 |    44556 |    44555 |         1 | 0xfcc1b7dc         | "\u0019Dogecoin Signed Message:\n"          |
| DOLLAR | Dollar Online - Testnet            |    19666 |    19666 |         0 | 0xa1a0a2a3         | "\u001dDOLLAROnline Signed Message:\n"      |
| DRXNE  | DROXNE - Testnet                   |    17778 |    18345 |         0 | 0xcdf2c0ef         | "\u0017Droxne Signed Message:\n"            |
| ECN    | E-coin - Testnet                   |    17778 |    18345 |         0 | 0xcdf2c0ef         | "\u0016eCoin Signed Message:\n"             |
| EGC    | EverGreenCoin - Testnet            |    15757 |    15758 |         0 | 0x21246247         | "\u001eEverGreenCoin Signed Message:\n"     |
| EGG    | EggCoin - Testnet                  |    20134 |    20135 |         0 | 0x2a230640         | "\u0018Eggcoin Signed Message:\n"           |
| EMB    | EmberCoin - Testnet                |    10012 |    10018 |         0 | 0x121a52b4         | "\u0016Ember Signed Message:\n"             |
| EMC    | Emercoin - Testnet                 |     6663 |     6662 |         1 | 0xcbf2c0ef         | "\u0019EmerCoin Signed Message:\n"          |
| EMC2   | Einsteinium - Testnet              |    31878 |    31879 |         1 | 0xfaa2f0c1         | "\u001cEinsteinium Signed Message:\n"       |
| EMD    | Emerald Crypto - Testnet           |    22127 |   112128 |         5 | 0xfcc1b7dc         | "\u0018Emerald Signed Message:\n"           |
| ENRG   | Energycoin - Testnet               |    22709 |    22705 |         0 | 0xccf0c1ed         | "\u001bEnergyCoin Signed Message:\n"        |
| ENT    | Eternity - Testnet                 |    14855 |    19998 |         0 | 0xc3b3ea5b         | "\u0019DarkCoin Signed Message:\n"          |
| EQT    | EquiTrader - Testnet               |    17778 |    18345 |         0 | 0xcdf2c0ef         | "\u001bEquiTrader Signed Message:\n"        |
| ERC    | EuropeCoin - Testnet               |     8989 |    18332 |         0 | 0x4555524f         | "\u0018Bitcoin Signed Message:\n"           |
| ETH    | Ethereum - Testnet                 |    30303 |     8080 |         0 |                    | "\u0019Ethereum Signed Message:\n"          |
| EVIL   | Evil Coin - Testnet                |    12347 |    12347 |         0 | 0xa1a0a2a3         | "\u0019EvilCoin Signed Message:\n"          |
| FAIR   | FairCoin - Testnet                 |    18392 |    18393 |         0 | 0xcdf2c0ef         | "\u0019FairCoin Signed Message:\n"          |
| FGC    | FantasyGold - Testnet              |    58806 |    58804 |         3 | 0x41023564         | "\u0018DarkNet Signed Message:\n"           |
| FJC    | FujiCoin - Testnet                 |    13777 |    13776 |         1 | 0x696a7566         | "\u0019FujiCoin Signed Message:\n"          |
| FLO    | FlorinCoin - Testnet               |    17312 |    17313 |         1 | 0xfdc05af2         | "\u001bFlorincoin Signed Message:\n"        |
| FLT    | FlutterCoin - Testnet              |    17408 |    17474 |         0 | 0xcdf2c0ef         | "\u001cFlutterCoin Signed Message:\n"       |
| FRC    | Freicoin - Testnet                 |    18639 |    18638 |         1 | 0x5ed67cf3         | "\u0019Freicoin Signed Message:\n"          |
| FST    | Fastcoin - Testnet                 |    19526 |    19527 |         3 | 0xfcc1b7dc         | "\u0019Fastcoin Signed Message:\n"          |
| FTC    | Feathercoin - Testnet              |    19336 |        0 |         2 | 0x91656a71         | "\u001cFeathercoin Signed Message:\n"       |
| FTO    | FuturoCoin - Testnet               |    19009 |    19008 |         2 | 0xD4D2D4C6         | "\u0019DarkCoin Signed Message:\n"          |
| FUNK   | The Cypherfunks - Testnet          |    34666 |    33666 |         1 | 0xfdc4bbe3         | "\u001bCypherfunk Signed Message:\n"        |
| GAIN   | UGAIN - Testnet                    |    17891 |    17892 |         0 | 0x8bcfc39a         | "\u0016UGAIN Signed Message:\n"             |
| GAM    | Gambit - Testnet                   |    47078 |    47178 |         0 | 0x0a02080f         | "\u0017Gambit Signed Message:\n"            |
| GAME   | GameCredits - Testnet              |    50001 |    50000 |         2 | 0x0b110907         | "\u001cGameCredits Signed Message:\n"       |
| GB     | GoldBlocks - Testnet               |    27921 |    26921 |         0 | 0xd0ac3412         | "\u001bGoldBlocks Signed Message:\n"        |
| GBX    | GoByte - Testnet                   |    13455 |    13454 |         2 | 0xd12bb37a         | "\u0019DarkCoin Signed Message:\n"          |
| GEERT  | GeertCoin - Testnet                |    65333 |    65332 |         1 | 0xf9d3e4ce         | "\u001aGeertcoin Signed Message:\n"         |
| GIN    | GINcoin - Testnet                  |    12111 |    12211 |         2 | 0xcee2caff         | "\u0019DarkCoin Signed Message:\n"          |
| GLD    | GoldCoin - Testnet                 |    19335 |    19332 |         3 | 0xfdd2c8f1         | "\u0019Litecoin Signed Message:\n"          |
| GLT    | GlobalToken - Testnet              |    19319 |    19320 |         0 | 0x3a6f375b         | "\u001cGlobaltoken Signed Message:\n"       |
| GPL    | Gold Pressed Latinum - Testnet     |    33635 |    33645 |         0 | 0xcdf2c0ef         | "#GoldPressedLatinum Signed Message:\n"     |
| GRC    | GridCoin - Testnet                 |    32748 |    25715 |         0 | 0xcdf2c0ef         | "\u0019Gridcoin Signed Message:\n"          |
| GRIM   | Grimcoin - Testnet                 |    34861 |    34862 |         0 | 0x2b3ad4dc         | "\u0015Grim Signed Message:\n"              |
| GRLC   | Garlicoin - Testnet                |    42075 |    42070 |         2 | 0xfdd2c8f2         | "\u001aGarlicoin Signed Message:\n"         |
| GRN    | Granite - Testnet                  |    22777 |    22776 |         1 | 0xfec4bade         | "\u0018granite Signed Message:\n"           |
| GRS    | Groestlcoin - Testnet              |    18333 |    17766 |         4 | 0x0b110907         | "\u001cGroestlCoin Signed Message:\n"       |
| GSR    | GeyserCoin - Testnet               |    20556 |    20555 |         0 | 0xadf4d0ac         | "\u001bGeyserCoin Signed Message:\n"        |
| GTC    | Global Tour Coin - Testnet         |    33813 |    33812 |         0 | 0xbcadafc4         | "\u001fGlobalTourCoin Signed Message:\n"    |
| HAL    | Halcyon - Testnet                  |    11108 |    35615 |         0 | 0xfdf2f0df         | "\u0018Halcyon Signed Message:\n"           |
| HALLO  | Halloween Coin - Testnet           |    65889 |    65889 |         0 | 0xa51c23b5         | "\u001aHalloween Signed Message:\n"         |
| HBN    | HoboNickels - Testnet              |    17372 |    17373 |         0 | 0xcdf2c0ef         | "\u001cHoboNickels Signed Message:\n"       |
| HC     | Harvest Masternode Coin - Testnet  |    20114 |    20115 |         0 | 0x1d7ea62c         | "\u0018Harvest Signed Message:\n"           |
| HOLD   | Interstellar Holdings - Testnet    |    15130 |    15131 |         0 | 0xbc45ec12         | "%InterstellarHoldings Signed Message:\n"   |
| HPC    | Happycoin - Testnet                |    17778 |    18345 |         0 | 0xcdf2c0ef         | "\u001aHappyCoin Signed Message:\n"         |
| HTML   | HTMLCOIN - Testnet                 |    14888 |    14889 |         1 | 0x2f3e4d5c         | "\u0019HTMLCOIN Signed Message:\n"          |
| HVCO   | High Voltage - Testnet             |    47822 |    47821 |         0 | 0xb1b6b1b6         | " HighVoltageCoin Signed Message:\n"        |
| HWC    | HollyWoodCoin - Testnet            |    20267 |    21030 |         0 | 0x6c4e7880         | "\u001eHollyWoodCoin Signed Message:\n"     |
| HYP    | HyperStake - Testnet               |    28775 |    28776 |         0 | 0xdd4ddd4d         | "\u001bHyperStake Signed Message:\n"        |
| HYPER  | Hyper - Testnet                    |    11199 |    11200 |         0 | 0xcdf1c0ef         | "\u0016hyper Signed Message:\n"             |
| I0C    | I0Coin - Testnet                   |    17333 |    17332 |         0 | 0x0b110907         | "\u0018Bitcoin Signed Message:\n"           |
| IBANK  | iBank - Testnet                    |    17619 |    17620 |         0 | 0xc11a5884         | "\u0016iBank Signed Message:\n"             |
| ICON   | Iconic - Testnet                   |    47424 |    47423 |         0 | 0xa3a5b3b5         | "\u0017Iconic Signed Message:\n"            |
| IFC    | Infinitecoin - Testnet             |    19321 |     9322 |         0 | 0xfcc1b7dc         | "\u001dInfinitecoin Signed Message:\n"      |
| IFLT   | InflationCoin - Testnet            |    21370 |    21371 |         0 | 0xa1a0a2a3         | "\u001eInflationCoin Signed Message:\n"     |
| IMS    | Independent Money System - Testnet |    16177 |    16178 |         0 | 0xda5e9d5e         | "'IndependentMoneySystem Signed Message:\n" |
| IMX    | Impact - Testnet                   |    22628 |    21528 |         0 | 0x                 | "\u0017impact Signed Message:\n"            |
| INFX   | Influxcoin - Testnet               |    17778 |    18345 |         0 | 0xccf2c18f         | "\u0017Influx Signed Message:\n"            |
| INN    | Innova - Testnet                   |    15520 |    18818 |         0 | 0xb1a4d57c         | "\u0019DarkCoin Signed Message:\n"          |
| IOC    | I/O Coin - Testnet                 |    43764 |    43765 |         0 | 0xffc4bbdf         | "\u0018I\/OCoin Signed Message:\n"          |
| ION    | ION - Testnet                      |    27170 |    27171 |         2 | 0xdb86fc69         | "\u0014Ion Signed Message:\n"               |
| IRL    | IrishCoin - Testnet                |    11375 |    11375 |         2 | 0xfcc1b7dc         | "\u001aIrishcoin Signed Message:\n"         |
| ISL    | IslaCoin - Testnet                 |     9733 |     9833 |         0 | 0xa1a0a2a3         | "\u0019IslaCoin Signed Message:\n"          |
| ITI    | iTicoin - Testnet                  |    52177 |    52144 |         0 | 0xcdf2c0ef         | "\u0018iTiCoin Signed Message:\n"           |
| IXC    | Ixcoin - Testnet                   |    18333 |    18338 |         4 | 0x0b110907         | "\u0018Bitcoin Signed Message:\n"           |
| KEK    | KekCoin - Testnet                  |    13777 |    11337 |         0 | 0x55667788         | "\u0018Kekcoin Signed Message:\n"           |
| KMD    | Komodo - Testnet                   |    17770 |    17771 |         1 | 0x5A1F7E62         | "\u0017Komodo Signed Message:\n"            |
| KNC    | KingN Coin - Testnet               |    28373 |    28374 |         0 | 0x5c0ff6b8         | "\u001aKingNCoin Signed Message:\n"         |
| KOBO   | Kobocoin - Testnet                 |    19011 |    13341 |         0 | 0xa1a0a2a3         | "\u0019Kobocoin Signed Message:\n"          |
| KUSH   | KushCoin - Testnet                 |    17778 |    18345 |         0 | 0xcdf2c0ef         | "\u0019KushCoin Signed Message:\n"          |
| LANA   | LanaCoin - Testnet                 |    17506 |    15706 |         2 | 0xcccbd27f         | "\u0019Lanacoin Signed Message:\n"          |
| LBC    | LBRY Credits - Testnet             |    19246 |    19245 |         2 | 0xfae4aae1         | "\u0018LBRYcrd Signed Message:\n"           |
| LBTC   | LiteBitcoin - Testnet              |    19335 |    19332 |         0 | 0xaec2b1f5         | "\u001cLitebitcoin Signed Message:\n"       |
| LCC    | Litecoin Cash - Testnet            |    19335 |    62455 |         0 | 0xb6f5d3cf         | "\u0019Litecoin Signed Message:\n"          |
| LCP    | Litecoin Plus - Testnet            |    44352 |    44352 |         0 | 0xcdf1c0ef         | "\u001dLitecoinPlus Signed Message:\n"      |
| LEO    | LEOcoin - Testnet                  |    15840 |    15211 |         0 | 0x8c96a0aa         | "\u0018LEOcoin Signed Message:\n"           |
| LINDA  | Linda - Testnet                    |    28888 |    28889 |         0 | 0xcef2c0ef         | "\u0016Linda Signed Message:\n"             |
| LIR    | LetItRide - Testnet                |     3717 |     3718 |         0 | 0xefc31e07         | "\u001aLetItRide Signed Message:\n"         |
| LOG    | Woodcoin - Testnet                 |    18338 |    19332 |         1 | 0xfcd9b7ddfcc1b7dc | "\u0019Woodcoin Signed Message:\n"          |
| LTC    | Litecoin - Testnet                 |    19335 |    19332 |         3 | 0xfdd2c8f1         | "\u0019Litecoin Signed Message:\n"          |
| LUX    | LUXCoin - Testnet                  |    28333 |     9777 |         0 | 0x546751ab         | "\u0014Lux Signed Message:\n"               |
| MAC    | Machinecoin - Testnet              |    50333 |    50332 |         3 | 0xfbc0b6db         | "\u001cMachinecoin Signed Message:\n"       |
| MAGN   | Magnetcoin - Testnet               |    11650 |    11655 |         0 | 0x1a6f2a4e         | "\u001bMagnetCoin Signed Message:\n"        |
| MAO    | Mao Zedong - Testnet               |    19670 |    19669 |         0 | 0xd73dac32         | "\u0014mao Signed Message:\n"               |
| MARX   | MarxCoin - Testnet                 |   141103 |   141102 |         0 | 0xfec4bade         | "\u0015MARX Signed Message:\n"              |
| MAX    | MaxCoin - Testnet                  |    18668 |    18669 |         0 | 0x0b11bb07         | "\u0018MaxCoin Signed Message:\n"           |
| MAY    | Theresa May Coin - Testnet         |    25714 |    25715 |         0 | 0xadf1c2af         | "\u001bTheresaMay Signed Message:\n"        |
| MAZA   | MAZA - Testnet                     |    11835 |    11832 |         1 | 0x05fea901         | "\u0015Maza Signed Message:\n"              |
| MCRN   | MACRON - Testnet                   |    25714 |    25715 |         0 | 0xadf1c2af         | "\u0017MACRON Signed Message:\n"            |
| MEC    | Megacoin - Testnet                 |    19444 |    50732 |         2 | 0xfdf0f4fe         | "\u0019MegaCoin Signed Message:\n"          |
| MEDIC  | MedicCoin - Testnet                |    12118 |    12117 |         0 | 0x1bd76fc9         | "\u001aMedicCoin Signed Message:\n"         |
| MEME   | Memetic / PepeCoin - Testnet       |    39377 |    39376 |         0 | 0x2bca3c3f         | "\u0019PepeCoin Signed Message:\n"          |
| METAL  | MetalCoin - Testnet                |    22330 |    22331 |         0 | 0xa1a0a2a3         | "\u001aMetalCoin Signed Message:\n"         |
| MINT   | Mintcoin - Testnet                 |    22788 |    22789 |         0 | 0xcdf2c0ef         | "\u0019MintCoin Signed Message:\n"          |
| MLM    | MktCoin - Testnet                  |    19275 |    19276 |         1 | 0x0b110907         | "\u0018MKTcoin Signed Message:\n"           |
| MNM    | Mineum - Testnet                   |    31317 |    31317 |         0 | 0x70352205         | "\u0017Mineum Signed Message:\n"            |
| MNX    | MinexCoin - Testnet                |     8336 |    17788 |         0 | 0x544a4c54         | "\u0018Bitcoin Signed Message:\n"           |
| MOJO   | MojoCoin - Testnet                 |    19495 |    19496 |         0 | 0xcef1c6e3         | "\u0019Mojocoin Signed Message:\n"          |
| MONA   | MonaCoin - Testnet                 |    19403 |    19402 |         1 | 0xfdd2c8f1         | "\u0019Monacoin Signed Message:\n"          |
| MONK   | Monkey Project - Testnet           |     8711 |     8102 |         0 | 0x2cab21c3         | "\u0017Monkey Signed Message:\n"            |
| MOON   | Mooncoin - Testnet                 |    19335 |   144663 |         0 | 0xfdd2c8f1         | "\u0019Mooncoin Signed Message:\n"          |
| MST    | MustangCoin - Testnet              |    19666 |    19666 |         0 | 0xa1a0a2a3         | "\u0018mustang Signed Message:\n"           |
| MTNC   | Masternodecoin - Testnet           |    11111 |    11110 |         0 | 0xf2aee7e4         | "\u001fMasternodecoin Signed Message:\n"    |
| MUE    | MonetaryUnit - Testnet             |    18683 |    28683 |         4 | 0xbda3c8b1         | "\u0014MUE Signed Message:\n"               |
| MXT    | MarteXcoin - Testnet               |    41315 |    41314 |         0 | 0x70352205         | "\u0017MarteX Signed Message:\n"            |
| NAV    | NavCoin - Testnet                  |    15556 |    44445 |         2 | 0x3fa25220         | "\u0018Navcoin Signed Message:\n"           |
| NEVA   | NevaCoin - Testnet                 |    17391 |    13791 |         1 | 0xac43fe8c         | "\u0019Nevacoin Signed Message:\n"          |
| NLC2   | NoLimitCoin - Testnet              |    16521 |    16520 |         0 | 0xb1b6b1b6         | "\u001cNoLimitCoin Signed Message:\n"       |
| NLX    | Nullex - Testnet                   |    16897 |    16898 |         0 | 0x4671f75e         | "\u0017NulleX Signed Message:\n"            |
| NMC    | Namecoin - Testnet                 |    18334 |    18336 |         1 | 0xfabfb5fe         | "\u0018Bitcoin Signed Message:\n"           |
| NMS    | Numus - Testnet                    |    27121 |    27122 |         0 | 0x1f220530         | "\u0016Numus Signed Message:\n"             |
| NUMUS  | NumusCash - Testnet                |    31139 |    31140 |         0 | 0x2b02a9fa         | "\u001aNumusCash Signed Message:\n"         |
| NVC    | Novacoin - Testnet                 |    17777 |    18344 |         0 | 0xcdf2c0ef         | "\u0019NovaCoin Signed Message:\n"          |
| NYC    | NewYorkCoin - Testnet              |    27020 |   118823 |         0 | 0xacb1c5dc         | "\u0019newyorkc Signed Message:\n"          |
| OCC    | Octoin Coin - Testnet              |    25443 |    18332 |         3 | 0x61746263         | "\u001bOctoinCoin Signed Message:\n"        |
| ODN    | Obsidian - Testnet                 |    26178 |    26174 |         0 | 0x71312111         | "\u0019Obsidian Signed Message:\n"          |
| OK     | OKCash - Testnet                   |     7980 |     7979 |         0 | 0x00097a0f         | "\u0017OKCash Signed Message:\n"            |
| OMC    | Omicron - Testnet                  |    18519 |    18520 |         0 | 0x151c9d41         | "\u0018Omicron Signed Message:\n"           |
| ONION  | DeepOnion - Testnet                |    26550 |    28580 |         0 | 0xa1a0a2f3         | "\u001aDeepOnion Signed Message:\n"         |
| OPC    | OP Coin - Testnet                  |    15555 |    15557 |         0 | 0x75ea1361         | "\u0017OPCoin Signed Message:\n"            |
| ORE    | Galactrum - Testnet                |    16270 |    16269 |         1 | 0xb1ded0ab         | "\u0019DarkCoin Signed Message:\n"          |
| PAK    | Pakcoin - Testnet                  |    17867 |    17866 |         0 | 0xfcc1b7dc         | "\u0018Pakcoin Signed Message:\n"           |
| PART   | Particl - Testnet                  |    51938 |        0 |         2 | 0x0811050b         | "\u0018Bitcoin Signed Message:\n"           |
| PHR    | Phore - Testnet                    |    11773 |    11774 |         0 | 0x477665ba         | "\u0018DarkNet Signed Message:\n"           |
| PHS    | Philosopher Stones - Testnet       |    26281 |    26282 |         0 | 0xcdf2c0ef         | "!Philosopherstone Signed Message:\n"       |
| PIGGY  | Piggycoin - Testnet                |    34732 |    34731 |         0 | 0xa1a0a2a3         | "\u001dnewpiggycoin Signed Message:\n"      |
| PINK   | PinkCoin - Testnet                 |    19134 |    19135 |         0 | 0x0204050d         | "\u0019Pinkcoin Signed Message:\n"          |
| PIVX   | PIVX - Testnet                     |    51474 |    51475 |         3 | 0x457665ba         | "\u0018DarkNet Signed Message:\n"           |
| PLACO  | PlayerCoin - Testnet               |    15666 |    20786 |         0 | 0x70e49e63         | "\u001bPlayerCoin Signed Message:\n"        |
| PND    | Pandacoin - Testnet                |    44656 |    25715 |         0 | 0xfcc1b7dc         | "\u001aPandacoin Signed Message:\n"         |
| PNX    | Phantomx - Testnet                 |    31979 |    21979 |         0 | 0x275cd6d9         | "\u0016Cream Signed Message:\n"             |
| POLIS  | Polis - Testnet                    |    21430 |    24131 |         0 | 0xcee2caff         | "\u0019DarkCoin Signed Message:\n"          |
| POP    | PopularCoin - Testnet              |    38181 |    37172 |         0 | 0xcdf1c0ef         | "\u001cPopularCoin Signed Message:\n"       |
| POST   | PostCoin - Testnet                 |    25500 |    25500 |         0 | 0x35c3d6a2         | "\u0019PostCoin Signed Message:\n"          |
| PPC    | Peercoin - Testnet                 |     9903 |     9904 |         1 | 0xefc0f2cb         | "\u0019Peercoin Signed Message:\n"          |
| PROUD  | PROUD Money - Testnet              |    33542 |    36523 |         0 | 0xaed0a2a3         | "\u0019GAY Coin Signed Message:\n"          |
| PURA   | Pura - Testnet                     |    44443 |    55554 |         0 | 0xb796c542         | "\u0015Pura Signed Message:\n"              |
| PURE   | Pure - Testnet                     |    42745 |    42746 |         0 | 0x11c3b1df         | "\u0015Pure Signed Message:\n"              |
| PUT    | PutinCoin - Testnet                |    17778 |    18345 |         0 | 0xcdf2c0ef         | "\u001aPutinCoin Signed Message:\n"         |
| Q2C    | QubitCoin - Testnet                |    11788 |    17799 |         0 | 0x011A39F7         | "\u001aQubitcoin Signed Message:\n"         |
| QBC    | Quebecoin - Testnet                |    46790 |    46789 |         1 | 0xd3edc9f1         | "\u001aQuebecoin Signed Message:\n"         |
| QTL    | Quatloo - Testnet                  |    17912 |    17911 |         1 | 0xfbcdbfdb         | "\u0018Quatloo Signed Message:\n"           |
| QTUM   | Qtum - Testnet                     |    13888 |    13889 |         1 | 0x0d221506         | "\u0015Qtum Signed Message:\n"              |
| RADS   | Radium - Testnet                   |    47963 |    47993 |         0 | 0xc377cc77         | "\u0017radium Signed Message:\n"            |
| RC     | RussiaCoin - Testnet               |    20992 |    20991 |         0 | 0xc0c0c0c0         | "\u001bRussiaCoin Signed Message:\n"        |
| RDD    | ReddCoin - Testnet                 |    55444 |    55443 |         2 | 0xfec3b9de         | "\u0019Reddcoin Signed Message:\n"          |
| REGA   | Regacoin - Testnet                 |    33813 |    33812 |         0 | 0xbcadafc4         | "\u0015REGA Signed Message:\n"              |
| RNS    | Renos - Testnet                    |    57255 |    57254 |         0 | 0xa179a4a2         | "\u001aRenosCoin Signed Message:\n"         |
| ROOFS  | Roofs - Testnet                    |    30019 |    30020 |         0 | 0xaaaa2bf9         | "\u0016ROOFS Signed Message:\n"             |
| RPC    | RonPaulCoin - Testnet              |    19027 |    19026 |         1 | 0xfcc1b7dc         | "\u001cRonPaulCoin Signed Message:\n"       |
| RUP    | Rupee - Testnet                    |    20459 |    20460 |         0 | 0x06b9e2cd         | "\u0016RUPEE Signed Message:\n"             |
| RVN    | Ravencoin - Testnet                |    18767 |    18766 |         2 | 0x52564E54         | "\u0016Raven Signed Message:\n"             |
| SAK    | Sharkcoin - Testnet                |    14011 |    14009 |         0 | 0x011A39F7         | "\u001aSharkcoin Signed Message:\n"         |
| SBC    | StrikeBitClub - Testnet            |    31575 |    31576 |         0 | 0xddd7d477         | "\u0018SBCcoin Signed Message:\n"           |
| SEQ    | Sequence - Testnet                 |    16664 |    16665 |         0 | 0x02200330         | "\u0015Silk Signed Message:\n"              |
| SIB    | SIBCoin - Testnet                  |    11945 |    11944 |         2 | 0xcee2caff         | "\u0018SibCoin Signed Message:\n"           |
| SKC    | Skeincoin - Testnet                |    27711 |    37711 |         0 | 0x07a05503         | "\u001aSkeincoin Signed Message:\n"         |
| SLR    | SolarCoin - Testnet                |    19335 |    18182 |         2 | 0xfdd2c8f1         | "\u001aSolarCoin Signed Message:\n"         |
| SMART  | SmartCash - Testnet                |    19678 |    19679 |         2 | 0xcffcbeea         | "\u001aSmartCash Signed Message:\n"         |
| SOCC   | SocialCoin - Testnet               |    28645 |    28646 |         0 | 0x29362093         | "\u001bSocialcoin Signed Message:\n"        |
| SONG   | SongCoin - Testnet                 |    18335 |    18334 |         1 | 0xfcc1b7dc         | "\u0019Songcoin Signed Message:\n"          |
| SPACE  | SpaceCoin - Testnet                |    19172 |    19173 |         0 | 0x0504030d         | "\u001aSpaceCoin Signed Message:\n"         |
| SPD    | Stipend - Testnet                  |    59432 |    59433 |         0 | 0xc4d5a6b8         | "\u0018Stipend Signed Message:\n"           |
| SPHR   | Sphere - Testnet                   |    27544 |    27545 |         0 | 0x8de74912         | "\u0017Sphere Signed Message:\n"            |
| SPK    | Sparks - Testnet                   |     8891 |     8893 |         1 | 0xd12bb37a         | "\u0019DarkCoin Signed Message:\n"          |
| SRC    | SecureCoin - Testnet               |    22567 |    22568 |         0 | 0x021BC4F5         | "\u001bSecurecoin Signed Message:\n"        |
| STAK   | STRAKS - Testnet                   |     7565 |    17564 |         2 | 0x2a1ed5d1         | "\u0017Straks Signed Message:\n"            |
| STN    | Steneum Coin - Testnet             |    36965 |    36966 |         0 | 0x37fa833f         | "\u0018Steneum Signed Message:\n"           |
| STRAT  | Stratis - Testnet                  |    36965 |    36966 |         0 | 0x37fa833f         | "\u0018TestStratis Signed Message:\n"       |
| STV    | Sativacoin - Testnet               |    50991 |    51991 |         0 | 0xa1a0a2a3         | "\u001bsativacoin Signed Message:\n"        |
| SUPER  | SuperCoin - Testnet                |    29390 |    29391 |         0 | 0xa1a0a2a3         | "\u001aSuperCoin Signed Message:\n"         |
| SWING  | Swing - Testnet                    |    25764 |    25785 |         0 | 0x7ea68dbc         | "\u0016Swing Signed Message:\n"             |
| SXC    | Sexcoin - Testnet                  |    19560 |    19561 |         3 | 0xface9669         | "\u0018Sexcoin Signed Message:\n"           |
| TAJ    | TajCoin - Testnet                  |    71210 |     7121 |         1 | 0x426fe813         | "\u0018Tajcoin Signed Message:\n"           |
| TELL   | Tellurion - Testnet                |    19999 |    33717 |         0 | 0x3c2d1e0f         | "\u001aTellurion Signed Message:\n"         |
| THC    | HempCoin - Testnet                 |    31054 |    22055 |         0 | 0xf2f2c0ef         | "\u0019Hempcoin Signed Message:\n"          |
| TOA    | ToaCoin - Testnet                  |    19642 |    13564 |         0 | 0x198ed1d1         | "\u0014TOA Signed Message:\n"               |
| TOKC   | TOKYO - Testnet                    |    33517 |    33518 |         0 | 0x6a5b6dba         | "\u001aTokyocoin Signed Message:\n"         |
| TOP    | TopCoin - Testnet                  |    32561 |    32562 |         0 | 0xcdf1c0ef         | "\u0019TopCoin3 Signed Message:\n"          |
| TPAY   | TokenPay - Testnet                 |    16601 |    16600 |         0 | 0xa32c44b4         | "\u0019TokenPay Signed Message:\n"          |
| TRC    | Terracoin - Testnet                |    18321 |    18332 |         1 | 0x0b110907         | "\u0019DarkCoin Signed Message:\n"          |
| TRK    | Truckcoin - Testnet                |    28775 |    28776 |         0 | 0xdd4ddd4d         | "\u001aTruckcoin Signed Message:\n"         |
| TX     | TransferCoin - Testnet             |    27170 |    27171 |         0 | 0x2fca4d3e         | "\u0019Transfer Signed Message:\n"          |
| UIS    | Unitus - Testnet                   |    60603 |    60604 |         2 | 0xc6abc79d         | "\u0017Unitus Signed Message:\n"            |
| ULA    | Ulatech - Testnet                  |    31659 |    31660 |         0 | 0xe7f80328         | "\u0018UlaTech Signed Message:\n"           |
| UNIT   | Universal Currency - Testnet       |    24158 |    24157 |         0 | 0xadf1c2af         | "\"UniversalCurrency Signed Message:\n"     |
| UNO    | Unobtanium - Testnet               |    65525 |    65531 |         2 | 0x01020304         | "\u001bUnobtanium Signed Message:\n"        |
| USC    | Ultimate Secure Cash - Testnet     |    51997 |    51996 |         0 | 0xfaf2efb4         | "#UltimateSecureCash Signed Message:\n"     |
| VIA    | Viacoin - Testnet                  |    25223 |    25222 |         2 | 0xa9c5ef92         | "\u0018Viacoin Signed Message:\n"           |
| VIDZ   | PureVidz - Testnet                 |     3918 |     4918 |         0 | 0xeca1b201         | "\u0019PureVidz Signed Message:\n"          |
| VIPS   | Vipstar Coin - Testnet             |    14888 |    14889 |         0 | 0x2f3e4d5c         | "\u001cVIPSTARCOIN Signed Message:\n"       |
| VISIO  | Visio - Testnet                    |    25714 |    25715 |         0 | 0xcdf2c0ef         | "\u0016Visio Signed Message:\n"             |
| VIVO   | VIVO - Testnet                     |    13845 |    19998 |         1 | 0xd124b57a         | "\u0019DarkCoin Signed Message:\n"          |
| VOT    | VoteCoin - Testnet                 |    18233 |    18232 |         1 | 0xfa1af9bf         | "\u0016Zcash Signed Message:\n"             |
| VRC    | VeriCoin - Testnet                 |    48684 |    48683 |         0 | 0xcdf2c0ef         | "\u0019VeriCoin Signed Message:\n"          |
| VTA    | Virtacoin - Testnet                |    12025 |    14023 |         0 | 0xfcc1b7dc         | "\u001aVirtaCoin Signed Message:\n"         |
| VTC    | Vertcoin - Testnet                 |    15889 |    15888 |         4 | 0x76657274         | "\u0019Vertcoin Signed Message:\n"          |
| VULC   | Vulcano - Testnet                  |    31041 |    31042 |         0 | 0x82547825         | "\u0018VULCANO Signed Message:\n"           |
| WC     | WINCOIN - Testnet                  |    11610 |    11611 |         0 | 0xffe1d0ef         | "\u001dWinCoin Signed Message, sun:\n"      |
| WINK   | Wink - Testnet                     |    37747 |    37746 |         0 | 0x                 | "\u0019winkcoin Signed Message:\n"          |
| WOMEN  | WomenCoin - Testnet                |    29207 |    29208 |         0 | 0x00247f1e         | "\u001aWOMENCOIN Signed Message:\n"         |
| XBTC21 | Bitcoin 21 - Testnet               |    17778 |    18345 |         0 | 0xcdf2c0ef         | "\u001aBitcoin21 Signed Message:\n"         |
| XBTS   | Beatcoin - Testnet                 |    26153 |    26153 |         0 | 0xa1a0a2a3         | "\u001aBeatsCoin Signed Message:\n"         |
| XCO    | X-Coin - Testnet                   |    25714 |    25825 |         0 | 0xafd1eaa5         | "\u0016Xcoin Signed Message:\n"             |
| XCT    | C-Bit - Testnet                    |    18289 |    18288 |         0 | 0x0b10d907         | "\u0018Bitcoin Signed Message:\n"           |
| XGOX   | XGOX - Testnet                     |    33185 |    33186 |         0 | 0x85fa0371         | "\u0015xgox Signed Message:\n"              |
| XJO    | Joulecoin - Testnet                |    26783 |     8844 |         1 | 0x0ac07312         | "\u001aJoulecoin Signed Message:\n"         |
| XMR    | Monero - Testnet                   |    28080 |    28081 |         0 |                    | ""                                          |
| XMY    | Myriad - Testnet                   |    20888 |    20889 |         2 | 0x01f555a4         | "\u001bMyriadcoin Signed Message:\n"        |
| XP     | Experience Points - Testnet        |    17778 |    18345 |         0 | 0xcdf2c0ef         | "\u0013XP Signed Message:\n"                |
| XPM    | Primecoin - Testnet                |     9913 |     9914 |         2 | 0xfbfecbc3         | "\u001aPrimecoin Signed Message:\n"         |
| XPTX   | PlatinumBAR - Testnet              |    15001 |    15002 |         0 | 0x01020304         | "\u001cPlatinumBar Signed Message:\n"       |
| XQN    | Quotient - Testnet                 |    30993 |    30996 |         0 | 0x0b051107         | "\u0019Quotient Signed Message:\n"          |
| XRA    | Ratecoin - Testnet                 |    35852 |    35852 |         0 | 0xa1a0a2a3         | "\u0019RATECoin Signed Message:\n"          |
| XRE    | RevolverCoin - Testnet             |    18777 |    18775 |         0 | 0x0b110907         | "\u001dRevolverCoin Signed Message:\n"      |
| XSN    | Stakenet - Testnet                 |    29999 |    19998 |         4 | 0xcee2caff         | "\u0019DarkCoin Signed Message:\n"          |
| XSPEC  | Spectrecoin - Testnet              |    37111 |    36757 |         0 | 0xa32c44b4         | "\u001cSpectreCoin Signed Message:\n"       |
| XVG    | Verge - Testnet                    |    29102 |    21102 |         0 | 0xcdf2c0ef         | "\u0016VERGE Signed Message:\n"             |
| XZC    | ZCoin - Testnet                    |    18168 |    18888 |         6 | 0xcffcbeea         | "\u0016Zcoin Signed Message:\n"             |
| YTN    | YENTEN - Testnet                   |    19981 |    19252 |         2 | 0x9554e495         | "\u0017Yenten Signed Message:\n"            |
| ZCL    | ZClassic - Testnet                 |    18233 |    18023 |         1 | 0xfa1af9bf         | "\u0016Zcash Signed Message:\n"             |
| ZEC    | Zcash - Testnet                    |    18233 |    18232 |         1 | 0xfa1af9bf         | "\u0016Zcash Signed Message:\n"             |
| ZEIT   | Zeitcoin - Testnet                 |    22788 |    22789 |         0 | 0xcdf2c0ef         | "\u0019Zeitcoin Signed Message:\n"          |
| ZEN    | ZenCash - Testnet                  |    19033 |    18231 |         4 | 0xbff2cde6         | "\u0016Zcash Signed Message:\n"             |
| ZENI   | Zennies - Testnet                  |    11021 |    11022 |         0 | 0xaabbccee         | "\u0019ZeniCoin Signed Message:\n"          |
| ZET    | Zetacoin - Testnet                 |    27333 |    18332 |         3 | 0x05fea901         | "\u0019Zetacoin Signed Message:\n"          |
| ZOI    | Zoin - Testnet                     |    28168 |    28168 |         3 | 0xae5dbf09         | "\u0015Zoin Signed Message:\n"              |
| ZYD    | Zayedcoin - Testnet                |    33813 |    33812 |         0 | 0xbcadafc4         | "\u001aZayedcoin Signed Message:\n"         |
| ZZC    | ZoZoCoin - Testnet                 |    29977 |    12883 |         2 | 0xcee2caff         | "\u0019DarkCoin Signed Message:\n"          |

## Regtest

| Symbol | Name                               | P2P Port | RPC Port | DNS Seeds | P2P Magic          | Message Magic                          |
|--------|------------------------------------|----------|----------|-----------|--------------------|----------------------------------------|
| $PAC   | PACcoin - Regtest                  |    17114 |    18332 |         0 | 0x96a6fec2         | "\u0019DarkCoin Signed Message:\n"     |
| ACC    | AdCoin - Regtest                   |    19444 |    19332 |         0 | 0xfdd2c8f1         | "\u0017AdCoin Signed Message:\n"       |
| ARC    | Advanced Technology Coin - Regtest |    17203 |    18332 |         0 | 0x3a3c3c3d         | "\u0019DarkCoin Signed Message:\n"     |
| ARG    | Argentum - Regtest                 |    18445 |    18335 |         0 | 0xfabfb5db         | "\u0019Argentum Signed Message:\n"     |
| BCA    | Bitcoin Atom - Regtest             |    18444 |    17443 |         0 | 0xcad71f4a         | "\u0018Bitcoin Signed Message:\n"      |
| BCD    | Bitcoin Diamond - Regtest          |    18444 |    18332 |         0 | 0xfabfb5da         | " Bitcoin Diamond Signed Message:\n"   |
| BCH    | Bitcoin Cash - Regtest             |    18444 |    18332 |         0 | 0xdab5bffa         | "\u0018Bitcoin Signed Message:\n"      |
| BCI    | Bitcoin Interest - Regtest         |    18444 |    18332 |         0 | 0xfabfb5da         | "!Bitcoin Interest Signed Message:\n"  |
| BCO    | BridgeCoin - Regtest               |    19444 |    16332 |         0 | 0xfabfb5da         | "\u001bbridgecoin Signed Message:\n"   |
| BLU    | BlueCoin - Regtest                 |    19444 |     7105 |         0 | 0xfef5abaa         | "\u0019Bluecoin Signed Message:\n"     |
| BSD    | BitSend - Regtest                  |     8885 |    18332 |         0 | 0x4c1a2caf         | "\u0018Bitsend Signed Message:\n"      |
| BTC    | Bitcoin - Regtest                  |    18444 |    18443 |         0 | 0xfabfb5da         | "\u0018Bitcoin Signed Message:\n"      |
| BTG    | Bitcoin Gold - Regtest             |    18444 |    18332 |         0 | 0xfabfb5da         | "\u001dBitcoin Gold Signed Message:\n" |
| BTX    | Bitcore - Regtest                  |    19444 |    50332 |         0 | 0xfabfb5da         | "\u0018BitCore Signed Message:\n"      |
| CHAN   | ChanCoin - Regtest                 |    19444 |    19332 |         0 | 0xfabfb5da         | "\u0019Chancoin Signed Message:\n"     |
| CHIPS  | CHIPS - Regtest                    |    18444 |    18332 |         0 | 0xfabfb5da         | "\u0018Bitcoin Signed Message:\n"      |
| CRC    | CrowdCoin - Regtest                |    13855 |    18332 |         0 | 0xd124b57a         | "\u0019DarkCoin Signed Message:\n"     |
| DASH   | Dash - Regtest                     |    19994 |    19998 |         0 | 0xfcc1b7dc         | "\u0019DarkCoin Signed Message:\n"     |
| DGB    | DigiByte - Regtest                 |    18444 |    18443 |         0 | 0xfabfb5da         | "\u0019DigiByte Signed Message:\n"     |
| DGC    | Digitalcoin - Regtest              |    18444 |    18332 |         0 | 0xfab3b2db         | "\u001cDigitalcoin Signed Message:\n"  |
| EMC2   | Einsteinium - Regtest              |    31880 |    31879 |         0 | 0xfabfb5da         | "\u001cEinsteinium Signed Message:\n"  |
| ENT    | Eternity - Regtest                 |    14885 |    18332 |         0 | 0x245dc7b4         | "\u0019DarkCoin Signed Message:\n"     |
| FJC    | FujiCoin - Regtest                 |    16777 |    16776 |         0 | 0x696a7566         | "\u0019FujiCoin Signed Message:\n"     |
| FLO    | FlorinCoin - Regtest               |    17412 |    17313 |         0 | 0xfabfb5da         | "\u001bFlorincoin Signed Message:\n"   |
| FTC    | Feathercoin - Regtest              |    18446 |    18447 |         0 | 0xd1a5aab1         | "\u001cFeathercoin Signed Message:\n"  |
| FTO    | FuturoCoin - Regtest               |    19004 |    18332 |         0 | 0xD2D2D4C6         | "\u0019DarkCoin Signed Message:\n"     |
| FUNK   | The Cypherfunks - Regtest          |    34666 |    33666 |         0 | 0xfabfb5da         | "\u001bCypherfunk Signed Message:\n"   |
| GAME   | GameCredits - Regtest              |    18444 |    50000 |         0 | 0xfabfb5da         | "\u001cGameCredits Signed Message:\n"  |
| GBX    | GoByte - Regtest                   |    13565 |    13564 |         0 | 0xa1b3d57b         | "\u0019DarkCoin Signed Message:\n"     |
| GIN    | GINcoin - Regtest                  |    19111 |    18332 |         0 | 0xfcc1b7dc         | "\u0019DarkCoin Signed Message:\n"     |
| GLD    | GoldCoin - Regtest                 |    19444 |    19332 |         0 | 0xfabfb5da         | "\u0019Litecoin Signed Message:\n"     |
| GLT    | GlobalToken - Regtest              |    20144 |    20145 |         0 | 0x147669d6         | "\u001cGlobaltoken Signed Message:\n"  |
| GRLC   | Garlicoin - Regtest                |    19444 |    42070 |         0 | 0xfabfb5da         | "\u001aGarlicoin Signed Message:\n"    |
| GRS    | Groestlcoin - Regtest              |    18444 |    18443 |         0 | 0xfabfb5da         | "\u001cGroestlCoin Signed Message:\n"  |
| HTML   | HTMLCOIN - Regtest                 |    24888 |    14889 |         0 | 0x3f4e5d6c         | "\u0019HTMLCOIN Signed Message:\n"     |
| I0C    | I0Coin - Regtest                   |    17444 |    17332 |         0 | 0xfabfb5da         | "\u0018Bitcoin Signed Message:\n"      |
| INN    | Innova - Regtest                   |    16520 |    15332 |         0 | 0xa43bb975         | "\u0019DarkCoin Signed Message:\n"     |
| IXC    | Ixcoin - Regtest                   |    18444 |    18338 |         0 | 0xfabfb5da         | "\u0018Bitcoin Signed Message:\n"      |
| LBC    | LBRY Credits - Regtest             |    29246 |    18332 |         0 | 0xfae4aad1         | "\u0018LBRYcrd Signed Message:\n"      |
| LBTC   | LiteBitcoin - Regtest              |    19444 |    19332 |         0 | 0xccd6a0e3         | "\u001cLitebitcoin Signed Message:\n"  |
| LCC    | Litecoin Cash - Regtest            |    19444 |    19443 |         0 | 0xfabfb5da         | "\u0019Litecoin Signed Message:\n"     |
| LOG    | Woodcoin - Regtest                 |    19444 |    19332 |         0 | 0xfabfb5da         | "\u0019Woodcoin Signed Message:\n"     |
| LTC    | Litecoin - Regtest                 |    19444 |    19443 |         0 | 0xfabfb5da         | "\u0019Litecoin Signed Message:\n"     |
| MAC    | Machinecoin - Regtest              |    60333 |    60332 |         0 | 0xfac2c6ab         | "\u001cMachinecoin Signed Message:\n"  |
| MLM    | MktCoin - Regtest                  |    19386 |    19276 |         0 | 0xfabfb5da         | "\u0018MKTcoin Signed Message:\n"      |
| MNX    | MinexCoin - Regtest                |    18444 |    18332 |         0 | 0x4b4a4c5d         | "\u0018Bitcoin Signed Message:\n"      |
| MONA   | MonaCoin - Regtest                 |    20444 |    19402 |         0 | 0xfabfb5da         | "\u0019Monacoin Signed Message:\n"     |
| MOON   | Mooncoin - Regtest                 |    19444 |   144663 |         0 | 0xfabfb5da         | "\u0019Mooncoin Signed Message:\n"     |
| MUE    | MonetaryUnit - Regtest             |    17683 |    27683 |         0 | 0xe6cea3ba         | "\u0014MUE Signed Message:\n"          |
| NAV    | NavCoin - Regtest                  |    18886 |    44446 |         2 | 0x7d11b789         | "\u0018Navcoin Signed Message:\n"      |
| NLG    | Gulden - Regtest                   |    18444 |    18332 |         0 | 0xfcfef7FF         | "\u001bGuldencoin Signed Message:\n"   |
| NMC    | Namecoin - Regtest                 |    18445 |    18443 |         0 | 0xfabfb5da         | "\u0018Bitcoin Signed Message:\n"      |
| OCC    | Octoin Coin - Regtest              |    35442 |    18332 |         0 | 0x61746263         | "\u001bOctoinCoin Signed Message:\n"   |
| ORE    | Galactrum - Regtest                |    19994 |    18332 |         0 | 0xfcc1b7dc         | "\u0019DarkCoin Signed Message:\n"     |
| PART   | Particl - Regtest                  |    11938 |    51936 |         0 | 0x0912060cfabfb5da | "\u0018Bitcoin Signed Message:\n"      |
| POLIS  | Polis - Regtest                    |    19994 |    24131 |         0 | 0xfcc1b7dc         | "\u0019DarkCoin Signed Message:\n"     |
| PURA   | Pura - Regtest                     |    44442 |    55553 |         0 | 0xb695c341         | "\u0015Pura Signed Message:\n"         |
| QTUM   | Qtum - Regtest                     |    23888 |    13889 |         0 | 0xfdddc6e1         | "\u0015Qtum Signed Message:\n"         |
| RVN    | Ravencoin - Regtest                |    18444 |    18443 |         0 | 0x43524F57         | "\u0016Raven Signed Message:\n"        |
| SIB    | SIBCoin - Regtest                  |    18333 |    18332 |         0 | 0xfcc1b7dc         | "\u0018SibCoin Signed Message:\n"      |
| SKC    | Skeincoin - Regtest                |    18444 |    18332 |         0 | 0xfa0fa55a         | "\u001aSkeincoin Signed Message:\n"    |
| SLR    | SolarCoin - Regtest                |    19444 |    18182 |         0 | 0xfabfb5da         | "\u001aSolarCoin Signed Message:\n"    |
| SMART  | SmartCash - Regtest                |    18444 |    19679 |         0 | 0xfabfb5da         | "\u001aSmartCash Signed Message:\n"    |
| SPK    | Sparks - Regtest                   |    18891 |    18893 |         0 | 0xa1b3d57b         | "\u0019DarkCoin Signed Message:\n"     |
| STAK   | STRAKS - Regtest                   |     7505 |    18332 |         0 | 0x6e5c2cef         | "\u0017Straks Signed Message:\n"       |
| SYS    | Syscoin - Regtest                  |    18369 |    18370 |         0 | 0xfabfb5da         | "\u0018Syscoin Signed Message:\n"      |
| TRC    | Terracoin - Regtest                |    18444 |    18332 |         0 | 0xfabfb5da         | "\u0019DarkCoin Signed Message:\n"     |
| UIS    | Unitus - Regtest                   |    60604 |    60604 |         0 | 0xc7abc89d         | "\u0017Unitus Signed Message:\n"       |
| VIA    | Viacoin - Regtest                  |    15224 |    25222 |         0 | 0x2d977b37         | "\u0018Viacoin Signed Message:\n"      |
| VIPS   | Vipstar Coin - Regtest             |    24888 |    14889 |         0 | 0x3f4e5d6c         | "\u001cVIPSTARCOIN Signed Message:\n"  |
| VIVO   | VIVO - Regtest                     |    13855 |    18332 |         0 | 0xd124b57a         | "\u0019DarkCoin Signed Message:\n"     |
| VTC    | Vertcoin - Regtest                 |    18444 |    18443 |         0 | 0xfabfb5da         | "\u0019Vertcoin Signed Message:\n"     |
| XCT    | C-Bit - Regtest                    |    18999 |    18288 |         0 | 0xbabdb5da         | "\u0018Bitcoin Signed Message:\n"      |
| XMY    | Myriad - Regtest                   |    18444 |    18332 |         0 | 0xfabfb5da         | "\u001bMyriadcoin Signed Message:\n"   |
| XRE    | RevolverCoin - Regtest             |    19777 |    18775 |         0 | 0xfabfb5da         | "\u001dRevolverCoin Signed Message:\n" |
| XSN    | Stakenet - Regtest                 |    29999 |    18332 |         0 | 0xfabfb5da         | "\u0019DarkCoin Signed Message:\n"     |
| XZC    | ZCoin - Regtest                    |    18444 |    28888 |         0 | 0xfabfb5da         | "\u0016Zcoin Signed Message:\n"        |
| YTN    | YENTEN - Regtest                   |    18432 |    18332 |         0 | 0xaffb5bad         | "\u0017Yenten Signed Message:\n"       |
| ZEC    | Zcash - Regtest                    |    18344 |    18232 |         0 | 0xaae83f5f         | "\u0016Zcash Signed Message:\n"        |
| ZET    | Zetacoin - Regtest                 |    18444 |    18332 |         0 | 0xfa0fa55a         | "\u0019Zetacoin Signed Message:\n"     |
| ZOI    | Zoin - Regtest                     |    18444 |    18888 |         0 | 0xae5dbf09         | "\u0015Zoin Signed Message:\n"         |
| ZZC    | ZoZoCoin - Regtest                 |    19111 |    13382 |         0 | 0xfcc1b7dc         | "\u0019DarkCoin Signed Message:\n"     |



