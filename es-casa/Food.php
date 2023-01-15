<?php
class Food extends Product
{
      private
            $weight,
            $ingredients,
            $consistency;

      // use MostPurchased;

      function __construct($weight, $ingredients, $consistency, $id, $name, $pruductor, $category, $price, $inStock, $image)
      {
            parent::__construct($id, $name, $pruductor, $category, $price, $inStock, $image);

            $this->weight = $weight;
            $this->ingredients = $ingredients;
            $this->consistency = $consistency;
      }




      /**
       * Get the value of weight
       */
      public function getWeight()
      {
            return $this->weight;
      }

      /**
       * Set the value of weight
       *
       * @return  self
       */
      public function setWeight($weight)
      {
            $this->weight = $weight;

            return $this;
      }

      /**
       * Get the value of ingredients
       */
      public function getIngredients()
      {
            return $this->ingredients;
      }

      /**
       * Set the value of ingredients
       *
       * @return  self
       */
      public function setIngredients($ingredients)
      {
            $this->ingredients = $ingredients;

            return $this;
      }

      /**
       * Get the value of consistency
       */
      public function getConsistency()
      {
            return $this->consistency;
      }

      /**
       * Set the value of consistency
       *
       * @return  self
       */
      public function setConsistency($consistency)
      {
            $this->consistency = $consistency;

            return $this;
      }
}
