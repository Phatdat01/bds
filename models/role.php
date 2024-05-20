# models/post.php

<?php
class Role
{
  public $id;
  public $name;

  function __construct($id, $name)
  {
    $this->id = $id;
    $this->name = $name;
  }

  static function all()
  {
    $list = [];
    $db = DB::getInstance();
    $req = $db->query('SELECT * FROM user_roles');

    foreach ($req->fetchAll() as $role) {
      $list[] = new Role($role['id'], $role['name']);
    }

    return $list;
  }
  static function find($id)
  {
    $db = DB::getInstance();
    $req = $db->prepare('SELECT * FROM user_roles WHERE RoleID = :RoleID');
    $req->execute(array('id' => $id));

    $role = $req->fetch();
    if (isset($role['id'])) {
      return new Post($role['id'], $role['name']);
    }
    return null;
  }
}
?>