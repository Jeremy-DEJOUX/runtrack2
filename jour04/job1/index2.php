<?php

if (!empty($_GET)) { //SI le forme est pas vide
  echo '<b>Variables</b> :<br />';
    echo '<pre>';
    print_r($_GET); // afficher les variables var_dump($_GET)
}

 ?>
