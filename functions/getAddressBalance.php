<?php
    require_once("../iota.php/autoload.php");
    
    use IOTA\Client\SingleNodeClient;
    use IOTA\Action\getBalance;

    $client = new SingleNodeClient();

    echo $ret = (new getBalance($client))->address('60200bad8137a704216e84f8f9acfe65b972d9f4155becb4815282b03cef99fe')
    ->run();
?>