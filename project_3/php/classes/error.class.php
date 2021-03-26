<?php
class Errors
{
 static function getError()
 {
  if ($_POST['amount'] % 5 != 0)
  {
   $near_one=$_POST['amount'] - ($_POST['amount'] % 5);
   $near_second=$_POST['amount'] - ($_POST['amount'] % 5)+5;
   die ("Choose ".$near_one." or ".$near_second.".");
  }
 }
}
?>
