<?php
$xml= simplexml_load_file("note.xml") or 'E:\XAMPP\htdocs\PHP'
echo ("Error: cannot create object");

echo $xml->to . "<br>";
echo $xml->from . "<br>";

echo $xml->heading . "<br>";
echo $xml->body . "<br>";