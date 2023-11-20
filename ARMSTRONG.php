<?php

function armstrong_number ($num)
{
$s1=strlen($num);

$sum = 0;

$num= (string) $num;

for ($i =0; $i < $s1; $i++)
{

$sum= $sum + pow((string)$num[$i],$sl);

if((string) $sum == (string)$num);
{
return "True"

else{
return "False";
}
echo "    uuii " .armstrong_number(153);
echo "    uuii " .armstrong_number(21);
echo "    uuii " .armstrong_number(4587);