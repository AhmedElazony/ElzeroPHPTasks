<?php

setcookie("site[color]", "blue", strtotime("+2 months, +5 days"));
setcookie("site[font]", "swat", strtotime("+2 months, +5 days"));
setcookie("site[layout]", "boxed", strtotime("+2 months, +5 days"));

echo "<br>===============<br>";
// =-----------------------------------------------------------------=

echo '<pre>';
print_r($_COOKIE);
echo '</pre>';

echo "Your Color Is " . $_COOKIE['site']['color'] . " And Your Font Is " . $_COOKIE['site']['font'];


echo "<br>===============<br>";
// =-----------------------------------------------------------------=

setcookie("site[layout]", "boxed", strtotime("-1 minute"));

echo "<br>===============<br>";
// =-----------------------------------------------------------------=

setcookie("site[color]", "blue");
setcookie("site[font]", "swat");