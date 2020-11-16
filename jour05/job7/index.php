<?php
  $txt = "Bonjour je suis Jean J'habite femme au Rue michelle Augustin femme.";
  
  

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


function strlen_copycat($input_string) {
      $i = 0;
      while (isset($input_string[$i])) {
          ++$i;
      }
      return $i;
  }

function cesar($txt){
  for ($i=0; $i < strlen_copycat($txt) ; $i++) { 
    echo $txt[($i+2)%strlen_copycat($txt)];
  }
}



function plateforme($txt){
  $ponc = [' ', '.', ',', ';', '\''];
  for ($i=0; isset($txt[$i]) ; $i++) { 
    for ($p=0; isset($ponc[$p]) ; $p++) { 
      if ($txt[$i] == "m" && $txt[$i+1] == "e" && $txt[$i+2] == $ponc[$p]) {
          $txt[$i+2] = "_";
      }
    }
    
  }
  return $txt;
}


echo gras($txt)."</br>";
echo cesar($txt)."<br/>";
echo plateforme($txt);

?>
