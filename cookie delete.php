<?php
$cookie_name= "user";
$cookie_value = "abc";
setcookie("user", "", time() -3600);
?>
<html>
<head>
<title>Document</title>
</head>
<body>
<?php

	echo "cookie 'user' is deleted.";
	
?>
</body>
</html>

