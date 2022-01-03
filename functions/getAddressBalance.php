<?php
    $path = "../iota.php/autoload.php";
    require_once($path);
    $client = new ..\iota.php\Client\SingleNodeClient('mainnet');

    echo $client->info();
?>