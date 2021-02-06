<?php
use \Market\Stall;
use \Market\Orange;
use \Market\Kiwi;
use \Market\Potato;
use \Market\Nuts;
use \Market\Pepper;
use \Market\Raspberry;

require_once 'interfaces.php';
require_once 'stall.php';
require_once 'products.php';
require_once 'orange.php';
require_once 'potato.php';
require_once 'kiwi.php';
require_once 'nuts.php';
require_once 'pepper.php';
require_once 'raspberry.php';


$product1 = new Orange ( 'Orange');
$product1->setQuantity(6);

$product2 = new Kiwi ( 'Kiwi');
$product2->setQuantity(1);

$product3 = new Potato ( 'Potato');
$product3->setSack(2);

$product4 = new Nuts ( 'Nuts');
$product4->setSack(1);

$product5 = new Pepper ( 'Peper');
$product5->setSack(3);

$product6 = new Raspberry( 'Rapsberry');
$product6->setQuantity(2);


$stall1 = new Stall(1);
$stall1->addProudct($product1);
$stall1->addProudct($product3);
$stall1->addProudct($product5);

$stall2 = new Stall(2);
$stall2->addProudct($product2);
$stall2->addProudct($product4);
$stall2->addProudct($product6);

// echo "<pre>";
// print_r($stall1);
// echo "</pre>";



$shoppingCart = [ $product1, $product2, $product3, $product4, $product5, $product6];
 $topay=0;
 foreach($shoppingCart as $product){
    $topay += $product->total();
 }
 echo "Vkupno za plakanje: " . $topay;
 



 

