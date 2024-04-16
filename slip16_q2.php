<html>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
<h3><input type="radio" name="op" value="1">Reverse the order of each elt's key-value pair</h3>
<h3><input type="radio" name="op" value="2">Traverse the elements in array in random order</h3>
<input type="submit" value="Submit">
</form>
</body>
</html>

<?php
if(isset($_GET['op'])){
$op = $_GET['op'];
$input = array("SMJ"=>"10", "MES"=>"150", "SADHANA"=>"100", "S.KUMAR"=>"50", "Magarpatta"=>"55");
echo "Original Array : <br>";
print_r($input);
echo "<br>";

switch($op)
{
case 1 :  
    echo "<br>ARRAY AFTER REVERSE KEY-VALUE PAIR: <br>";
    $flipped = array_flip($input);
  print_r($flipped);
  break;
case 2 :  
    echo "<br> ARRAY AFTER TRAVERSING IN RANDOM ORDER : <br>";
    shuffle($input);
   print_r($input);
   break;
}
}
?>