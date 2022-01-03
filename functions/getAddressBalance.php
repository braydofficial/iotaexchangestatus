<?php
    require_once("../iota.php/autoload.php");
        
    use IOTA\Client\SingleNodeClient;
    use IOTA\Action\getBalance;
    function getAddressBalance($string) {
        

        $client = new SingleNodeClient('mainnet');
        $address = $string;
        $ret = $client->address($address);
        $ret = json_decode($ret, true);
        echo $ret['balance'];
    }
?>