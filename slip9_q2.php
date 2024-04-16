<html>
<body>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
Select options:<br>
<input type="radio" value="INSERT" name="d1">Push</input><br>
<input type="radio" value="DELETE" name="d1">Pop</input><br>
<input type="submit"><br>
</form>
<?php
$a = array(1,2,3,4,5,6,7);
print_r($a);
echo "<br>";
if(isset($_POST['d1']))
{
if($_SERVER["REQUEST_METHOD"] == "POST")
{
$opt = $_POST['d1'];
if($opt == 'INSERT')
{
array_push($a,11);
echo "After Inserting :<br>";
print_r($a);
}
else if($opt == 'DELETE')
{
array_pop($a);
echo "After Deleting :<br>";
print_r($a);
}
}
}
?>