<?php

date_default_timezone_set("Asia/Riyadh");

echo date_default_timezone_get() . '<br>';

echo date("D, d M y - h:i:s a") . '<br>';

echo date("l, d F Y - h:i:s A") . '<br>';

echo "<br>===============<br>";
// =-----------------------------------------------------------------=

date_default_timezone_set("Africa/Cairo");

$date = date_create("2005-10-02");

date_add($date, date_interval_create_from_date_string("15 hour 15 minutes 15 seconds"));

echo date_default_timezone_get() . '<br>';

echo date_format($date, "Y, F, l, 'dS' H:i:s") . '<br>';

echo "<br>===============<br>";
// =-----------------------------------------------------------------=

date_default_timezone_set("Africa/Cairo");

$date = strtotime("1990-10-01");

$days = round($date / 60 / 60 / 24, 1);
$years = round($date / 60 / 60 / 24 / 365, 1);

echo "From Epoch Time Till 1990-10-01 Approximately {$days} Days<br>";
echo "From Epoch Time Till 1990-10-01 Is Approximately {$years} Years<br>";

echo "<br>===============<br>";
// =-----------------------------------------------------------------=

date_default_timezone_set("Africa/Cairo");

$date = date_create("1990-10-01");
$date2 = date_create("1970-01-01");

$diff = date_diff($date, $date2);

echo "From Epoch Time Till 1990-10-01 Approximately {$diff->days} Days<br>";
echo "From Epoch Time Till 1990-10-01 Is Approximately {$diff->y} Years<br>";

echo "<br>===============<br>";
// =-----------------------------------------------------------------=

date_default_timezone_set("Africa/Cairo");

echo time() . "<br>"; // 1684583537

echo getdate()[0] . '<br>'; // 1684583537

echo strtotime("now") . '<br>'; // 1684583537

echo date_create()->getTimestamp() . '<br>'; // 1684583537
