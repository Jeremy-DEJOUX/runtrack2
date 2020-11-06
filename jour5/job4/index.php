<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  </body>
</html>



<?php

function calcul($a, $operation, $b){
  switch ($operation) {
    case "+":
      $resultat = $a+$b;
      break;
    case "-" :
      $resultat = $a-$b;
      break;
    case "*" :
      $resultat = $a*$b;
      break;
    case "/" :
      $resultat = $a/$b;
      break;
  }
  return $resultat;


}

$x = calcul(2, "/", 3);
echo $x;










 ?>
