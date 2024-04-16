<?php
// Establish a connection to the database
$host = "localhost";
$port = "5432";
$dbname = "database";
$user = "username";
$password = "password";

$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

// Check connection
if (!$conn) {
    die("Connection failed: " . pg_last_error());
}
// Get the owner name from the user
$owner_name = $_POST['owner_name'];
// Query the database for properties owned by the specified owner
$sql = "SELECT * FROM Property WHERE pno IN (SELECT pno FROM Owner WHERE oname = '$owner_name')";
$result = pg_query($conn, $sql);
// Display the results
if (pg_num_rows($result) > 0) {
    while($row = pg_fetch_assoc($result)) {
        echo "Property No: " . $row["pno"] . " - Description: " . $row["description"] . " - Area: " . $row["area"] . "<br>";
    }
} else {
    echo "No properties owned by $owner_name.";
}
// Close the database connection
pg_close($conn);
?>
