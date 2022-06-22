<?php 

class CreditCard{

  private $on_card_name;
  private $on_card_surname;
  private $card_number;
  private $card_cvc;
  private $card_expire_date_y;
  private $card_expire_date_m;


  public function __construct($_on_card_name,$_on_card_surname,$_card_number,$_card_cvc,$_card_expire_date_y,$_card_expire_date_m)
  {
    $this->on_card_name = $_on_card_name;
    $this->on_card_surname = $_on_card_surname;
    $this->card_number =$this->checkValidNumber($_card_number);
    $this->card_cvc = $this->checkValidCvc($_card_cvc);
    $this->checkValidExpiredDate($_card_expire_date_y, $_card_expire_date_m);
    $this->card_expire_date_y = $_card_expire_date_y;
    $this->card_expire_date_m = $_card_expire_date_m;
}


private function checkValidNumber($card_number){
  // controllo se la stringa contiene solo numeri
  if(!preg_match("/^[0-9]+$/", $card_number) || strlen($card_number) != 16 ){
    throw new Exception('Numero carta di credito invalido');
  }
  return $card_number;
}

private function checkValidCvc($card_cvc){

  if(!preg_match("/^[0-9]+$/", $card_cvc) || strlen($card_cvc) != 3 ){
    throw new Exception('Numero CVV non valido');
  }

  return $card_cvc;
}

private function checkValidExpiredDate($_card_expire_date_y, $_card_expire_date_m){

  $today_y = date("Y");
  $today_m = date("n");

  $valid_date = true;

  if($today_y > $_card_expire_date_y)
  {
    $valid_date = false;
  }

  if($today_y == $_card_expire_date_y){

    if($today_m > $_card_expire_date_m){
      $valid_date = false;
    }
  }

  if(!$valid_date ){
    throw new Exception('Carta di credito scaduta');
  }

}



public function getOnCardName(){
  return $this->on_card_name;
}
public function getOnCardSurame(){
  return $this->on_card_surname;
}
public function getCardNumber(){
  return $this->card_number;
}
public function getCardCvc(){
  return $this->card_cvc;
}
public function getCardExpireDateY(){
  return $this->card_expire_date_y;
}
public function getCardExpireDateM(){
  return $this->card_expire_date_m;
}
}


?>