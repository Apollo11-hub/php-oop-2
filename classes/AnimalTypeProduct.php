<?php

require_once __DIR__ . "/Products.php";

  class AnimalTypeProduct extends Product{

    private $animal_species;
    private  $specific_name;

    public function setAnimalSpecies($_animal_species){
      $this->animal_species = $_animal_species;
    }
    public function setSpecificName($_specific_name){
      $this->specific_name = $_specific_name;
    }

    public function getAnimalSpecies(){
      return $this->animal_species;
    }

    public function getSpecificName(){
      return $this->specific_name;
    }

  }


?>