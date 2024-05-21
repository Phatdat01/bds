<?php
echo '<ul>';
foreach ($item as $item) {
  echo '<li>
    <a href="index.php?controller=posts&action=showPost&id=' . $item->id . '">' . $item->title . '</a>
  </li>';
}
echo '</ul>';
?>
