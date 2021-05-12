<?php
include_once  __DIR__ . "/../product.php";

class Smartphone extends Product {
   public $warranty;

   public function __construct($name, $brand, $price, $genre, $vote, $warranty, $color)
   {
      $this->name = $name;
      $this->brand = $brand;
      $this->price = $price;
      $this->genre = $genre;
      $this->vote = $vote;
      $this->warranty = $warranty;
      $this->color = $color;
   }
}
