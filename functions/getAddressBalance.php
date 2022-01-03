<?php
    require_once("iota.php/autoload.php");
        
    use IOTA\Client\SingleNodeClient;
    use IOTA\Action\getBalance;
    function getAddressBalance($string) {
        // Get address data via iota.php
        $client = new SingleNodeClient('mainnet');
        $address = $string;
        $ret = $client->address($address);
        // JSON Decode IOTA address data
        $ret = json_decode($ret, true);
        $iota = $ret['balance'];
        
        // Check which type it is, convert and return
        if($iota >= 0 && $iota <= 999999) {
            $res = "$iota IOTA";
            return $res;
        } elseif($iota >= 1000000 && $iota <= 999999999) {
            $miota = $iota / 1000000;
            $res = "$miota MIOTA";
            return $res;
        } elseif($iota >= 1000000000 && $iota <= 999999999999) {
            $giota = $iota / 1000000000;
            $res = "$giota GIOTA";
            return $res;
        } elseif($iota >= 1000000000000 && $iota <= 999999999999999) {
            $tiota = $iota / 1000000000000;
            $res = "$tiota TIOTA";
            return $res;
        } elseif($iota <= 1000000000000000) {
            $piota = $iota / 1000000000000000;
            $res = "$piota PIOTA";
            return $res;
        }
    }
?>