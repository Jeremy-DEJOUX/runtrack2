<?php
$str = "I'm sorry Dave I'm afraid I can't do that";
$voyelles = ["a", "e", "i", "o", "u", "y"];

for ($i=0 ; $i < strlen($str) ; $i++ ) {
  for ($v=0 ; $v < count($voyelles)  ; $v++ ) {
    if ($str[$i] == $voyelles[$v]) {
      echo $str[$i];
    }
  }

}



 ?>
