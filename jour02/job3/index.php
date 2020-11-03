<?php

  $i = 0;

  while ($i <= 100) {
    if ($i < 20) {
      echo "<i>" . $i ."</i>" . "<br />";
    }
    elseif ($i > 25) {
      if ($i == 42) {
        echo "La Plateforme ! <br />";
      }
      else {
        echo "<u>". $i ."</u> <br />";
      }
    }
    $i++;
  }

 ?>
