
//encrypted cookie 

<?php


$CookieName = "my_cookie";
$CookieValue = "E";
$expirationTime = time() +3600;
$secureOnly = true;
setcookie($CookieName, $CookieValue, $expirationTime, "/", "",
$secureOnly, true);
echo "Cookie 'my_cookie' is secure";
?>
