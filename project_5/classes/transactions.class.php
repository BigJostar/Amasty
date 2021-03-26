<?php
class trans 
{
 static function findMaxTrans($connect)
 {
  $max=0;
  $maxforCheck=0;
  $human_name='';
  $arr_one=[];
  $arr_second=[];
  $arr_one=mysqli_query($connect,"SELECT * FROM `persons`");
  $arr_second=mysqli_query($connect,"SELECT * FROM `transactions`");
  $arr_one=mysqli_fetch_all($arr_one);
  $arr_second=mysqli_fetch_all($arr_second);
  foreach ($arr_one as $key) 
  {
    foreach ($arr_second as $info) 
    {
     if ($key[0]==$info[1]) 
      {
       $maxforCheck++;
      }
      if ($key[0]==$info[2]) 
      {
       $maxforCheck++;
      }
      if ($key[0]=='4')
      {
       $maxforCheck=0;
      }
    }
   if ($max<$maxforCheck) 
   {
    $max=$maxforCheck;
    $maxforCheck=0;
    $human_name=$key[2];
   }
  }
  echo  $max."<br>";
  echo  $human_name."<br>";
 }
}
?>