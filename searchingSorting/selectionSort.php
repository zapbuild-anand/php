<?php
$arr=array(12,32,34,64,9);
for($i=0;$i<count($arr);$i++)
{
    $low=$i;
    for($j=$i;$j<count($arr);$j++)
    {
        if($arr[$j] < $arr[$low])
        {
            $low=$j;
        }
    }
        $temp=$arr[$i];
        $arr[$i]=$arr[$low];
        $arr[$low]=$temp;
    
}
print_r($arr);
?>