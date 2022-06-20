<?php 

class User{

  public $name;
  public $surname;
  public $e_mail;
  public $registered;


public function __construct(
                $_name,
                $_surname,
                $_e_mail,
                $_registered
)
{
  $this->name = $_name;
  $this->surname = $_surname;
  $this->e_mail = $_e_mail;
  $this->registered = $_registered;
}



}


?>