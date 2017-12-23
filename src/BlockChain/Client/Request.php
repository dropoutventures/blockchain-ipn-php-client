<?php


namespace BlockChain\Client;

class Request implements RequestInterface
{
    protected $headers;
    protected $body;
    protected $uri;
    protected $method;
    protected $host;
    protected $path;

    public function __construct() {

        $this->headers = array('Content-Type' => 'application/json');
        $this->method = 'POST';
    }

    public function getMethod() {
        return $this->method;
    }

    public function setMethod($method) {
        $this->method = $method;
    }

    public function getHeaders() {
        return $this->headers;
    }

    public function setHeader($header, $value){

        $this->headers[$header] = $value;
    }


    public function getBody() {
        return $this->body;
    }

    public function setBody($body) {
        $this->body = $body;
        $this->setHeader('Content-Length', strlen($body));

        return $this;
    }

    public function getUri() {
        return "http://" .  $this->host . "/" . $this->path;
    }

    public function getHost() {
        return $this->host;
    }

    public function setHost($host) {
        $this->host = $host;
    }

    public function getPath() {
        return $this->path;
    }

    public function setPath($path) {
        $this->path = $path;
    }
}