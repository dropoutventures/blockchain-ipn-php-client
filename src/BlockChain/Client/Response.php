<?php

namespace BlockChain\Client;

class Response implements ResponseInterface {


    protected $headers;
    protected $body;
    protected $statusCode;

    public function __construct()
    {
        $this->headers = array();

    }

    public function getStatusCode()
    {
        return $this->statusCode;
    }

    public function setStatusCode($status) {
        $this->statusCode = $status;
    }

    public function getBody()
    {
        return $this->body;
    }

    public function setBody($body) {

        $this->body = $body;
    }

    public function getHeaders()
    {
        return $this->headers;
    }

    public function setHeaders($headers) {
        $this->headers = $headers;
    }
}