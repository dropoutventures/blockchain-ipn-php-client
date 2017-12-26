<?php

namespace BlockChain;


class Invoice implements InvoiceInterface {

    protected $orderId;
    protected $notificationUrl;
    protected $redirectUrl;
    protected $status;
    protected $extendedNotifications = false;
    protected $price;
    protected $id;
    protected $url;
    protected $btcPrice;
    protected $invoiceTime;
    protected $expirationTime;
    protected $currentTime;
    protected $exceptionStatus;
    protected $btcPaid;
    protected $rate;
    protected $token;


    public function getPrice() {

        return $this->price;
    }

    public function setPrice($price) {

        $this->price = $price;

        return $this;
    }

    public function getNotificationUrl()
    {
        return $this->notificationUrl;
    }

    public function setNotificationUrl($notificationUrl)
    {
        $this->notificationUrl = $notificationUrl;
        return $this;
    }

    public function getRedirectUrl()
    {
        return $this->redirectUrl;
    }

    public function setRedirectUrl($redirectUrl)
    {
        $this->redirectUrl = $redirectUrl;
        return $this;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    public function isExtendedNotifications()
    {
        return $this->extendedNotifications;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id  = $id;
        return $this;
    }

    public function getUrl()
    {
        return $this->url;
    }

    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }


    public function getBtcPrice()
    {
        return $this->btcPrice;
    }

    public function setBtcPrice($btcPrice)
    {
        $this->btcPrice = $btcPrice;
        return $this;
    }

    public function getInvoiceTime()
    {
        return $this->invoiceTime;
    }

    public function setInvoiceTime($invoiceTime)
    {
        $this->invoiceTime = $invoiceTime;
        return $this;
    }

    public function getExpirationTime()
    {
        return $this->expirationTime;
    }

    public function setExpirationTime($expirationTime)
    {
        $this->expirationTime = $expirationTime;
        return $this;
    }

    public function getCurrentTime()
    {
        return $this->currentTime;
    }

    public function setCurrentTime($currentTime)
    {
        $this->currentTime = $currentTime;
        return $this;
    }

    public function getOrderId()
    {
        return $this->orderId;
    }

    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
        return $this;
    }

    
    public function getExceptionStatus()
    {
        return $this->exceptionStatus;
    }

    public function setExceptionStatus($exceptionStatus)
    {
        $this->exceptionStatus = $exceptionStatus;
        return $this;
    }

    public function getBtcPaid()
    {
        return $this->btcPaid;
    }

    public function setBtcPaid($btcPaid)
    {
        $this->btcPaid = $btcPaid;
        return $this;
    }

    public function getRate()
    {
        return $this->rate;
    }

    public function setRate($rate)
    {
        $this->rate = $rate;
        return $this;
    }

    public function getToken()
    {
        return $this->token;
    }

    public function setToken($token)
    {
        $this->token = $token;
        return $this;
    }

}