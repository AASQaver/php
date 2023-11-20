
<?php
$cookie_name= "lpu";
$cookie_value = "student";
setcookie($cookie_name,$cookie_value,time() + (3600 * 1), "/");
?>
<html>
<head>
<title>Document</title>
</head>
<body>
<?php
if(!isset($COOKIE[$cookie_name])){
	echo "Cookies is".$cookie_name."is not set";
}
else{
	echo "cookies".$cookie_name."is set<br>";
	echo "value is ".$_COOKIE[$cookie_value];}
?>
</body>