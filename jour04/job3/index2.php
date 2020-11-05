<?php

if (!empty($_POST)) { //SI le forme est pas vide
  echo '<b>Variables</b> :<br />';
    echo '<pre>';
    print_r($_POST); // afficher les variables var_dump($_POST)
}

 ?>
