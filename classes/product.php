<?php

class Product {

   //attributi
   public $name;
   public $brand;
   public $price;
   public $genre;
   public $vote;

   //costruttore
   public function __construct ($name, $brand, $price, $genre, $vote)
   {
      $this->name = $name;
      $this->brand = $brand;
      $this->price = $price;
      $this->genre = $genre;
      $this->vote = $vote;
   }

   public function getProductFullName():string
   {
      return $this->brand . " " . $this->name;
   }
}