<?php



  function gras($str){
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

gras("La femme De Axel");
 ?>
