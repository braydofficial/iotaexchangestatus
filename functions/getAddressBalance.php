<?php
    require_once("../iota.php/autoload.php");
        
    use IOTA\Client\SingleNodeClient;
    use IOTA\Action\getBalance;
    function getAddressBalance($string) {
        

        $client = new SingleNodeClient('mainnet');
        $address = $string;
        echo $ret = (new getBalance($client))->address('$address')->run();
    }
?>