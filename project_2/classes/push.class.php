<?php
class push 
{
 public $input =['red', 'blue', 'green', 'yellow', 'lime', 'magenta', 'black', 'gold', 'gray', 'tomato'];
 public function getPush($array)
 {
  for ($j=0; $j < 5; $j++)
  {
   for($i=0;$i<5;$i++) 
   {
    $array[$j][$i]=$this->input[rand(0,10)];
   }
  }
  return $array;
 }
 public function getColor($array)
 {
  for ($j=0; $j <5 ; $j++) 
  {
   for ($i=0; $i <5  ; $i++) 
   {
    end:
    $color =$this->input[rand(0,10)];
    if ($color!=$array[$j][$i]) 
    {
     echo "<font color=".$color.">".$array[$j][$i]."</font>"." ";
    }
    else
    {
     goto end;
    }
   } 
   echo"<br>";
  }
 }

}
?>