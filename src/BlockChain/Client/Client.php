<?php


namespace BlockChain\Client;


class Client implements ClientInterface {

    protected $request;
    protected $response;
    protected $httpClient;
    protected $api_key;
    protected $host;
    protected $basePath;

    public function setHttpClient(HttpClientInterface $httpClient) {
        $this->httpClient = $httpClient;
    }

    public function getHttpClient() {
        return $this->httpClient;
    }

    public function setApiKey($apiKey) {
        $this->api_key = $apiKey;
    }

    public function getApiKey() {
        return $this->api_key;
    }

    public function getHost() {
        return $this->host;
    }

    public function setHost($host) {
        $this->host = $host;
    }

    public function getBasePath() {
        return $this->basePath;
    }

    public function setBasePath($basePath) {
        $this->basePath = $basePath;
    }

    protected function createRequest() {

        $request = new Request();
        $request->setHost($this->host);
        $this->setAuthHeaders($request);

        return $request;

    }

    public function setAuthHeaders(RequestInterface $request)
    {
        $request->setHeader('x-authorization', $this->getApiKey());
        $request->setHeader('Content-Type', 'application/json');
    }

    public function getInvoice($invoiceId)
    {
        $this->request = $this->createRequest();
        $this->request->setMethod('POST');
        $this->request->setPath('invoiceData/' . $invoiceId);

        $this->response = $this->getHttpClient()->sendRequest($this->request);

        $body = json_decode($this->response->getBody(), true);

    }





}