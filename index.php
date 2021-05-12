<?php

class Product {

   //attributi
   public $name;
   public $brand;
   public $price;
   public $vote;

   //costruttore
   public function __construct ($name, $brand, $price, $vote)
   {
      $this->name = $name;
      $this->brand = $brand;
      $this->price = $price;
      $this->vote = $vote;
   }

   public function getProductFullName():string
   {
      return $this->brand . " " . $this->name;
   }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>E-commerce Michele</title>
</head>
<body>
   <h1><?php echo $iphone->getProductFullName() ?></h1>
</body>
</html>