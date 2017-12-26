<?php

require __DIR__ . '/../vendor/autoload.php';

$api_key = '24da6a7ca3dc2c1ad5d550a85f7532fe30ddcee6';
$xpub = 'tpubDCgwozyK8yFfNLE9k3r6qqSiMPaqdfottS9APm2McNkKP7p9Sm7E2zVFJnjn2j5Med4soGV4NwUk9T7QtcK8GFSm5heHCmuA9uD8hmzCqz7';
$invoiceId = '';

$client = new \BlockChain\BlockChain($api_key);
$client->setXPUB($xpub);

$invoice = new \BlockChain\Invoice();

$invoice->setOrderId('0')
        ->setNotificationUrl('http://crapsite.tld')
        ->setPrice(500);

$invoice = $client->createInvoice($invoice);

var_dump($invoice);