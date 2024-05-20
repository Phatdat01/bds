# models/post.php

<?php
class User
{
  public $UserID;
  public $Username;
  public $Password;
  public $RoleID;

  function __construct($UserID, $Username, $Password, $RoleID)
  {
    $this->UserID = $UserID;
    $this->Username = $Username;
    $this->Password = $Password;
    $this->RoleID = $RoleID;
  }

  static function find($UserID)
  {
    $db = DB::getInstance();
    $req = $db->prepare('SELECT * FROM users WHERE UserID = :UserID');
    $req->execute(array('UserID' => $UserID));

    $user = $req->fetch();
    if (isset($user['UserID'])) {
      return new User($user['UserID'], $user['Username'], $user['Password'], $user['RoleID']);
    }
    return null;
  }
}
?>