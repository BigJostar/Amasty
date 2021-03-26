<?php
include_once('./classes/push.class.php');


$array=[
'1'=>[
],
'2'=>[
],
'3'=>[
],
'4'=>[
],
'5'=>[
]
];
$NewPush=new push;
$array=$NewPush->getPush($array);
$NewPush->getColor($array);

























?>
