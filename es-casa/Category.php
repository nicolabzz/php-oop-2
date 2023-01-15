<?php

class Category
{
  private
    $categoryName,
    $categoryIcon;

  public function __cunstructor($categoryName, $categoryIcon)
  {
    $this->categoryName = $categoryName;
    $this->categoryIcon = $categoryIcon;
  }

    /**
     * Get the value of categoryName
     */ 
    public function getCategoryName()
    {
        return $this->categoryName;
    }

    /**
     * Set the value of categoryName
     *
     * @return  self
     */ 
    public function setCategoryName($categoryName)
    {
        $this->categoryName = $categoryName;

        return $this;
    }

    /**
     * Get the value of categoryIcon
     */ 
    public function getCategoryIcon()
    {
        return $this->categoryIcon;
    }

    /**
     * Set the value of categoryIcon
     *
     * @return  self
     */ 
    public function setCategoryIcon($categoryIcon)
    {
        $this->categoryIcon = $categoryIcon;

        return $this;
    }
}
