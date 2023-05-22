<?php

echo "C: " . round(disk_total_space("C:") / 1024 / 1024 / 1024 / 1024, 2) . ' TeraBytes<br>';

echo "F: " . round(disk_total_space("F:") / 1024 / 1024 / 1024 / 1024, 2) . ' TeraBytes<br>';

echo "<br>===============<br>";
// =-----------------------------------------------------------------=

$fileSize = filesize("F:\\Anime\\Hunter X Hunter\\[720]-Hunter x Hunter Ep002 [720p].mp4");

echo 'Size In MegaBytes Is: ' . round($fileSize / 1024 ** 2) . '<br>';

echo 'Size In KiloBytes Is: ' . round($fileSize / 1024) . '<br>';

echo "<br>===============<br>";
// =-----------------------------------------------------------------=

// mkdir("Programming/PHP", 0711, true);

function removeDir($dirName){
  $dirPath = realpath(__DIR__ . '\\' . $dirName);

  if (! file_exists($dirPath)) {
    return null;
  }

  if (! is_dir($dirPath)) {
    return null;
  }
  
  $dirs = scandir($dirPath);
  
  foreach ($dirs as $dir) {
    if (! is_dir("{$dirPath}\\{$dir}")) {
      unlink("{$dirPath}\\{$dir}");
    }
  }
  
  rmdir($dirPath);
  return 'Directory ' . pathinfo($dirPath, PATHINFO_FILENAME) . ' Removed';
}

echo removeDir('Programming/PHP') ?? 'Directory Not Exists!';
echo '<br>';
echo removeDir('Programming') ?? 'Directory Not Exists!';


echo "<br>===============<br>";
// =-----------------------------------------------------------------=

function change_permissions($fileName)
{
  $filePath = realpath(__DIR__ . '\\' . $fileName);
  
  if (! file_exists($filePath)){
    return 'File Not Exists';
  }

  if (is_dir($filePath)) {
    return 'This Is A Directory And Only Files Allowed';
  }

  if (pathinfo($filePath, PATHINFO_EXTENSION) !== 'txt') {
    return 'File Extension Is Not Txt';
  }

  chmod($filePath, 0700);
  clearstatcache();
  return 'Permissions Changed';
}

// $handle = fopen("new", "w+");
// mkdir("news", 0777);
echo change_permissions('new.txt') . '<br>'; // Permissions Changed
echo change_permissions('new.docs') . '<br>'; // File Extension Is Not Txt
echo change_permissions('new') . '<br>'; // This Is Directory And Only Files Allowed
// fclose($handle);

echo "<br>===============<br>";
// =-----------------------------------------------------------------=

$file = realpath('index.php');

echo pathinfo($file, PATHINFO_BASENAME) . '<br>'; // index.php
echo basename($file) . '<br>'; // index.php
echo pathinfo($file, PATHINFO_FILENAME) . '.' . pathinfo($file, PATHINFO_EXTENSION) . '<br>'; // index.php
echo glob(substr($file, -9))[0] . '<br>'; // index.php
// echo (new SplFileInfo($file))->getFileName();

echo "<br>===============<br>";
// =-----------------------------------------------------------------=

$handle = fopen('new.txt', 'r+');

echo fgets($handle) . fgets($handle) . '<br>';
rewind($handle); // reset the pointer.

echo fread($handle, 24) . '<br>';
rewind($handle); // reset the pointer.

while (ftell($handle) <= 25) {
  echo fgets($handle);
}
echo '<br>';
// echo mb_strlen("Hello Elzero Web\r\nSchool"); // 24
fclose($handle);

echo file_get_contents('new.txt', false, null, 0, 24);

echo "<br>===============<br>";
// =-----------------------------------------------------------------=

file_put_contents('new.txt', "Hello Elzero Web\r\nSchool");

echo "<br>===============<br>";
// =-----------------------------------------------------------------=