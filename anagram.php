<?php
$str1=array('a','n','a','n','d');
$str2=array('d','n','a','a','a');
$c1=0;
$c2=0;
$r=0;
if(count($str1)==count($str2))
{
    foreach($str1 as $x)
    {
        foreach($str1 as $y)
        {
            if($x==$y)
            {
                $c1++;
            }   
        }
        foreach($str2 as $y)
        {
            if($x==$y)
            {
                $c2++;
            }   
        }
        if($c1!=$c2)
        {
            $r=1;
        }
        $c1=0;
        $c2=0;
    }
    if($r==0)
    {
        echo "Anagram";
    }
    else{
        echo "Not Anagram";
    }
    
}
else
echo "Not";
?>