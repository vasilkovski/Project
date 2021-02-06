<?php
namespace Market;

class Products  implements Buyable
{

    private $productName;
    protected $kilos = false;
    protected $gunnySack = false;
    protected $price;
    private $quantity;
    protected $sack;

    public function __construct($productName,  $quantity = 0,$price = 0)
    {
        $this->productName = $productName;
    }
    public function total()
    {
        if ($this->getKilos()) {
            return $this->getPrice() * $this->quantity ;
        } elseif ($this->getGunnySack()) {
            return $this->getPrice() * $this->sack ;
        } else {
            return "Error";
        }
    }


    public function setProductName($productName)
    {
        $this->productName = $productName;
    }

    public function getProductName()
    {
        return $this->productName;
    }

    public function setKilos($kilos)
    {
        $this->kilos = $kilos;
    }
    public function getKilos()
    {
        return $this->kilos;
    }
    public function setGunnySack($gunnySack)
    {
        $this->gunnySack = $gunnySack;
    }

    public function getGunnySack()
    {
        return $this->gunnySack;
    }


    public function setPrice($price)
    {
        $this->price = $price;
    }
    public function getPrice()
    {
        return $this->price;
    }
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }
    public function getQuantity()
    {
        return $this->quantity;
    }

    public function setSack($sack)
    {
        $this->sack = $sack;
    }
    public function getSack()
    {
        return $this->sack;
    }


   
}
