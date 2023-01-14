<?php

class Product
{
      public
            $id,
            $name,
            $pruductor,
            $category,
            $price,
            $inStock,
            $image;

      public function __construct($id, $name, $pruductor, $category, $price, $inStock, $image)
      {
            $this->id = $id;
            $this->name = $name;
            $this->pruductor = $pruductor;
            $this->category = $category;
            $this->price = $price;
            $this->inStock = $inStock;
            $this->image = $image;
      }

}
