<!DOCTYPE html>
<html>
<head>
	<title>Class Time Table</title>
	<style>
		table, th, td {
			border: 1px solid black;
			border-collapse: collapse;
			padding: 10px;
		}
	</style>
</head>
<body>

<?php
// Define the time table as a multi-dimensional array
$time_table = array(
	array("Time", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"),
	array("8:15-9:00", "---", "---", "EVS", "EVS", "ENGLISH", "---"),
	array("9:00-9:45", "C++", "C++", "PHP", "PHP", "C++", "PYTHON"),
	array("9:45-10:30", "S.E", "S.E", "S.E", "C++", "PHP", "ENGLISH"),
	array("10:30-11:15", "PHP", "PHP", "C++", "S.E.", "PYTHON","S.E."),
	array("11:30-2:30 PRACTICAL", "C++[B1]", "C++[B2]", "S.E./PY[B1]", "S.E./PY[B2]", "PHP[B1]","PHP[B2]"),
);

// Create the table header row
echo "<table>";
echo "<tr>";
foreach ($time_table[0] as $value) {
	echo "<th>$value</th>";
}
echo "</tr>";

// Loop through the time table array and display the table data rows
for ($i=1; $i < count($time_table); $i++) { 
	echo "<tr>";
	foreach ($time_table[$i] as $value) {
		echo "<td>$value</td>";
	}
	echo "</tr>";
}
echo "</table>";
?>

</body>
</html>
