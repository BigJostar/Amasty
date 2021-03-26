<?php
$host='127.0.0.1:3306';
$user='root';
$password='';
$dbName='cities';
$dbConnect=mysqli_connect($host,$user,$password,$dbName);
if (!$dbConnect) 
{
 die('Error to connect');
}
?>