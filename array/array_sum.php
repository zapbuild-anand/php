<?php
$arr_new="78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73";
echo "<br>";
//convert string to array
$temp=explode(",",$arr_new);
print_r($temp);
// $sum=0;
// foreach($temp as $x)
// {
//     $sum=$sum+$x;
// }
$sum=array_sum($temp);
echo "<br>Sum : ".$sum/count($temp)."<br>";
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