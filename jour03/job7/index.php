<?php
  function mystrlen($str){
    $count = 0;
    for($i=0; isset($str[$i]); $i++){
      $count++;
    }
    return $count;
  }

    $str = "bonjour";
    for ($i=0; isset($str[$i]); $i++) {
      echo $str[$i-mystrlen($str)+1];
    }


  // function strlen_copycat($input_string) {
  //     $i = 0;
  //     while (isset($input_string[$i])) {
  //         ++$i;
  //     }
  //     return $i;
  // }
  // $matrix = "Certaines choses changent, et d'autres ne changeront jamais.";
  // $length = strlen_copycat($matrix);

  // // Remercions la magie du modulo
  // for ($i = 0; $i < $length; ++$i)
  //     echo $matrix[($i + 1) % $length];
?>
