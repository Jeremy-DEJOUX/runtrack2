<?php
for ($i=2; $i < 1000 ; $i++) {
  $prime = true;
  for ($j=2; $j < $i; $j++) {
    if ($i % $j == 0) {
      $prime = false;
    }
  }
  if ($prime) {
    echo $i . "<br />";
  }
}
?>
