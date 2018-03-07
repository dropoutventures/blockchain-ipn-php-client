<?php


namespace BlockChain\Client;

use BlockChain\InvoiceInterface;

interface ClientInterface
{
    public function getInvoice($invoiceId);
    public function createInvoice(InvoiceInterface $invoice);
    public function generateAddress($type);
}
