<?php

use Elasticsearch\ClientBuilder;

require 'vendor/autoload.php';

function create_es_client ( $host , $port ) {
    return ClientBuilder::create()->setHosts(["$host:$port"])->build();
}
