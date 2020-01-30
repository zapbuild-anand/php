<?php
$str1=array('a','a','a','n','d');
foreach($str1 as $x)
    {
        foreach($str1 as $y)
        {
            if($x==$y)
            {
                $c1++;
            }   
        }
        echo "$x is $c1 times \n";
        $c1=0;
    }
?>