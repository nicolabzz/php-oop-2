<?php

class Toy extends Product
{

  public
    $size,
    $hardness;

  public function __construct($size, $hardness, $id, $name, $pruductor, $category, $price, $inStock, $image)
  {
    parent::__construct($id, $name, $pruductor, $category, $price, $inStock, $image);
    $this->size = $size;
    $this->hardness = $hardness;
  }
}
