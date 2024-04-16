<?php
$array=array('zero'=>0,'one'=>1,'two'=>2,'three'=>3,'four'=>4,'five'=>5);
$ch=$_POST['a'];
switch($ch)
{
case 1:
    print_r($array);
break;
case 2:
    echo "Size of array is : ".sizeof($array);
break;
}
?>