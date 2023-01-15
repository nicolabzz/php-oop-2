<?php

class CreditCard
{
  private
    $holder,
    $cardNumber,
    $cvc,
    $expiration;

  public function __construct($holder, $cardNumber, $cvc, $expiration)
  {
    $this->holder = $holder;
    $this->cardNumber = $cardNumber;
    $this->cvc = $cvc;
    $this->expiration = $expiration;
  }


  /**
   * Get the value of holder
   */
  public function getHolder()
  {
    return $this->holder;
  }

  /**
   * Set the value of holder
   *
   * @return  self
   */
  public function setHolder($holder)
  {
    $this->holder = $holder;

    return $this;
  }

  /**
   * Get the value of cardNumber
   */
  public function getCardNumber()
  {
    return $this->cardNumber;
  }

  /**
   * Set the value of cardNumber
   *
   * @return  self
   */
  public function setCardNumber($cardNumber)
  {
    $this->cardNumber = $cardNumber;

    return $this;
  }

  /**
   * Get the value of cvc
   */
  public function getCvc()
  {
    return $this->cvc;
  }

  /**
   * Set the value of cvc
   *
   * @return  self
   */
  public function setCvc($cvc)
  {
    $this->cvc = $cvc;

    return $this;
  }

  /**
   * Get the value of expiration
   */
  public function getExpiration()
  {
    return $this->expiration;
  }

  /**
   * Set the value of expiration
   *
   * @return  self
   */
  public function setExpiration($expiration)
  {
    $this->expiration = $expiration;

    return $this;
  }

  public function expiredCard()
  {
    if (date('d-m-y h:i:s') < $this->expiration) {
      throw new Exception('Expired Card!');
    }
  }
}
