<?php
  $txt = "Bonjour je suis Jean J'habite au Rue michelle Augustin.";
  
  

  function gras($txt){
    $Maj = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $ponc = [' ', '.', ',', ';', '\''];
    for ($i=0; isset($txt[$i]); $i++) { 
      for ($m=0; isset($Maj[$m]); $m++) { 
        if ($txt[$i] == $Maj[$m]){
          echo "<b>";
          while (!in_array($txt[$i],$ponc)){
            echo $txt[$i];
            $i++;
          }
          echo "</b>";
        }
    }
    echo $txt[$i];
  }
  }

  function cesar($txt){

  }

echo gras($txt);

?>
