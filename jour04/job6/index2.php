<?php
  // $num = number_format($_GET["nombre"]);
  $num = (int)$_GET["nombre"];
  if ($num%2 == 0) {
    echo "nombre pair";
  }
  else {
    echo "nombre impair";
  }

 ?>
