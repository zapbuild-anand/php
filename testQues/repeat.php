<?php
$str="shivshankarprasad";
$c=1;
for($i=0;$i<strlen($str);$i++)
{
    if($str[$i]!="*")
    {
        for($j=$i+1;$j<strlen($str);$j++)
        {
            if($str[$i]==$str[$j])
            {
                $str[$j]="*";
                $c++;
            }
        }
        echo $str[$i]." $c times \n";
        $c=1;
    }
}
print_r($str);
?>