<?php
    require_once("../iota.php/autoload.php");
        
    use IOTA\Client\SingleNodeClient;
    use IOTA\Action\getBalance;
    function getAddressBalance($string) {
        

        $client = new SingleNodeClient('mainnet');
        $address = $string;
        $ret = $client->address($address);
        $ret = json_decode($ret, true);
        $iota = $ret['balance'];
        
        // Check which type it is
        if($iota >= 0 && $iota <= 999999) {
            echo "$iota IOTA";
        } elseif($iota >= 1000000 && $iota <= 999999999) {
            $miota = $iota / 1000000;
            echo "$miota MIOTA";
        }
    }
?>