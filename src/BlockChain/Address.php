<?php

namespace BlockChain;


class Address implements AddressInterface {

    protected $address;
    protected $index;
    protected $gap;




    public function getAddress()
    {
        return $this->address;
    }

    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }

    public function getIndex()
    {
        return $this->index;
    }

    public function setIndex($index)
    {

        $this->index = $index;
        return $this;
    }

    public function getGap()
    {
        return $this->gap;
    }

    public function setGap($gap)
    {
        $this->gap = $gap;
        return $this;
    }

}