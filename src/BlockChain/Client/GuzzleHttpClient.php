<?php

namespace BlockChain\Client;

use GuzzleHttp\Client;

class GuzzleHttpClient implements HttpClientInterface {

    protected $client;

    public function __construct()
    {
        $this->client = new Client();
    }


    public function sendRequest(RequestInterface $request)
    {


    }
}