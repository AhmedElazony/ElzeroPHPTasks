<?php

$a = 100;
$b = 200;
$c = 100;

/*
  Check That:
  Variable "b" Larger Than Variable "a"
  Variable "a" Identical To Variable "c"
  Variable "a" Plus Variable "c" Identical To Variable "b"
*/

if ($b > $a && $a === $c && $a + $c === $b) {
  echo "Yes";
}
echo "<br>";

// =-----------------------------------------------------------

$a = 200;
$b = 200;
$c = 100;

if ($a > $b) {
  echo "A Is Larger Than B";
} else if ($a > $c) {
  echo "A Is Larger Than C";
} else {
  echo "A Is Not Larger Than B Or C";
}

echo "<br>";

// =-----------------------------------------------------------

$admins = ["Osama", "Ahmed", "Sayed"];

echo <<<"form"
<form action="" method="POST">
  <input type="text" name="user">
  <input type="submit" value="Send">
</form>
form;

if ($_SERVER['REQUEST_METHOD'] === "POST") {

  echo "The Request Method Is Post And Username Is " . $_POST['user'] . "<br>";

  if ($_POST['user'] === $admins[0] || $_POST['user'] === $admins[1] || $_POST['user'] === $admins[2]) {
    echo "This Username " . $_POST['user'] . " Is Admin";
  }

} else {
  echo "The Request Method is GET";
}
echo "<br>";

// =-----------------------------------------------------------

$a = 30;
$b = 20;
$c = 10;

echo ((($a + $b === $c) ? "A + B = C" : ($a + $c === $b)) ? "A + C = B" : ($b + $c === $a)) ? "B + C = A" : "The End";
echo '<br>';

// =-----------------------------------------------------------

$name = "Osama";
$age = 40;
$country = "Egypt";


echo ($age > 18) ? "the Age Is Good To Go<br>" . ((gettype($name) === "string") ? "The Name Is Good To Go<br>" : "") . (($country === "Egypt") ? "The Country Is Good To Go<br>" : "") : "";

// =-----------------------------------------------------------

$genre = "Hack And Slash";

switch ($genre) {
  case "RPG":
    echo "I Recommend Ys Games";
    break;
  case "Hack And Slash":
    echo "I Recommend Castlevania Games";
    break;
  case "FPS":
    echo "I Recommend Uncharted Games";
    break;
  case "Platform":
    echo "I Recommend Megaman Games";
    break;
  case "Puzzle":
    echo "I Recommend Megaman Games";
    break;
  default:
    echo "I Recommend Shadow Of Mordor And Shadow Of War";
    break;
}
echo '<br>';

// =-----------------------------------------------------------

$num_one = 23;
$num_two = 5;
$op = "+";

switch ($op) {
  case "+":
    echo $num_one + $num_two;
    break;
  case "-";
    echo $num_one - $num_two;
    break;
  case "*":
    echo $num_one * $num_two;
    break;
  case "/":
    echo $num_one / $num_two;
    break;
  default:
    echo "Unknown Operator";
    break;
}
echo '<br>';

// =-----------------------------------------------------------

$day = "Sat";

if ($day === "Sat" || $day === "sun" || $day === "Mon")
  echo "We Are Open All The Day";
else if ($day === "Tue" || $day === "Wed")
  echo "We Are Open From 08:12";
else if ($day === "Tue" || $day === "Fri")
  echo "We Are Closed";
else
  "Unknown Day";

// =-----------------------------------------------------------