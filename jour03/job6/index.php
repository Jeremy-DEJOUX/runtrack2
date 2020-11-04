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
  $str = "redessop suon rap tnessinif edessop no'l euq sesohc seL";
  $compte = mystrlen($str);
  for ($i=$compte-1; $i >= 0 ; $i-- ) {
    echo $str[$i-$compte];
  }



 ?>
<!-- Fight Club -->
