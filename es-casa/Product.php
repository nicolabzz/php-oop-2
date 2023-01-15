<?php

class Product
{
      public
            $name,
            $pruductor,
            $category,
            $price,
            $inStock,
            $image;

      private
            $id,
            $discount;


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
      
      /**
       * Get the value of id
       */
      public function getId()
      {
            return $this->id;
      }

      /**
       * Set the value of id
       *
       * @return  self
       */
      public function setId($id)
      {
            $this->id = $id;

            return $this;
      }

      /**
       * Get the value of discount
       */
      public function getDiscount()
      {
            return $this->discount;
      }

      /**
       * Set the value of discount
       *
       * @return  self
       */
      public function setDiscount($discount)
      {
            $this->discount = $discount;

            return $this;
      }
}
