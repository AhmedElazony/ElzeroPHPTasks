<?php

$num_one = -1;
$num_two = 2.5;

$let_one = "o";
$let_two = "z";

$str = "El%er0";

$str[$num_one] = $let_one;
$str[(int)$num_two] = $let_two;

echo $str; // Elzero

echo "<br>===============<br>";
// =-----------------------------------------------------------------=

$str = "Orezle";

echo ucfirst(strtolower(strrev($str))); // Elzero

echo "<br>===============<br>";
// =-----------------------------------------------------------------=

$str = 'aAa';
$num = 3;
$char = "_";

echo str_repeat((strtolower(str_pad($str, 4, $char))), 3); // aaa_aaa_aaa_

echo "<br>===============<br>";
// =-----------------------------------------------------------------=

$str = "<div><b>Elzero</b></div>";

echo strip_tags($str, '<b>'); // <b>Elzero</b>
echo 'OR<br>OR';
echo htmlspecialchars(strip_tags($str, '<b>'));

echo "<br>===============<br>";
// =-----------------------------------------------------------------=

$str = "Elzero Web School";
$e = "e";
$o = "O";
$four = 4;

echo substr_count($str, $e, $four) . '<br>'; // 1
echo substr_count($str, strtolower($o), - $four); // 2

echo "<br>===============<br>";
// =-----------------------------------------------------------------=

$chars = ["E", "l", "z", "e", "r", "o"];

echo implode($chars); // Elzero

echo "<br>===============<br>";
// =-----------------------------------------------------------------=

$chars = ["E", 1, 2, "l", "z", "E", "R", "o"];

echo str_replace(['1', '2'], ['', ''], ucfirst(strtolower(implode($chars)))); //Elzero
echo 'OR<br>OR';
echo substr_replace(ucfirst(strtolower(implode($chars))), '', 1, 2);

echo "<br>===============<br>";
// =-----------------------------------------------------------------=