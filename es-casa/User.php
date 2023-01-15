<?php

class User
{

  private
    $ipAddr,
    $country,
    $lastVisit;

  protected
    $cart = [];

  public function __construct($_ipAddr, $_country, $_lastVisit)
  {
    $this->ipAddr = $_ipAddr;
    $this->country = $_country;
    $this->lastVisit = $_lastVisit;
  }

  /**
   * Get the value of ipAddr
   */
  public function getIpAddr()
  {
    return $this->ipAddr;
  }

  /**
   * Set the value of ipAddr
   *
   * @return  self
   */
  public function setIpAddr($ipAddr)
  {
    $this->ipAddr = $ipAddr;

    return $this;
  }

  /**
   * Get the value of country
   */
  public function getCountry()
  {
    return $this->country;
  }

  /**
   * Set the value of country
   *
   * @return  self
   */
  public function setCountry($country)
  {
    $this->country = $country;

    return $this;
  }

  /**
   * Get the value of lastVisit
   */
  public function getLastVisit()
  {
    return $this->lastVisit;
  }

  /**
   * Set the value of lastVisit
   *
   * @return  self
   */
  public function setLastVisit($lastVisit)
  {
    $this->lastVisit = $lastVisit;

    return $this;
  }
}






class registeredUser extends User
{
  private
    $name,
    $surname,
    $email,
    $password,
    $isConfirmed,
    $discount = 0.20,
    $creditCards = [],
    $activeCard;

  function __construct($_name, $_surname, $_email, $_password, $_ipAddr, $_country, $_lastVisit)
  {
    parent::__construct($_ipAddr, $_country, $_lastVisit);
    $this->name = $_name;
    $this->surname = $_surname;
    $this->email = $_email;
    $this->password = $_password;
    $this->isConfirmed = false;
  }




  /**
   * Get the value of name
   */
  public function getName()
  {
    return $this->name;
  }

  /**
   * Set the value of name
   *
   * @return  self
   */
  public function setName($name)
  {
    $this->name = $name;

    return $this;
  }

  /**
   * Get the value of surname
   */
  public function getSurname()
  {
    return $this->surname;
  }

  /**
   * Set the value of surname
   *
   * @return  self
   */
  public function setSurname($surname)
  {
    $this->surname = $surname;

    return $this;
  }

  /**
   * Get the value of email
   */
  public function getEmail()
  {
    return $this->email;
  }

  /**
   * Set the value of email
   *
   * @return  self
   */
  public function setEmail($email)
  {
    $this->email = $email;

    return $this;
  }

  /**
   * Get the value of password
   */
  public function getPassword()
  {
    return $this->password;
  }

  /**
   * Set the value of password
   *
   * @return  self
   */
  public function setPassword($password)
  {
    $this->password = $password;

    return $this;
  }

  /**
   * Get the value of isConfirmed
   */
  public function getIsConfirmed()
  {
    return $this->isConfirmed;
  }

  /**
   * Set the value of isConfirmed
   *
   * @return  self
   */
  public function setIsConfirmed($isConfirmed)
  {
    $this->isConfirmed = $isConfirmed;

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

  /**
   * Get the value of creditCards
   */
  public function getCreditCards()
  {
    return $this->creditCards;
  }

  /**
   * Set the value of creditCards
   *
   * @return  self
   */
  public function setCreditCards($creditCards)
  {
    $this->creditCards = $creditCards;

    return $this;
  }

  /**
   * Get the value of activeCard
   */
  public function getActiveCard()
  {
    return $this->activeCard;
  }

  /**
   * Set the value of activeCard
   *
   * @return  self
   */
  public function setActiveCard($activeCard)
  {
    $this->activeCard = $activeCard;

    return $this;
  }

}
