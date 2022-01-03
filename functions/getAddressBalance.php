<?php
    require_once("iota.php\autoload.php");
    $client = new iota.php\IOTA\Client\SingleNodeClient();

    echo $client->info();
?>