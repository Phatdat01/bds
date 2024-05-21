<?php
class BaseController
{
  protected $folder;

  function render($file, $data = array())
  {
    $view_file = 'views/' . $file . '.php';
    if (is_file($view_file)) {
      extract($data);
      ob_start();
      require_once($view_file);
      $content = ob_get_clean();
      require_once('views/item.php');
    } else {
      header('Location: index.php?controller=pages&action=error');
    }
  }
}
?>