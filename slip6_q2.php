<?php
$op = $_GET['op'];
$input = array("SMJ"=>"10", "MES"=>"150", "SADHANA"=>"100", "S.KUMAR"=>"50", "Magarpatta"=>"55");
switch($op)
{
case 1 :  $flipped = array_flip($input);
  print_r($flipped);
  break;
case 2 :  shuffle($input);
   print_r($input);
   break;
}
?>