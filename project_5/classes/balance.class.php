<?php
class dbInfo
{
static function takeInfo($connect,$findId)
 {
  $balance=100;
  $arr_one=[];
  $arr_second=[];
  $arr_one=mysqli_query($connect,"SELECT * FROM `persons`");
  $arr_second=mysqli_query($connect,"SELECT * FROM `transactions`");
  $arr_one=mysqli_fetch_all($arr_one);
  $arr_second=mysqli_fetch_all($arr_second);
  foreach ($arr_one as $key) 
  {
   if ($key[0]==$findId) 
   {
    foreach ($arr_second as $values) 
    {
     if ($values[1]==$findId)
     {
      $balance-=$values[3];
     }
     if ($values[2]==$findId)
     {
      $balance+=$values[3];
     }
    }
   }
  }
  echo "Balance of this ID is ".$balance." ."."<br>";
 }
}
?>