<?php

function leetspeak($str){
  for ($i=0; isset($str[$i]) ; $i++) {
    if ($str[$i] == "a" or $str[$i] == "A") {
      $str[$i] = "4";
    }
    elseif ($str[$i] == "b" or $str[$i] == "B") {
      $str[$i] = "8";
    }
    elseif ($str[$i] == "e" or $str[$i] == "E") {
      $str[$i] = "3";
    }
    elseif ($str[$i] == "g" or $str[$i] == "G") {
      $str[$i] = "6";
    }
    elseif ($str[$i] == "l" or $str[$i] == "L") {
      $str[$i] = "1";
    }
    elseif ($str[$i] == "s" or $str[$i] == "S") {
      $str[$i] = "5";
    }
    elseif ($str[$i] == "t" or $str[$i] == "T") {
      $str[$i] = "7";
    }
  }
  return $str;
}

echo leetspeak("AbEgLsT");
 ?>
