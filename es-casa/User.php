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
}
