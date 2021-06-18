<?php

require_once __DIR__ . '/CreditCard.php';
require_once __DIR__ . '/Address.php';

class Customer {
  
  use CreditCard;
  use Address;
  private $name;
  private $surname;
  private $email;

  /**
   * __construct
   *
   * @param string $_name
   * @param string $_surname
   * @param string $_email
   */
  public function __construct($_name, $_surname, $_email)
  {
    $this->name = $_name;
    $this->surname = $_surname;
    $this->email = $_email;
  }

  /**
   * setCreditCard
   *
   * @param int $_number
   * @param string $_validThru
   * @param int $_cvv
   * @return void
   */
  public function setCreditCard($_number, $_validThru, $_cvv)
  {
    $this->owner = $this->name . " " . $this->surname;
    if (!is_int($_number)) {
      throw new Exception("Il numero della carta di credito non è valido.");
    }
    $this->number = $_number;
    $this->validThru = $_validThru;
    $this->cvv = $_cvv;
  }

  /**
   * setAddress
   *
   * @param string $_street
   * @param string $_town
   * @param int $_zip
   * @param string $_country
   * @return void
   */
  public function setAddress($_street, $_town, $_zip, $_country)
  {
    $this->street = $_street;
    $this->town = $_town;
    $this->zip = $_zip;
    $this->country = $_country;
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
    $total = $_product->price * $_quantity;

    return "Il prezzo per N. " . $_quantity . " " . $productName . " è: " . $total . "€";
  }
  
}