<?php
$array = array('Apple', 'Banana', 'Cherry', 'Papaya');
$reversed = array_reverse($array);
$rev = array_reverse($reversed);
echo "Original array: " . implode(', ', $array) . "<br>";
echo "Reversed array: " . implode(', ', $reversed) . "<br>";
echo "Reversed array: " . implode(', ', $rev);
?>