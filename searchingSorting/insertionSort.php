<?php
$arr=array(8,6,4,12,2,13,3);
for($i=1;$i<count($arr);$i++)
{
    $key=$arr[$i];
    $j=$i-1;
    while($j>=0 && $arr[$j] > $key)
       {
           $arr[$j+1]=$arr[$j];
           $j=$j-1;
       }
    $arr[$j+1]=$key;
}
print_r($arr);
?>