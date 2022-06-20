<?php 

require_once __DIR__ . "/classes/Products.php";
require_once __DIR__ . "/classes/User.php";
require_once __DIR__ . "/classes/AnimalTypeProduct.php";

//PRODUCTS
$cuccia_type1 = new AnimalTypeProduct('Cuccia' , 29.99 , true,);
$cuccia_type1->setQuantity(6);
$cuccia_type1->setWeight(7);
$cuccia_type1->setSpecificName("Cuccia LE CAT Chalet ");
$cuccia_type1->setAnimalSpecies("Gatto");

$food_type1 = new AnimalTypeProduct('Cibo' , 9.99 , true,);
$food_type1->setQuantity(20);
$food_type1->setWeight(15);
$food_type1->setDuration("11-07-2024");
$food_type1->setFlavor("Agnello e Verdure");
$food_type1->setSpecificName("Purina Dog Crunchy");
$food_type1->setAnimalSpecies("Cane");

var_dump($cuccia_type1);
var_dump($food_type1);




//USER
$luigi_rossi = new User("Luigi","Rossi","luigi.rossi@mail.it",true);

var_dump($luigi_rossi);


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Animal Shop Pezz.</title>
</head>
<body>
  
</body>
</html>