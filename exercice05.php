<?php
$a = 7;
$b = 3;
echo "Avant a= ". $a . ' b= ' . $b;
list($a, $b) = array($b, $a);
echo "</br> Aprés a= " . $a . ' b= ' . $b."\n";
?>