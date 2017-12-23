<?php

namespace BlockChain;



class BlockChian {

    protected $api_key;
    protected $xpub;


    public function __construct($api_key) {

        $this->api_key = $api_key;

    }

    public function setXPUB($xpub)
    {
        $this->xpub = $xpub;
    }

    public function getAuthHeaders()
    {
        $headers = ['x-authorization' => $this->api_key, 'Content-Type' => 'application/json'];
        return headers;
    }

 
}