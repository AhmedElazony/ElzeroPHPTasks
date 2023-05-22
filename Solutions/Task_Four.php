<?php

// Replace ? With Arithmetic Operators
echo (10 + 20 - 15 + 3) * 190 % 10 * 400; // 0
echo '<br>';

// =----------------------------------------------------

$a = "10";

echo (int) $a; // 10
echo '<br>';
echo gettype((int) $a); // integer
echo '<br>';

echo 0 + $a; // 10
echo '<br>';
echo gettype(0 + $a); // integer
echo '<br>';

echo $a + false; // 10
echo '<br>';
echo gettype($a +false); // integer
echo '<br>';

// For The People Who Love Searching
echo intval($a); // 10
echo '<br>';
echo gettype(intval($a)); // integer
echo '<br>';

settype($a, "int");

echo $a; // 10
echo '<br>';
echo gettype($a); // integer
echo '<br>';

// =--------------------------------------------------------------------

// Needed Output -1
$a = 10;
$b = 20;

$x = 0 - ($b > $a); // -1
echo $x;
echo '<br>';

// =----------------------------------------------------------------------

$a = 10;
$b = 20;
$c = 15;

var_dump($a < $b); // True
echo '<br>';
var_dump($c > $a); // True
echo '<br>';
var_dump($a != $b); // True
echo '<br>';
var_dump($a <= $b); // True
echo '<br>';
var_dump($a !== $c); // True
echo '<br>';
var_dump($a <> $c); // True
echo '<br>';
var_dump(gettype($a) === gettype($b)); // True
echo '<br>';
var_dump(gettype($a) == gettype($b)); // True
echo '<br>';
var_dump((bool)(gettype((float) $a) >= (bool)gettype($b))); // True
echo '<br>';

// =------------------------------------------------------------------------

$points = 10;

// Write Your Code Here
$points++;
++$points;
$points++;

echo $points; // 13
echo '<br>';
// Write Your Code Here
$points--;
--$points;
$points--;
--$points;
$points--;

echo $points; // 8;
echo '<br>';

// =------------------------------------------------------------------------

$a = "Elzero";
$b = "Web";
$c = "School";

// Method One
$d = $a . " " . $b . " " . $c;

// Method Two
$d = $a . ' ';
$d .= $b;
$d .= ' ' . $c;

// Method Three
$d = "{$a} {$b} {$c}";

// Method Four
$d = <<<"word"
$a $b $c
word;

echo $d; // Elzero Web School
echo '<br>';

// =------------------------------------------------------------------------

$a = 10;
$b = 20;

echo ((($a + $b) * ($a + $b)) + $a * $a) * $a; // 10000
echo '<br>';

// =------------------------------------------------------------------------

// Code 1
$a = @$b or die("Custom Error");

// Code 2
$f = @file("Not_A_File") or die("Custom Error");

// Code 3
(@include("Not_A_File")) or die("Custom Error");