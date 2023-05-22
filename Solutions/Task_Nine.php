<?php

echo mt_rand(10, 20);

echo "<br>===============<br>";
// =-----------------------------------------------------------------=

$friends = ["Osama", "Ahmed", "Sayed", "Ibrahim"];

echo $friends[rand(0, count($friends) - 1)];

echo "<br>===============<br>";
// =-----------------------------------------------------------------=

$num1 = 11.5; // 11
$num2 = 9.4898; // 9.5
$num3 = -7.5; // -7

echo round($num1, 0, PHP_ROUND_HALF_DOWN) . "<br>";
echo round($num2, 1) . "<br>";
echo round($num3, 0, PHP_ROUND_HALF_DOWN) . "<br>";

echo "<br>===============<br>";
// =-----------------------------------------------------------------=

$filters = filter_list();

for ($i = 0; $i < count($filters); $i++) {
  $newArray[(filter_id($filters[$i]))] = $filters[$i];
}

echo '<pre>';
print_r($newArray);
echo '</pre>';

echo "<br>===============<br>";
// =-----------------------------------------------------------------=

$url1 = "http://www.elz ero.org";
$url2 = "http://¥elzero.org";
$url3 = "https://elzero.org";
$url4 = "https://elzero.o¥rg";

echo filter_var($url1, FILTER_VALIDATE_URL) ? "A Valid URL" : "Not A Valid URL";

echo "<br>===============<br>";
// =-----------------------------------------------------------------=

$url1 = "http://www.elz ero.org";
$url2 = "http://¥elzero.org";
$url3 = "https://elzero.org";
$url4 = "https://elzero.o¥rg";

echo filter_var($url4, FILTER_SANITIZE_URL);

echo "<br>===============<br>";
