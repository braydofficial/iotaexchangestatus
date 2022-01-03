<?php
    $path = "../iota.php/autoload.php";
    require_once($path);
    $client = new ..\iota.php\src\Client\SingleNodeClient('mainnet');

    echo $client->info();
?>