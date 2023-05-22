<?php

/* Task of Week 2*/

echo (int) 15.2 + (int) 14.7 + (10.5 + 10.5); // 50
echo '<br>';
echo gettype( (int) ((int)15.2 + (int)14.7 + (10.5 + 10.5)) ); // Integer
echo '<br>';

// =----------------------------------------------------------

// Method one to get type
echo gettype(100);
echo '<br>';

// Method two to get type
echo var_dump(100);
echo '<br>';

// Method three to get type
echo get_debug_type(100);
echo '<br>';

// =------------------------------------------------------------

  // First way
echo <<<"Task"
  Hello "Elzero" \\\\ """ We Love "\$\$PHP"
  Task;

  echo '<br>';
  
  // Second way
  echo <<<'Task'
  Hello "Elzero" \\ """ We Love "$$PHP"
  Task;
  
  echo '<br>';

  // Third Way
  echo 'Hello "Elzero" \\\\ """ We Love "$$PHP"';
  echo '<br>';
  // =------------------------------------------------------------
  
  echo nl2br("We \n Love \n Elzero \n Web \n School");
  echo '<br>';
  
  // =------------------------------------------------------------
  
  echo nl2br('Hello "' . "'Elzero'" . '"
  We Love $Programming$
  Languages Specially "PHP"');
  echo '<br>';
  
  // =-----------------------------------------------------------
  
  $something = "Programming";
  
  echo <<<code
  Hello \PHP\
  We Love $something
  code;
  echo '<br>';

  // =---------------------------------------------------------

  echo (bool)"Hello PHP";
  echo '<br>';
  echo gettype((int)"Hello PHP");
  echo '<br>';

// =----------------------------------------------
  echo '<pre>';
  print_r([
    "Frontend" => [
      "HTML",
      "CSS",
      "JS" => [
        "Vuejs" => [2 => "v2", 3 => "v3"],
        0 => "Reactjs",
        "Svelte"
        ]
      ],
    "Backend" => ["PHP,", "MySQL", "Security"],
    0 => "Git",
    "Github",
    "Testing" => ["Unit Testing", "End To End", "Integration"]
  ]);
  echo '</pre>';