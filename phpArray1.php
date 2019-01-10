<?php
$n=range(1,42);
shuffle($n);
for ($x=0; $x< 6; $x++)
{
echo $n[$x].' ';
}
echo "\n"
?>