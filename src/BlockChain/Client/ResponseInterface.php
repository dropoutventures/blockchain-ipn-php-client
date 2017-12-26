<?php

namespace BlockChain\Client;


interface ResponseInterface {

    public function getBody();
    public function getStatusCode();
    public function getHeaders();

    public function setHeaders($headers);
    public function setStatusCode($status);
    public function setBody($body);
}