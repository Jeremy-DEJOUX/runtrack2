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
$str = "On n est pas le meilleur quand on le croit mais quand on le sait";
$compte = mystrlen($str);
$voyelles = 0;
$consonnes = 0;

$dic = [["b","c","d","f","g","h","j","k","l","m","n","p","q","r","s","t","v","w","x","z"],
        ["a", "e", "i", "o", "u", "y"]];

for ($n=0; $n < $compte ; $n++) {
  for ($v=0; $v < count($dic[1]); $v++) {
    if ($str[$n] == $dic[1][$v]) {
      $voyelles++;
    }
  }
  for ($c=0; $c < count($dic[0]) ; $c++) {
    if ($str[$n] == $dic[0][$c]) {
      $consonnes++;
    }
  }
}
  echo "Consonnes : ". $consonnes. "<br />"
        ."Voyelles :". $voyelles;
 ?>

 <!-- Matrix -->
