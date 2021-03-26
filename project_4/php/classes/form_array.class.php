<?php
class formArr
{
 static function makeInfo($arr_forInfo)
 {
  $arr=[];
  for ($i=0; $i <sizeof($arr_forInfo) ; $i++) 
  {
   if (strstr($arr_forInfo[$i],$_POST['team']))
   {
    if (preg_match('/[0-9][.]/',$arr_forInfo[$i-1]))
    {
     array_push($arr,$arr_forInfo[$i-1]);
    }
   }
  }
  return $arr;
 }
}
?>
