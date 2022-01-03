<?php
    function getAddressBalance($string) {
        require_once("../iota.php/autoload.php");
    
        use IOTA\Client\SingleNodeClient;
        use IOTA\Action\getBalance;

        $client = new SingleNodeClient();
        $address = $string;
        echo $ret = (new getBalance($client))->address('$address')->run();
    }
?>