<?php

$a = 5;
$b = 3;

$r1 = 10;
$r2 = 10;
$r3 = 10;
$r4 = 10;
$r5 = 10;
$r6 = 10;

$r1 = $a;
$r2 += $a;
$r3 -= $a;
$r4 *= $a;
$r5 /= $a;
$r6 %= $a;

echo "Compare <br/>";
echo "a > b is " . ($a > $b) . "<br/>";
echo "a >= b is " . ($a >= $b) . "<br/>";
echo "a == b is " . ($a == $b) . "<br/>";
echo "a != b is " . ($a != $b) . "<br/>";
echo "a <> b is " . ($a <> $b) . "<br/>";

echo "------------------------------------<br/>";

echo "r1 = a is {$r1} <br/>";
echo "r2 += a is {$r2} <br/>";
echo "r3 -= a is {$r3} <br/>";
echo "r4 *= a is {$r4} <br/>";
echo "r5 /= a is {$r5} <br/>";
echo "r6 %= a is {$r6} <br/>";

?>