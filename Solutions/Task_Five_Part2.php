<?php



  $index = 10;

  while ($index >= 1) {
    echo "$index<br>";
    $index--;
  }

  echo "=====================<br>";
  // =-----------------------------------------------------------
  
  $index = 0;
  while ($index <= 20) {
    if ($index % 2 == 0 && $index != 0) {
      echo "$index<br>";
    }
    $index++;
  }

  echo '<br>';
  
  $index = 0;
  do {
    if ($index % 2 == 0 && $index != 0) {
      echo "$index<br>";
    }
    $index++;
  } while ($index <= 20);

  echo '<br>';

  for ($index = 0; $index <= 20; $index++) {
    if ($index % 2 == 0 && $index != 0) {
      echo "$index<br>";
    }
  }
  
  echo "=====================<br>";
  // =-----------------------------------------------------------
  
  $num = 2;
  $n = 3;
  while ($num < 520) {
    // Your Code Here
    if ($num == 2) $num = 1;
    echo "$num<br>";
    $num += $n;
    $n *= 2;
  }
  
  echo "=====================<br>";
  // =-----------------------------------------------------------

  $start = 10;
  $end = 0;
  $stop = 3;
  
  for ($i = $start; $i >= 3; $i--) {
    if ($i < 10) {
      echo $end . $i . '<br>';
    } else {
      echo $i . '<br>';
    }
  }

  echo "=====================<br>";
  // =-----------------------------------------------------------

  $start = 0;
  $mix = [1, 2, 3, "A", "B", "C", 4];

  for ($i = 1; $i < count($mix); $i++) {
    if (gettype($mix[$i]) === "integer") {
      echo $mix[$i] . '<br>';
    }
  }

  echo "=====================<br>";
  // =-----------------------------------------------------------

  $money = ["Ahmed" => 100, "Sayed" => 150, "Osama" => 100, "Maher" => 250];

  foreach ($money as $name => $value) {
    echo "The Name Is $name And I Need $value Pound From Him<br>";
  }

  echo "=====================<br>";
  // =-----------------------------------------------------------

  $mix = [1, 2, "A", "B", "C", 3, 4];
  $letters = 0;
  $nums = 0;
  foreach ($mix as $item) {
    if (gettype($item) === "integer") {
      $nums++;
      echo $item . '<br>';
    } else {
      $letters++;
    }
  }

  echo "$nums Numbers Printed<br>";
  echo "$letters Letters Ignored<br>";

  echo "=====================<br>";
  // =-----------------------------------------------------------

  $nums = [1, 13, 12, 20, 51, 17, 30];

  foreach ($nums as $num) {
    if ($num % 2 == 0) {
      echo $num / 2 . '<br>';
    }
  }

  echo "=====================<br>";
  // =-----------------------------------------------------------
  
  $help_num = 3;
  $nums = [4, 5, 6, 1, 2, 3];
  $names = ["Ahmed", "Sayed", "Osama", "Mahmoud", "Gamal"];
  
  for ($i = $nums[$help_num]; $i < $help_num; $i++) {
    echo $names[$i] . '<br>';
  }

  echo "=====================<br>";
  // =-----------------------------------------------------------

  $help_num = 4;
  $nums = [2, 4, 5, 6, 10];

  foreach ($nums as $num) {
    echo "$num + $nums[$help_num] = " . $num + $nums[$help_num] . "<br>";
    $help_num--;
  }