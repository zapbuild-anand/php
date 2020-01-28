<?php
function oddEven($x)
{
    if($x%2==0)
        return "Even";
    else
        return "Odd";
}
$number=122;
echo "$number is ".oddEven($number);

?>