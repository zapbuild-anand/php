<?php
$arr=array(array(1,2,2,3),array(3,4,5,6),array(30,40,8,9),array(4,5,6,7));
$s1=0;
$s2=0;
for($i=0;$i<count($arr);$i++)
{
    for($j=0;$j<count($arr[$i]);$j++)
    {
        if($i==$j)
        {
            $s1=$s1+$arr[$i][$j];
        }
        if(($i+$j)==(count($arr)-1))
        {
            $s2=$s2+$arr[$i][$j];
        }
    }
}
echo "Sum : ".$s1." ".$s2;
if($s1<$s2)
    echo "\n Diff : ".($s2-$s1);
else
    echo "\n Diff : ".($s1-$s2);
?>