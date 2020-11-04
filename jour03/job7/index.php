<?php
  function mystrlen($str)
  {
  $count = 0;
  for($i=0; $i<1000000; $i++)
  {
  if(@$str[$i] != "")$count++;
  else break;
  }
  return $count;
  }
  $str = "bonjour";
  $compte = mystrlen($str);
  // $i = 0;
  // while ($i < $compte) {
  //   echo $str[$i-1];
  //   i++;
  // }

  for ($i=0; $i < $compte ; $i++) {
    echo $str[$i-1];
  }




 ?>
<!-- Matrix -->
