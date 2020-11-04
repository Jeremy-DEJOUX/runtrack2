<?php
$str = "i'm sorry dave i'm afraid i can't do that";
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

// $str = "i'm sorry dave i'm afraid i can't do that";
$voyelles = ["a", "e", "i", "o", "u", "y"];

for ($i=0 ; $i < mystrlen($str) ; $i++ ) {
  for ($v=0 ; $v < count($voyelles)  ; $v++ ) {
    if ($str[$i] == $voyelles[$v]) {
      echo $str[$i];
    }
  }

}



 ?>
<!-- 2001 A Space Odyssey -->
