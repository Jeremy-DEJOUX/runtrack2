<?php

  function test($str, $char){
    $compteur = 0;
    $i = 0;
    while (isset($str[$i])) {
      if ($str[$i] === $char){
        $compteur++;
      }
      $i++;
    }
    return $compteur;
  }
  $string = "bonjour";
  $key = "o";
  $howmuch = test($string, $key);
  echo $howmuch;
 ?>
