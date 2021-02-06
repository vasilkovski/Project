<?php

namespace Market;

class Stall 
{
private $code;
private $stall = [];


public function setStall($stall)
{
    $this->stall = $stall;
}
public function getStall()
{
    return $this->stall;
}

public function __construct($code){
    $this->code = $code;
}
public function addProudct($product){
    array_push($this->stall, $product);
}



}
