<?php
header('Access-Control-Allow-Origin: *');
include_once ('./libs/Simple_HTML_DOM/simple_html_dom.php');
$array=[];
$csv=[];
$link=file_get_html('https://terrikon.com/football/italy/championship/archive');
foreach($link->find('a') as $element)
{
 if (preg_match('/[2][0][0-9][0-9][-][1-2][0-9][\/\.]/',$element->href)) 
 {
  $array[]='https://terrikon.com'.$element->href;
 }
 if (count($array)>11)
 
 {
  break;
 }
}
for ($i=0; $i <11 ; $i++) 
{
 $link=file_get_html($array[$i]);
 foreach($link->find("tr") as $element)
 {
   $td=$element->find("td");
   for ($j=0; $j <sizeof($td) ; $j++) 
   { 
     if (strstr($td[$j]->text(),$_POST['team']))
     {
       array_push($csv,$td[$j-1]->text());
       array_push($csv,$td[$j]->text());
     }
    
   }
 }
}
?>