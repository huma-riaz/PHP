<?php

setcookie("Huma", "ABC Town, Karachi", time() + 86400, "/");
setcookie("Kiran", "admin", time() + 172800, "/");
setcookie("Bilal", "City 123", time() + 345600 , "/");
setcookie("Hassan", "Pakistan", time() + 600, "/");

echo $_COOKIE['Huma'];
echo '<br>';
echo $_COOKIE['Bilal'];


setcookie("Bilal", "City 123", time() - 345600 , "/");

?>