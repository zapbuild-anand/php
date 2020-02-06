<?php
$arr=array(2,36,5,7,8,4,11,9,13);
$first=0;
$second=0;
$third=0;
for($i=0;$i<count($arr);$i++)
{
	//if array element is is greater than first 
	if($arr[$i]>$first)
	{
		$third=$second;
		$second=$first;
		$first=$arr[$i];
	}
	//if array element is is greater than second 
	else if($arr[$i]>$second)
	{
		$third=$second;
		$second=$arr[$i];
	}
	//if array element is is greater than third 
	else if($arr[$i]>$third)
	{
		$third=$arr[$i];
	}
	
}
echo "Third highest number : ".$third."<br>";
?>