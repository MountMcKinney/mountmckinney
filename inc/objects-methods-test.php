<?php
class Product
{

  public static $manufacturer = "Bart Taylor";

  public $name = 'default_name';
  public $price = 0;
  public $desc = 'default description';

  function __construct($name,$price,$desc){
    $this->name = $name;
    $this->price = $price;
    $this->desc = $desc;
  }

  public function getInfo(){
    //return some info about our product
    return "Product Name: ".$this->name;
  }

  public function getMaker(){
    return self::$manufacturer;
  }
}

class Soda extends Product
{
  public $flavor;

  function __construct($name,$price,$desc,$flavor){
    parent::__construct($name,$price,$desc);
    $this->flavor=$flavor
  }

  public function getInfo(){
    return "Product Name: ". $this->name . " Flavor: ". $this->flavor;
  }
}

$p = new Product();
$shirt = new Product("Space Juice Shirt", 20, "Awesome Grey T-Shirt");
$soda = new Soda("Alien Mutilator Soda", 2, "Grape");
echo $p->getInfo();

echo $shirt::$manufacturer;
?>
