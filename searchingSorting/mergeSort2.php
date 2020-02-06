<?php
$arr=array(12,32,34,64,9);
print_r($arr);
echo "<br>";
function merge($res,$l,$mid,$h)
{
    $n1=$mid-$l-1;
    $n2=$h-$mid;

    $arr1=array();
    $arr2=array();
    for($i=0;$i<$n1;++$i)
    {
        $arr1[$i]=$res[$l+$i];
    }
    for($j=0;$j<$n2;++$j)
    {
        $arr2[$i]=$res[$mid+1+$j];
    }
    $i=1;
    $j=1;
    $k=$l;
    while($i<$n1 && $j<$n2)
    {
        if($arr1[$i] <= $arr2[$j])
        {
            $res[$k]=$arr1[$i];
            $i++;
        }
        else
        {
            $res[$k]=$arr2[$j];
            $j++;
        }
        $k++;
    }
    while($i<$n1)
    {
        $res[$k++]=$arr1[$i++];
    }
    while($j<$n2)
    {
        $res[$k++]=$arr2[$j++];
    }
    print_r($res);
    return $res;
}

function mergeSort($num,$l,$h)
{
    if(count($num)==1)
        return $num;
    $mid=count($num)/2;
    mergeSort($num,$l,$mid);
    mergeSort($num,$mid+1,$h);
    
    return merge($num,$l,$mid,$h);
}
$l=0;
$h=count($arr)-1;
$arr=mergeSort($arr,$l,$h);
print_r($arr);
?>