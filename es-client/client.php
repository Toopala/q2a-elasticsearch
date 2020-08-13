<?php
require 'vendor/autoload.php';

function create_es_client ( $host , $port ) {
    $client = \Elasticsearch\ClientBuilder::create()->setHosts(["$host:$port"])->build();
    return $client;
}
