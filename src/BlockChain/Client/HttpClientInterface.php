<?php

namespace BlockChain\Client;

interface HttpClientInterface {

    public function sendRequest(RequestInterface $request);

}