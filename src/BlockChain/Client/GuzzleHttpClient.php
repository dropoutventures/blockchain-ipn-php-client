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


        $res = $this->client->request($request->getMethod(), $request->getUri(), [
            'headers' => $request->getHeaders(),
            'body' => $request->getBody()
        ]);

        $ret = new Response();
        $ret->setStatusCode( $res->getStatusCode());
        $ret->setHeaders($res->getHeaders());
        $ret->setBody($res->getBody());



        return $ret;
    }
}