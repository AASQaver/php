<?php
$cookieName ="visited";
if (isset($_COOKIE[$cookieName]))
{
echo "old visited";
}
else
{
echo "new ";
}
?>