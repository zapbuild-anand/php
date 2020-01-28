<?php
$arr1 = array(array(77, 87), array(23, 45));
$arr2 = array("anand", "kumar");
function mergeArray($x,$y)
{
    $temp=array();
    $temp[]=$x;
    if(is_scalar($y))
    {
        $temp[]=$y;
    }
    else
    {
        foreach($y as $k=>$v)
        {
            $temp[]=$v;
        }
    }
    return $temp;
}
    echo "<br>";
    $res=array_map('mergeArray',$arr2,$arr1);
    print_r($res);
?>