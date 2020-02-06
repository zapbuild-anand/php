<?php
$num=128;
$i=0;
$res=array();
do{
    if($num%2==0)
        $res[$i++]=0;
    else
        $res[$i++]=1;
    $num=floor($num/2);
}
while($num!=1);
$res[$i-1]=1;
for($i=count($res)-1;$i>=0;$i--)
{
    echo $res[$i];
}
?>