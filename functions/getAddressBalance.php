<?php
    $test = _DIR_;
    echo $test;
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/iota.php/autoload.php";
    require_once($path);
    $client = new IOTA\Client\SingleNodeClient();

    echo $client->info();
?>