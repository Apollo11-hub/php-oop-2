<?php 

class Product{

  public $title;
  public $availability;
  public $price;
  private $quantity;
  private $weight;
  private $duration;
  private $flavor;

public function __construct(
                $_title,
                $_price,
                $_availability
                )
  {
    $this->title = $_title;
    $this->availability = $_availability;
    $this->price = $_price;

  }

  //SETTER
  public function setQuantity($_quantity){
    $this->quantity = $_quantity;
  }
  public function setWeight($_weight){
    $this->weight = $_weight;
  }
  public function setDuration($_duration){
    $this->duration = $_duration;
  }
  public function setFlavor($_flavor){
    $this->flavor = $_flavor;
  }

  //GETTER
  public function getQuantity(){
    return $this->quantity;
  }
  public function getWeight(){
    return $this->weight;
  }
  public function getduration(){
    return $this->duration;
  }
  public function getFlavor(){
    return $this->flavor;
  }


}


?>