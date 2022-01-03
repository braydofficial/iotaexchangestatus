<?php
    $path = "../iota.php/autoload.php";
    $path2 = "../test.php"; 
    require_once($path);
    require_once($path2);
    $client = new IOTA\Client\SingleNodeClient();

    echo $client->info();
?>