<?php

namespace BlockChain;

use BlockChain\Client\Client;
use BlockChain\Client\GuzzleHttpClient;

class BlockChain implements BlockChainInterface {

    protected $api_key;
    protected $xpub;
    protected $client;
    protected $httpClient;


    public function __construct($api_key) {

        $this->api_key = $api_key;
        $this->httpClient = new GuzzleHttpClient();
        $this->client = new Client($this);

    }

    public function getHttpClient() {

        return $this->httpClient;
    }

    public function setXPUB($xpub)
    {
        $this->xpub = $xpub;
    }

    public function getXPUB() {
        return $this->xpub;
    }

    public function getApiKey() {
        return $this->api_key;
    }

    public function getInvoice($invoiceId) {

        return $this->client->getInvoice($invoiceId);

    }

    public function createInvoice(InvoiceInterface $invoice) {

        return $this->client->createInvoice($invoice);
    }

    public function generateAddress($type) {
        return $this->client->generateAddress($type);
    }
}