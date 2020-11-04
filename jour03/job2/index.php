<?php
  $str = "tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";
  $strlen = count(str_split($str));
  for ($i=0; $i < $strlen; $i = $i+2) {
    echo $str[$i];
  }
 ?>

<!-- Blade Runner  -->
