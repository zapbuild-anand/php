<?php
$x = array(1, 2, 3, 4, 5);
//var_dump($x);
//delete the value from given position
unset($x[3]);
$x=array_values($x);
print_r($x);

$color = array(4 => 'white', 6 => 'green', 11=> 'red');
//reset the pointer to first index
print("<br>".reset($color));
$color=reset($color);
print_r($color);

$a1=array(1=>"red",2=>"green",3=>"blue",4=>"yellow");
$a2=array(1=>"$");
//remove and replece with new elements
array_splice($a1,0,1,$a2);
echo "<br>";
print_r($a1);

$arr_assoc=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
echo "<br>";
//ascending order by value
asort($arr_assoc);
print_r($arr_assoc);
echo "<br>";
//ascending order by key
ksort($arr_assoc);
print_r($arr_assoc);
echo "<br>";
//descending order by value
arsort($arr_assoc);
print_r($arr_assoc);
echo "<br>";
//descending order by key
krsort($arr_assoc);
print_r($arr_assoc);

$arr_new="78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73";
echo "<br>";
$temp=explode(",",$arr_new);
print_r($temp);
$sum=0;
foreach($temp as $x)
{
    $sum=$sum+$x;
}
echo "<br>Sum : $sum <br>";
$sum=0;
for($i=0;$i<5;$i++)
{
    $sum=$sum+$temp[$i];
}
echo "<br>Sum of first five : $sum";
$sum=0;
for($i=count($temp)-5;$i<count($temp);$i++)
{
    $sum=$sum+$temp[$i];
}
echo "<br>Sum of last five : $sum";

?>