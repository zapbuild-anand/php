<?php
$arr=array(1,2,16,62,4,5,42,33,55);
$res=array();
$i=0;
while($arr[$i]!=42)
{
    if($arr[$i]<42)
        $res[$i]=$arr[$i];
    $i++;
}
print_r($res);
?>