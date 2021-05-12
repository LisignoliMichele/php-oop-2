<?php
include_once  __DIR__ . "/../product.php";

class Computer extends Product {
   public $warranty;
   public $memory;
   public $gpu;

   public function __construct($name, $brand, $price, $genre, $vote, $warranty, $memory, $cpu)
   {
      $this->name = $name;
      $this->brand = $brand;
      $this->price = $price;
      $this->genre = $genre;
      $this->vote = $vote;
      $this->warranty = $warranty;
      $this->memory = $memory;
      $this->cpu = $cpu;
   }
}
