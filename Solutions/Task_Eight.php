<?php

$friends = [
  "AG" => "Ahmed Gamal",
  "OM" => "Osama Mohamed",
  "MG" => "Mahmoud Gamal",
  "AS" => "Ahmed Samy",
  "FA" => "Farid Ahmed",
  "SM" => "Sayed Mohamed"
];

echo '<pre>';
print_r(array_chunk(array_change_key_case($friends, CASE_LOWER), 2, preserve_keys: true));
echo '</pre>';

echo "<br>===============<br>";
// =-----------------------------------------------------------------=

$codes = ["H", "C", "J"];
$means = ["HTML", "CSS", "JavaScript"];

echo '<pre>';
print_r(array_combine($codes, $means));
echo '</pre>';

echo "<br>===============<br>";
// =-----------------------------------------------------------------=

$friends = [
  "Ahmed Gamal" => "AG",
  "Osama Mohamed" => "OM",
  "Mahmoud Gamal" => "MG",
  "Ahmed Samy" => "AS"
];

echo '<pre>';
print_r(array_reverse(array_change_key_case(array_flip($friends), CASE_LOWER)));
echo '</pre>';

echo "<br>===============<br>";
// =-----------------------------------------------------------------=

$nums = [10, 20, 30];

echo array_reduce($nums, fn($c, $i) => $c + $i);
echo '<br>';
echo array_sum($nums);

echo "<br>===============<br>";
// =-----------------------------------------------------------------=

$nums = [5, 10, 20, 5, 30, 40];

function sum_array($nums)
{
  $result = 0;
  foreach($nums as $num) {
    $result += $num;
  }
  return $result;
}

echo sum_array(array_map(
  callback: function ($num) {
    $newNums = 0;
    if ($num !== 5) 
      $newNums = $num;
    return $newNums;
  },
  array: $nums));

echo "<br>===============<br>";
// =-----------------------------------------------------------------=

$chars = ["A", "B", "C", "D", "E"];
$char = "@@";
$zero = 0;

echo '<pre>';
print_r(array_pad($chars, count($chars) + count($chars), $char[$zero]));
echo '</pre>';

echo "<br>===============<br>";
// =-----------------------------------------------------------------=

$names = ["Osama", "Ahmed", "Sayed", "Mahmoud", "Ali"];

next($names);
next($names);
echo current($names) . "<br>"; // "Sayed"

end($names);
echo current($names) . "<br>"; // "Ali"

reset($names);
echo current($names) . "<br>"; // "Osama"

end($names);
prev($names);
echo current($names) . "<br>"; // "Mahmoud"

echo "<br>===============<br>";
// =-----------------------------------------------------------------=

$chars = ["A", "B", "C"];

$chars[] = "D";
array_push($chars, "D");
$chars[count($chars)] = "D";
array_splice($chars, 3, 0, "D");
$newChars = array_merge($chars, ["D"]);

echo '<pre>';
print_r($chars);
echo '</pre>';

echo "<br>===============<br>";
// =-----------------------------------------------------------------=

$nums = [1, 2, 3, 4, 5, 6];

echo '<pre>';
print_r(array_slice($nums, -5, -2));
echo '</pre>';

echo "<br>===============<br>";
// =-----------------------------------------------------------------=

$mix = [1, 2, 3, "A", "B", "C", 7, 8, 9];
$nums = [4, 5, 6];

array_splice($mix, 3, 3, $nums);

echo '<pre>';
print_r($mix);
echo '</pre>';

echo "<br>===============<br>";
// =-----------------------------------------------------------------=

$arr = ["A", "B", "C", "D", "E"];

function length(array $arr) 
{
  $result = 0;
  foreach ($arr as $item) {
    $result++;
  }
  return $result;
}

echo length($arr);

echo "<br>===============<br>";
// =-----------------------------------------------------------------=

$nums = [11, 2, 10, 7, 20, 50];

function arr_sum(array $nums)
{
  $result = 0;
  foreach($nums as $num) {
    $result += $num;
  }
  return $result;
}

echo arr_sum($nums);

echo "<br>===============<br>";
// =-----------------------------------------------------------------=

$nums = [10, 100, -20, 50, 30];

function max_num(array $nums)
{
  $max = PHP_INT_MIN;
  foreach ($nums as $num) {
    if ($num > $max) {
      $max = $num;
    }
  }
  return $max;
}

echo max_num($nums);

echo "<br>===============<br>";
// =-----------------------------------------------------------------=

$nums = [10, 100, -20, 50, 30];

function min_num(array $nums)
{
  $min = PHP_INT_MAX;
  foreach ($nums as $num) {
    if ($num < $min) {
      $min = $num;
    }
  }
  return $min;
}

echo min_num($nums);

echo "<br>===============<br>";
// =-----------------------------------------------------------------=

$chars = ["o", "r", "e", "z", "l", "E"];

function array_reverse_to_string(array $arr)
{
  $str = "";
  for ($i = array_key_last($arr); $i >= 0; $i--) {
    $str .= $arr[$i];
  }
  return $str;
}

echo array_reverse_to_string($chars);

echo "<br>===============<br>";
// =-----------------------------------------------------------------=

$mix = ["A", "C", "B", 1, 100, 3, 2, 6, 5, 7];

function filter(array $arr)
{
  $items = [];
  foreach($arr as $item) {
    if (gettype($item) == "string") continue;
    if ($item % 2 === 0) continue;
    $items[] = $item;
  }
    
  sort($items);
  return $items;
}

echo '<pre>';
print_r(filter($mix));
echo '</pre>';

echo "<br>===============<br>";
// =-----------------------------------------------------------------=

$nums = [1, 2, 3, 4, 5, 6];

// Every Time The Array Elements Will Be Shuffled

function array_shuffle(array $arr)
{
  $items = [];
  foreach ($arr as $item) {
    array_splice($items, rand(0, 5), 0, $item);
  }
  return $items;
}

echo '<pre>';
print_r(array_shuffle($nums));
echo '</pre>';

echo "<br>===============<br>";
// =-----------------------------------------------------------------=

$title = "E&z\$r0 W\$b Sch00&";

$str = str_replace(['&', '$', '0'], ['l', 'e', 'o'], $title, $count);
echo $str . '<br>';
echo $count;