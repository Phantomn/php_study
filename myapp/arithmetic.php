<?php

$a = 5;
$b = 3;
$c1 = 0;
$c2 = 0;
$c3 = 0;
$c4 = 0;
$c5 = 0;

$c1 = $a + $b;
$c2 = $a - $b;
$c3 = $a * $b;
$c4 = $a / $b;
$c5 = $a % $b;

echo  "a + b = {$c1}<br/>";
echo  "a - b = {$c2}<br/>";
echo  "a * b = {$c3}<br/>";
echo  "a / b = {$c4}<br/>";
echo  "a % b = {$c5}<br/>";

echo "----------------------------------------<br/>";

echo "++a is " . ++$a . "<br/>";
echo "--a is " . --$a . "<br/>";
echo "a++ is " . $a++ . "<br/>";
echo "a-- is " . $a-- . "<br/>";
echo $a;

?>