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
  
}

