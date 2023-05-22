<?php

  function greeting($name, $gender = "") 
  {
    if ($gender === "Male") {
      echo "Hello Mr $name";
    } else if ($gender === "Female") {
      echo "Hello Miss $name";
    } else {
      echo "Hello $name";
    }
  }

  echo greeting("Osama", "Male"); // Hello Mr Osama
  echo greeting("Eman", "Female"); // Hello Miss Eman
  echo greeting("Sameh"); // Hello Sameh

  echo "<br>=====================<br>";
  // =-----------------------------------------------------------
  
  function get_arguments(...$args) 
  {
    foreach ($args as $arg) {
      echo $arg . " ";
    }
    echo "<br>";
  }
  
  echo get_arguments("Hello", "Elzero", "Web", "School"); // Hello Elzero Web School
  echo get_arguments("I", "Love", "PHP"); // I Love PHP
  
  
  echo "<br>=====================<br>";
  // =-----------------------------------------------------------

  function sum_all(...$nums)
  {
    $result = 0;
    
    foreach($nums as $num) {
      if ($num === 5) continue;
      if ($num === 10) $num = 20;
      $result += $num;
    }

    return $result;
  }

  echo sum_all(10, 12, 5, 6, 6, 10) . '<br>'; // 64
  echo sum_all(5, 10, 5, 10) . '<br>'; // 40

  echo "<br>=====================<br>";
  // =-----------------------------------------------------------

  function multiply(...$nums) 
  {
    $result = 1;
    foreach ($nums as $num) {
      if (gettype($num) == "string") continue;
      if (gettype($num) == "double") $num = (int)$num;

      $result *= $num;
    }

    return $result;
  }

  echo multiply(10, 20) . '<br>'; // 200
  echo multiply("A", 10, 30) . '<br>'; // 300
  echo multiply(100.5, 10, "B") . '<br>'; // 1000

  echo "<br>=====================<br>";
  // =-----------------------------------------------------------

  function check_status($a, $b, $c) {
    $args = [$a, $b, $c];
    $name = "";
    $age = 0;
    $status = false;
    
    foreach ($args as $arg) {
      if (gettype($arg) == 'string') $name = $arg;
      else if (gettype($arg) == 'integer') $age = $arg;
      else $status = $arg;
    }
  
    echo "Hello $name, Your Age Is $age, " . ($status === true ? "You Are" : "You Are Not") . " Available For Hire";
    echo '<br>';
  }
  
  
  echo check_status("Osama", 38, true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
  echo check_status(38, "Osama", true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
  echo check_status(true, 38, "Osama"); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
  echo check_status(false, "Osama", 38); // "Hello Osama, Your Age Is 38, You Are Not Available For Hire"

  echo "<br>=====================<br>";
  // =-----------------------------------------------------------

  function calculate($firstNum, $secondNum, $operation = "add")
  {
    if ($operation == "add" or $operation == "a") {
      return $firstNum + $secondNum;
    } else if ($operation == "subtract" or $operation == "s") {
      return $firstNum - $secondNum;
    } else if ($operation == "multiply" or $operation == "m") {
      return $firstNum * $secondNum;
    } else {
      return "This Operation Doesn't Exists.";
    }
  }

echo calculate(10, 20) . '<br>'; // 30
echo calculate(10, 20, "a") . '<br>'; // 30
echo calculate(10, 20, "s") . '<br>'; // -10
echo calculate(10, 20, "subtract") . '<br>'; // -10
echo calculate(10, 20, "multiply") . '<br>'; // 200
echo calculate(10, 20, "m") . '<br>'; // 200

  echo "<br>=====================<br>";
  // =-----------------------------------------------------------

  function calculates(int $num_one, int $num_two) : float {
    return $num_one + $num_two;
  }
  
  echo calculates(20, 10); // 30
  echo gettype(calculates(20, 10)); // Double

  echo "<br>=====================<br>";
  // =-----------------------------------------------------------

  $message = "Hello";

  $Hello = fn($name) => "$message $name";

  echo $Hello("Osama") . '<br>'; // Hello Osama

  echo "<br>=====================<br>";
  // =-----------------------------------------------------------

  $greet = function($name) {
    return "Greetings $name";
  };

  $greets = fn($name) => "Greetings $name";

  echo $greet("Osama") . '<br>'; // Greetings Osama
  echo $greets("Ahmed") . '<br>'; // Greetings Ahmed

  echo "<br>=====================<br>";
  // =-----------------------------------------------------------
  