<!-- <!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  </body>
</html> -->




<?php

  // function mystrlen($str){ //Fonction compte le nombre de caractère
  //   $compte = 0;
  //   for ($i=0; isset($str[$i]) ; $i++) {
  //     $compte++;
  //   }
  //   return $compte;
  // }




  function gras($str){ //Fonction Gras
      $Maj = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S",
      "T", "U", "V", "W", "X", "Y", "Z"];
      for ($i=0; isset($str[$i]); $i++) {
        foreach ($Maj as $key) {
            if ($str[$i] == $key) {
              echo "<b>";
              while ($str[$i] != " "){
                echo $str[$i];
                $str[$i] = $str[$i+1];

              }

              echo "</b>";
          }
          else {
            echo $str[$i];
          }
        }
      }
    }




  //
  //
  // function cesar($str, $option, $decalage){ //Fonction Cesar
  //   if ($option = "cesar" && ) {
  //
  //   }
  // }




  // function Plateforme($str, $option){ //Fonction Plateforme
  //   if ($option = "Plateforme") {
  //     for ($i=0; isset($str[$i]) ; $i++) {
  //       if ($str[$i] == " " or $str[$i] == ""){
  //         if ($str[$i-1] == "e" && $str[$i-2] == "m" ) {
  //           $str[$i] = "_";
  //         }
  //       }
  //     }
  //   }
  //   return $str;
  // }

  // $x = gras("La femme a Plusieurs Amant");
gras("La femme De Axel");
 ?>
