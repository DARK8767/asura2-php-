<!DOCTYPE html>
<html>
<head>
	<title>String Comparison and Reversal</title>
</head>
<body>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
		String 1: <input type="text" name="string1"><br>
		String 2: <input type="text" name="string2"><br>
		Position to reverse characters from:<br>
		<input type="radio" name="position" value="0">0<br>
		<input type="radio" name="position" value="1">1<br>
		<input type="radio" name="position" value="2">2<br>
		<input type="radio" name="position" value="3">3<br>
		<input type="radio" name="position" value="4">4<br>
		<input type="submit" name="submit" value="Submit">
	</form>

</body>
</html>
<?php
$string1 = "";
$string2 = "";
$position = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $string1 = $_POST["string1"];
    $string2 = $_POST["string2"];
    $position = $_POST["position"];

    // Compare the two strings using == operator
    if ($string1 == $string2) {
        echo "<p>The two strings are equal using == operator.</p>";
    } else {
        echo "<p>The two strings are not equal using == operator.</p>";
    }

    // Compare the two strings using strcmp function
    if (strcmp($string1, $string2) == 0) {
        echo "<p>The two strings are equal using strcmp function.</p>";
    } else {
        echo "<p>The two strings are not equal using strcmp function.</p>";
    }

    // Append second string to first string
    $string1 .= $string2;
    echo "<p>The concatenated string is: $string1</p>";

    // Reverse characters in first string from selected position
    if (!empty($string1) && !empty($position)) {
        $pos = (int)$position;
        if ($pos >= 0 && $pos < strlen($string1)) {
            $prefix = substr($string1, 0, $pos);
            $suffix = substr($string1, $pos);
            $reversed_prefix = strrev($prefix);
            $string1 = $reversed_prefix . $suffix;
            echo "<p>The string with reversed characters from position $pos is: $string1</p>";
        } else {
            echo "<p>Invalid position selected.</p>";
        }
    }
}
?>