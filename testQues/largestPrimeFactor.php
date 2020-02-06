<?php
function isPrime($n)
{
    $c=0;
    for($i=2;$i<=sqrt($n);$i++)
    {
        if($n%$i==0)
        {
            $c++;
        }
    }
    if($c==0)
        return true;
    else
        return false;
}
$number=99967;
$res=1;
for($i=1;$i<=$number;$i++)
{
    if($number%$i==0)
    {
        if(isPrime($i))
        {
            $res=$i;
            $number=$number/$i;
        }
    }
}
echo "Largest prime : ".$res;
?>