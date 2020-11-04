<?php
  // function mystrlen($str)
  // {
  // $count = 0;
  // for($i=0; $i<1000000; $i++)
  // {
  // if(@$str[$i] != "")$count++;
  // else break;
  // }
  // return $count;
  // }

  function otherstrlen($str){
    $compte = 0;
    while (isset($str[$compte]))
      $compte++;
    return $compte;
  }
  $str = "Certaines choses changent, et d'autres ne changeront jamais";
  $ocurence = otherstrlen($str);
  // $compte = otherstrlen($str);
  for ($i=0; $i < $ocurence ; $i++) {
    echo $str[$i-1];
  }

 ?>
<!-- Matrix -->
