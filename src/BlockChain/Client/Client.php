<?php


namespace BlockChain\Client;

use BlockChain\BlockChainInterface;
use BlockChain\Invoice;
use BlockChain\InvoiceInterface;

class Client implements ClientInterface {

    protected $request;
    protected $response;
    protected $httpClient;
    protected $api_key;
    protected $host;
    protected $basePath;
    protected $blockChain;

    public function __construct(BlockChainInterface $blockChain)
    {
        $this->host = '104.237.131.194';
        $this->blockChain = $blockChain;
        $this->httpClient =  $blockChain->getHttpClient();
    }

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
        return $this->blockChain->getApiKey();
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
        $this->request->setMethod('GET');
        $this->request->setPath('invoiceData/' . $invoiceId);

        $this->response = $this->httpClient->sendRequest($this->request);

        $body = json_decode($this->response->getBody(), true);

        $data = $body['data'];

        $invoice = new Invoice();

        $invoiceTime = is_numeric($data['invoiceTime']) ? intval($data['invoiceTime']/1000) : $data['invoiceTime'];
        $expirationTime = is_numeric($data['expirationTime']) ? intval($data['expirationTime']/1000) : $data['expirationTime'];
        $currentTime = is_numeric($data['currentTime']) ? intval($data['currentTime']/1000) : $data['currentTime'];

        $invoice
            ->setUrl($data['url'])
            ->setStatus($data['status'])
            ->setBtcPrice($data['btcPrice'])
            ->setPrice($data['price'])
            ->setOrderId(array_key_exists('orderId', $data) ? $data['orderId'] : '')
            ->setInvoiceTime($invoiceTime)
            ->setExpirationTime($expirationTime)
            ->setCurrentTime($currentTime)
            ->setId($data['id'])
            ->setBtcPaid($data['btcPaid'])
            ->setRate($data['rate'])
            ->setExceptionStatus($data['exceptionStatus']);

        return $invoice;

    }

    public function createInvoice(InvoiceInterface $invoice) {

        $this->request = $this->createRequest();
        $this->request->setMethod('POST');
        $this->request->setPath('api/v1/invoice');

        $body = array(
            'xpub'             => $this->blockChain->getXPUB(),
            'orderID'         => $invoice->getOrderId(),
            'notificationURL'  => $invoice->getNotificationUrl(),
            'price'             => $invoice->getPrice()
        );

        $this->request->setBody(json_encode($body));
        $this->setAuthHeaders($this->request);
        $this->response = $this->httpClient->sendRequest($this->request);


        $body = json_decode($this->response->getBody(), true);

        $data = $body['data'];

        $invoice = new Invoice();

        $invoiceTime = is_numeric($data['invoiceTime']) ? intval($data['invoiceTime']/1000) : $data['invoiceTime'];
        $expirationTime = is_numeric($data['expirationTime']) ? intval($data['expirationTime']/1000) : $data['expirationTime'];
        $currentTime = is_numeric($data['currentTime']) ? intval($data['currentTime']/1000) : $data['currentTime'];

        $invoice
            ->setUrl($data['url'])
            ->setStatus($data['status'])
            ->setBtcPrice($data['btcPrice'])
            ->setPrice($data['price'])
            ->setOrderId(array_key_exists('orderID', $data) ? $data['orderID'] : '')
            ->setInvoiceTime($invoiceTime)
            ->setExpirationTime($expirationTime)
            ->setCurrentTime($currentTime)
            ->setToken($data['token'])
            ->setBtcPaid($data['btcPaid'])
            ->setRate($data['rate'])
            ->setExceptionStatus($data['exceptionStatus'])
            ->setAddress($data['address']);

        return $invoice;
    }





}