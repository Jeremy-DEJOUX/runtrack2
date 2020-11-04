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
function mystrlen($str){
  $count = 0;
  
}
  $str = "Dans l'espace, personne ne vous entend crier";
  $compte = mystrlen($str);
  for ($i=0; $i < $compte ; $i++) {
    echo $str[$i]." C'est le caractère numéro n°". $i ."<br />";
  }
  echo "Nomre de carcatères: ". $compte;
?>
<!-- Alien -->
