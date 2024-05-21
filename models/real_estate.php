# models/post.php

<?php
class Real_Estate
{
  public $id;
  public $title;
  public $price;
  public $author;
  public $type;
  public $image;
  public $area;
  public $detail;
  public $date;
  public $address;

  function __construct($id, $title, $price, $author, $type, $image, $area, $detail, $date, $address)
  {
    $this->id = $id;
    $this->title = $title;
    $this->price = $price;
    $this->author = $author;
    $this->type = $type;
    $this->image = $image;
    $this->area = $area;
    $this->detail = $detail;
    $this->date = $date;
    $this->address = $address;
  }

  static function all()
  {
    $list = [];
    $db = DB::getInstance();
    $req = $db->query('SELECT * FROM real_estate');

    foreach ($req->fetchAll() as $item) {
      $list[] = new Real_Estate(
        $item['id'], 
        $item['title'], 
        $item['price'], 
        $item['author'], 
        $item['type'], 
        $item['image'], 
        $item['area'], 
        $item['detail'], 
        $item['date'], 
        $item['address']
      );
    }

    return $list;
  }
  static function find($id)
  {
    $db = DB::getInstance();
    $req = $db->prepare('SELECT * FROM real_estate WHERE id = :id');
    $req->execute(array('id' => $id));

    $item = $req->fetch();
    if (isset($item['id'])) {
      return new Real_Estate(
        $item['id'], 
        $item['title'], 
        $item['price'], 
        $item['author'], 
        $item['type'], 
        $item['image'], 
        $item['area'], 
        $item['detail'], 
        $item['date'], 
        $item['address']
      );
    }
    return null;
  }
}
?>