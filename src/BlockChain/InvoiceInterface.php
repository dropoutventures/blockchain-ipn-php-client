<?php

namespace BlockChain;


interface InvoiceInterface {

    const STATUS_NEW = 'new';

    const STATUS_PAID = 'paid';

    const STATUS_CONFIRMED = 'confirmed';

    const STATUS_COMPLETE = 'complete';

    const STATUS_EXPIRED = 'expired';

    const STATUS_INVALID = 'invalid';

    public function getPrice();

    public function getNotificationUrl();

    public function getRedirectUrl();

    public function getStatus();

    public function getId();

    public function getUrl();

    public function getBtcPrice();

    public function getInvoiceTime();

    public function getExpirationTime();

    public function getCurrentTime();

    public function getOrderId();

    public function getExceptionStatus();

    public function getBtcPaid();

    public function getRate();

    public function getToken();

}