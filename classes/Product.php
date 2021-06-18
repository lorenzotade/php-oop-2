<?php

class Product {
  public $productName;
  public $price;
  public $type;
  public $id;

  public $desc;

  /**
   * __construct
   *
   * @param string $_productName
   * @param float $_price
   * @param string $_type
   */
  public function __construct($_productName, $_price, $_type)
  {
    $this->productName = $_productName;
    $this->price = $_price;
    $this->type = $_type;
    $this->setID();
  }

  /**
   * setID
   *
   * @return void
   */
  private function setID() {
    $strID = substr($this->productName, 0, 2);
    $numID = rand(1000, 9999);
    $this->id = strtoupper($strID) . $numID;
  }

}