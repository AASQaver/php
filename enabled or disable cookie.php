<?php
setCookie("tet", time() +3600, '/');
?>
<html>
<body>
<?php
if(count($_COOKIE) >0){
echo "Cookies enabled";
}
else
{
echo "disabled";
}
?>
</body>
</html>
