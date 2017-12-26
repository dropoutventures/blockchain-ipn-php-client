<?php


namespace BlockChain\Client;


interface RequestInterface
{

    public function getUri();
    public function getBody();
    public function getHeaders();
    public function getMethod();

    public function setHeader($header, $value);


}