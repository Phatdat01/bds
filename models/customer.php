# models/post.php

<?php
class Customer
{
  public $CustomerID;
  public $CustomerName;
  public $CustomerPhone;
  public $CustomerEmail;
  public $CustomerAddress;
  public $CustomerGender;
  public $UserID ;

  function __construct($CustomerID, $CustomerName, $CustomerPhone, $CustomerEmail, $CustomerAddress, $CustomerGender, $UserID )
  {
    $this->CustomerID = $CustomerID;
    $this->CustomerName = $CustomerName;
    $this->CustomerPhone = $CustomerPhone;
    $this->CustomerEmail = $CustomerEmail;
    $this->CustomerAddress = $CustomerAddress;
    $this->CustomerGender = $CustomerGender;
    $this->UserID  = $UserID;
  }

  static function all()
  {
    $list = [];
    $db = DB::getInstance();
    $req = $db->query('SELECT * FROM customer');

    foreach ($req->fetchAll() as $cus) {
      $list[] = new Customer(
            $cus['CustomerID'], 
            $cus['CustomerName'], 
            $cus['CustomerPhone'], 
            $cus['CustomerEmail'], 
            $cus['CustomerAddress'], 
            $cus['CustomerGender'], 
            $cus['UserID']
        );
    }

    return $list;
  }
  static function find($id)
  {
    $db = DB::getInstance();
    $req = $db->prepare('SELECT * FROM customer WHERE CustomerID = :CustomerID');
    $req->execute(array('CustomerID' => $CustomerID));

    $cus = $req->fetch();
    if (isset($cus['CustomerID'])) {
      return new Customer(
            $cus['CustomerID'], 
            $cus['CustomerName'], 
            $cus['CustomerPhone'], 
            $cus['CustomerEmail'], 
            $cus['CustomerAddress'], 
            $cus['CustomerGender'], 
            $cus['UserID']
        );
    }
    return null;
  }
}
?>