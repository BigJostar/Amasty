<?php
class calculate 
{
 static function getSum()
 {
  $forCheck=$_POST['amount'];
  $Nominal=[5,10,20,50,100];
  for ($i=4; $i >-1;$i--) 
  { 
   alt:
   if (($forCheck-$Nominal[$i])>-1) 
   {
    $forCheck-=$Nominal[$i];
    $NominalUsed[$i]++;
    goto alt;
   }
  }
  return $NominalUsed;
 } 
}
?>