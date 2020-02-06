<?php
$x=array(1,1,0,0,0,1,0,0,0,0,0,0,1,0,0,0,0,0,0,1,0,0,0,1);
$res=0;
$c=0;
for($i=0;$i<count($x)-1;$i++)
{
    if($x[$i]==1 && $x[$i+1]==0)
    {
        //echo $x[$i];
        $j=$i+1;
        while($x[$j]==0)
        {    
            $c++;
            $j++;
        }
        $i=$j-1;
        //echo "\n$i ";
    }
    if($c>$res)
        $res=$c;
    $c=0;
}
echo "Largest Binary Gap : ".$res;
?>