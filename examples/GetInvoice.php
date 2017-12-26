<?php

require __DIR__ . '/../vendor/autoload.php';

$api_key = '24da6a7ca3dc2c1ad5d550a85f7532fe30ddcee6';
$invoiceId = '';

$client = new \BlockChain\BlockChain($api_key);

$invoice = $client->getInvoice('6w2Rmbed27yrQePLxOndwMoPD');


var_dump($invoice);