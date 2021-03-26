<?php
class betweenOneCity
{
 static function between_trans($connect)
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
  foreach ($arr_one as $key_one) 
  {
   foreach ($arr_one as $key_two) 
   {
    if ($key_one[1]==$key_two[1]) 
    {
     foreach ($arr_second as $key_thirt) 
     {
      if (($key_thirt[1]==$key_one[0])||($key_thirt[1]==$key_two[0])) 
      {
       if (($key_thirt[2]==$key_one[0])||($key_thirt[2]==$key_two[0])) 
       {
        print_r($key_thirt);
        echo "<br>";
       }
      }
     }
    }
   }
  }
 }
}
?>