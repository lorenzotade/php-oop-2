<?php

require_once __DIR__ . '/Customer.php';
require_once __DIR__ . '/CreditCard.php';
require_once __DIR__ . '/Address.php';

class PremiumCustomer extends Customer {

  private $level = "bronze";
  private $discount = 0;

  /**
   * __construct
   *
   * @param string $_name
   * @param string $_surname
   * @param string $_email
   * @param string $_level
   */
  public function __construct($_name, $_surname, $_email, $_level){

    parent::__construct($_name, $_surname, $_email);
    $this->level = $_level;
    $this->setDiscount();
  }

  /**
   * setDiscount
   *
   * @return float
   */
  private function setDiscount() {
    if ($this->level == "bronze") {
      $this->discount = 0.9;
    } elseif ($this->level == "silver") {
      $this->discount = 0.8;
    } elseif ($this->level == "gold") {
      $this->discount = 0.6;
    }
    return $this->discount;
  }

  /**
   * buyProduct
   *
   * @param object $_product
   * @param int $_quantity
   * @return string
   */
  public function buyProduct($_product, $_quantity)
  {
    $productName = $_product->productName;
    $total = ($_product->price * $_quantity) * $this->setDiscount();

    return "Il prezzo per N. " . $_quantity . " " . $productName . " è: " . $total . "€";
  }

}