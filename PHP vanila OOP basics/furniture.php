<?php
//----------------1------------------------------


class Furniture
{

    protected $width;
    protected $height;
    protected $depth;
    protected $forSeat;
    protected $forSleep;

    public function __construct($width, $height, $depth)
    {
        $this->width = $width;
        $this->height = $height;
        $this->depth = $depth;
    }

    public function setForSeat($seat)
    {
        $this->forSeat = $seat;
    }
    public function setForSleep($sleep)
    {
        $this->forSleep = $sleep;
    }
    public function getForSeat()
    {
        $this->forSeat;
    }
    public function getForSleep()
    {
        $this->forSleep;
    }

    public function Area()
    {
        return $this->width * $this->depth;
    }

    public function Volume()
    {
        $area = $this->Area();
        return $area * $this->height;
    }
}


$furniture1 = new Furniture(2, 3, 4);
$furniture1->setForSeat('yes');
$furniture1->setForSleep('no');
echo "Area is: " . $furniture1->Area() . "<br />";
echo "Volume is: " . $furniture1->Volume() . "<hr />";


//------------------2-------------------------------------


class Sofa extends Furniture
{

    private $seats;
    private $arms;
    private $depthOpened;


    public function __construct($widht, $height, $depth)
    {
        parent::__construct($widht, $height, $depth);
    }

    public function setSeats($seats)
    {
        $this->seats = $seats;
    }
    public function setArms($arms)
    {
        $this->arms = $arms;
    }
    public function setDepthOpened($depthOpened)
    {
        $this->depthOpened = $depthOpened;
    }

    public function getSeats()
    {
        return $this->seats;
    }
    public function getArms()
    {
        return $this->arms;
    }
    public function getDepthOpened()
    {
        return $this->depthOpened;
    }

    public function AreaOpened()
    {

        if ($this->Area() > 50) {
            $sofaForSleep =  $this->width * $this->depthOpened;
            return "This sofa is for sleeping and is " . $sofaForSleep . " depth opened.";
        } elseif ($this->Area() >= 10 && $this->Area() < 50) {
            $area = $this->Area();
            return "It has " . $this->getArms() . " armrests and " . $this->getSeats() . " seats and have " . $area . " area.";
        } else {
            return "It's not for sitting";
        }
    }
}




$sofa1 = new Sofa(3, 3, 5);
$sofa1->setSeats(3);
$sofa1->setArms(2);
$sofa1->setDepthOpened(5);

echo "Area is: " . $sofa1->Area() . "<br />";
echo "Volume is: " . $sofa1->Volume() . "<br />";
echo $sofa1->AreaOpened() . "<hr />";


$sofa2 = new Sofa(7, 8, 10);
$sofa2->setSeats(3);
$sofa2->setArms(2);
$sofa2->setDepthOpened(5);
echo "Area is: " . $sofa2->Area() . "<br />";
echo "Volume is: " . $sofa2->Volume() . "<br />";
echo $sofa2->AreaOpened() . "<hr />";



//-------------3------------------


class Bench extends Sofa
{

    public function __construct($widht, $height, $depth)
    {
        parent::__construct($widht, $height, $depth);
    }
}

$bench1 = new Bench(2, 4, 4);
$bench1->setArms(3);
$bench1->setSeats(4);
echo "Area is: " . $bench1->Area() . "<br />";
echo "Volume is: " . $bench1->Volume() . "<br />";
echo $bench1->AreaOpened() . "<hr />";




class Desk extends Furniture
{

    public function __construct($widht, $height, $depth)
    {
        parent::__construct($widht, $height, $depth);
    }
    
}


$desk1 = new Desk(1, 2, 4);
echo "Area is: " . $desk1->Area() . "<br />";
echo "Volume is: " . $desk1->Volume() . "<br />";

