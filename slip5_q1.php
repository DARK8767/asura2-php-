<?php
$num = 153;
$n = $num;
$result = 0;
while ($num > 0)
{
    $rem = $num % 10;
    $result += $rem * $rem *$rem;
    $num = $num / 10;
} 
if ($result == $n)
    echo "<b>$n</b> is an ARMSTRONG NUMBER<br>";
else 
    echo "<b>$n</b> is NOT an ARMSTRONG NUMBER<br>";
?>