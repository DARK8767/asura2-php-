<html>
<body>
<form method="GET" action="<?php echo $_SERVER['PHP_SELF']?>">
Enter the String : <input type="text" name="inputStr">
<input type="submit" name="Submit">
</form>
</body>
</html>

<?php
$string = $_GET['inputStr'];
$vowels = array("a"=>0,"e"=>0,"i"=>0,"o"=>0,"u"=>0);
$cnt = "";
for($i=0; $i<strlen($string); $i++) {
if(strtolower($string[$i]) == 'a') {
++$cnt;
++$vowels['a'];
}
if(strtolower($string[$i]) == 'e') {
++$cnt;
++$vowels['e'];
}
if(strtolower($string[$i]) == 'i') {
++$cnt;
++$vowels['i'];
}
if(strtolower($string[$i]) == 'o') {
++$cnt;
++$vowels['o'];
}
if(strtolower($string[$i]) == 'u') {
++$cnt;
++$vowels['u'];
}
}
echo "<h1>Total number of vowels found : ".$cnt."<h1>";
echo "Occurence of 'a' : ".$vowels['a']."<br>";
echo "Occurence of 'e' : ".$vowels['e']."<br>";
echo "Occurence of 'i' : ".$vowels['i']."<br>";
echo "Occurence of 'o' : ".$vowels['o']."<br>";
echo "Occurence of 'u' : ".$vowels['u']."<br>";
?>
