<?php
include_once  __DIR__ . "/../product.php";

class Tshirt extends Product {
   public $size;
   public $sex;

   public function __construct($name, $brand, $price, $genre, $vote, $size, $sex)
   {
      $this->name = $name;
      $this->brand = $brand;
      $this->price = $price;
      $this->genre = $genre;
      $this->vote = $vote;
      $this->size = $size;
      $this->sex = $sex;
   }
}
