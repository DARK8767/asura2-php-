<?php 
// get the url as file
$lines = file('https://youtube.com/');
//Loop each line as line_num
foreach ($lines as $line_num => $line) {
	// loop through each line and prepend line numbers and echo it
	echo "Line #<b>{$line_num}</b> : " . htmlspecialchars($line) . "<br />\n";
}
?>