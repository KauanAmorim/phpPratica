<?php 

require_once 'App/Lib/PagSeguro/PagSeguroLibrary.php';

$paymentRequest = new PagSeguroPaymentRequest();
$paymentRequest->setCurrency('BRL');

// Item
$item = new PagSeguroItem;
$item->setId($product->id);
$item->setDescription($product->description);
$item->setQuantity($data->amount);
$item->setAmount($product->price);
$paymentRequest->addItem($item);

// Endereço
$address = new PagSeguroAddress;
$address->setPostalCode($costumer->postal);
$address->setStreet($costumer->address);
$address->setNumber($costumer->number);
$address->setDistrict($costumer->neighborhood);
$address->setCity($costumer->city);
$address->setState($costumer->state);
$paymentRequest->setShippingAddress($address);

// cliente
$sender = new PagSeguroSender;
$sender->setName(trim($costumer->name));
$sender->setEmail(trim($costumer->email));
$paymentRequest->setSender($sender);

$paymentRequest->setRedirectUrl("$host/confirmation.html");
$credentials = new PagSeguroAccountCredentials($ini['account'], $ini['token']);
$url = $payment->regiter($credentials);

