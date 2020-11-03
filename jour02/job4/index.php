<?php
$i = 0;
while ($i < 100) {
  if ($i % 3 === 0) {
    if ($i%5 ===0) {
      echo "FizzBuzz <br />";
    }

    else {
      echo "Fizz <br />";
    }
  }

  elseif ($i%5 === 0) {
    echo "Buzz <br />";
  }
  else {
    echo $i. "<br />";
  }
  $i++;
}

 ?>
