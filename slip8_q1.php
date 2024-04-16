<!DOCTYPE html>
<html>
<head>
  <title>Palindrome Checker</title>
</head>
<body>
  <h1>Palindrome Checker</h1>
  <form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">
    <label for="string_input">Enter a string:</label>
    <input type="text" name="string_input" id="string_input" required>
    <br>
    <button type="submit">Check Palindrome</button>
  </form>
</body>
</html>
<?php
function is_palindrome($string) {
  $string = preg_replace("/[^A-Za-z0-9]/", "", strtolower($string));
  $reversed_string = strrev($string);
  return $string === $reversed_string;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input_string = $_POST["string_input"];
  
    if (is_palindrome($input_string)) {
      echo "<p>" . $input_string . " is a palindrome!</p>";
    } else {
      echo "<p>" . $input_string . " is not a palindrome.</p>";
    }
  }
?>  