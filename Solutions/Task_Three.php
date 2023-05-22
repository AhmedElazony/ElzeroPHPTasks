<?php

  /* Task Of Week Three*/

  $name = "Elzero Courses";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= $name ?>">
    <title>Welcome To <?= $name ?></title>
  </head>
  <body>
    <h1><?= $name ?></h1>
    <p>Here In <?= $name ?> We Provide Front-End And Back-End Courses</p>
    <hr>
    <div><?= $name ?> Is The What You Need.</div>
    <footer>All Right Reserved To <?= $name ?></footer>
  </body>
</html>
<!-- =----------------------------------------------------------------- -->

<?php

$name = "elzero";
$$name = "Web";


echo '<br>';
echo $$name;
echo '<br>';
echo $elzero;
echo '<br>';
echo "{$$name}";
echo '<br>';
echo "" . $$name;
echo '<br>';
echo <<<task
{$$name}
task;
echo '<br>';

// =---------------------------------------------------------------------

$a = 200;
$b = $a;
$a = 100;

echo $b; // 100
echo '<br>';

// =----------------------------------------------------------------------

echo $_SERVER['DOCUMENT_ROOT'];
echo '<br>';
echo $_SERVER['SERVER_NAME'];
echo '<br>';
echo $_SERVER['SystemRoot'];
echo '<br>';
echo $_SERVER['OPENSSL_CONF'];
echo '<br>';

// =----------------------------------------------------------------------

// Reserved Words
/*
clone
break
function
define
echo
print
include
require
switch
for
foreach
*/

// =----------------------------------------------------------------------

echo __LINE__;
echo '<br>';
echo __FILE__;
echo '<br>';
echo __DIR__;