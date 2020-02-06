<?php
$num=1000;
for($i=1;$i<$num;$i++)
{
    $s=0;
    for($j=1;$j<$i;$j++)
    {
        if($i%$j==0)
        {
            $s=$s+$j;
        }
    }
    if($s==$i)
    {
        echo $i." ";
    }
}
?>