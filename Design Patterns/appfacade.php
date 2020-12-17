<?php

$ps = new PagSeguroFacade('BRL');

$product = new strClass;
$product->id = 5;
$product->description = 'Pendrive';
$product->price = 10;

$ps->addItem($product, 3);