<?php
    $path = "../iota.php/autoload.php";
    require_once($path);
    $client = new IOTA\Client\SingleNodeClient('mainnet');

    echo $client->info();
?>