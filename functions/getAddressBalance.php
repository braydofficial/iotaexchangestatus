<?php
    require_once("iota.php/autoload.php");
    $client = new IOTA\Client\SingleNodeClient();

    echo $client->info();
?>