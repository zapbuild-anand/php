<?php
function interPolation($arr,$value)
{
    $len=count($arr);
    $lo=0;
    $hi=$len-1;
    $pos= -1;
    $delta=-1;
    while($lo<=$hi && $value>=$arr[$lo] && $value<=$arr[$hi])
    {
        $delta=($value-$arr[$lo])*($hi-$lo) / ($arr[$hi]-$arr[$lo]);
        $pos= $lo + floor($delta);
        if($arr[$pos]==$value)
            return $pos;
        if($arr[$pos]<$value)
            $lo=$pos+1;
        else
            $hi=$pos-1;
    }
    return -1;

}
$arr=array(2,8,16,17,19,50,55,67,89);
$x=55;
echo "Position of $x is : ".interPolation($arr,$x);
?>