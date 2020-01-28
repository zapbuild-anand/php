<?php
$x=5;
$y=10;
$res=($x==5&&$y==5);
if($res)
{
    echo "True";
}
else
{
    echo "Not equal";
}
//logical AND check second if ist is true
$res=($x==10 && $y=20);
echo "<br>$y";

//logical AND checks both condition
$res=($x==10 & $y=20);
echo "<br>$y";
?>