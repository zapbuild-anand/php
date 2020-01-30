<?php
//function with argument and return
function add1($x,$y)
{
    return $x+$y;
}
//function with argument and no return
function add2($x,$y)
{
    echo " Sum : ".($x+$y);
}
//function with no argument and return
function add3()
{
    $x=200;
    $y=50;
    return $x+$y;
}
//function with no argument and no return
function add4()
{
    $x=20;
    $y=50;
    echo " Sum : ".($x+$y);
}
echo " Sum : ".add1(20,100);
add2(520,10);
echo " Sum : ".add3();
add4();
?>