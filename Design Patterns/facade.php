<?php

class PagSeguroFacade {

    private $request;
    
    public function __construct($currecy){
        $this->request = new PagSeguroPaymentRequest();
        $this->request->setCurrency($currecy);
    }

    public function addItem($product, $amount){
        $item = new PagSeguroItem;
        $item->setId($product->id);
        $item->setDescription($product->description);
        $item->setQuantity($data->amount);
        $item->setAmount($product->price);
        $this->request->addItem($item);
    }

    public function setCostumer($costumer){
        $address = new PagSeguroAddress;
        $address->setPostalCode($costumer->postal);
        $address->setStreet($costumer->address);
        $address->setNumber($costumer->number);
        $address->setDistrict($costumer->neighborhood);
        $address->setCity($costumer->city);
        $address->setState($costumer->state);
        $this->request->setShippingAddress($address);

        $sender = new PagSeguroSender;
        $sender->setName(trim($costumer->name));
        $sender->setEmail(trim($costumer->email));
        $this->request->setSender($sender);
    }

    public function process(){
        $this->request->setRedirectUrl("$host/confirmation.html");
        $credentials = new PagSeguroAccountCredentials($ini['account'], $ini['token']);
        $url = $payment->regiter($credentials);        
    }
}