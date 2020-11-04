<?php
  $voyelles = 0;
  $consonnes = 0;
  $str = "bonjour";
  $taille = strlen($str);
  // $dic = [["b","c","d","f","g","h","j","k","l","m","n","p","q","r","s","t","v","w","x","z"],["a", "e", "i", "o", "u", "y"]];
  $cons = array("b","c","d","f","g","h","j","k","l","m","n","p","q","r","s","t","v","w","x","z");
  $voy = array ("a", "e", "i", "o", "u", "y");
  $dic = array_combine ($cons, $voy);
  $comptec = count($dic);
  // $comptev = count($voy);
  for ($i=0; $i < $taille ; $i++) {
      for ($v=0; $v < $comptec ; $v++) {
        if ($str[$i] == $dic[0][$v]) {
        $consonnes++;
        echo $consonnes. "-". $str[$i]."<br />";
      }
      elseif ($str[$i] == $dic[1][$v]) {
        $voyelles++;
        echo $voyelles. "-". $str[$i]."<br />";
      }
    }
  }
  echo "C ".$consonnes . "<br />". "V ". $voyelles;
 ?>

 <!-- Matrix -->
