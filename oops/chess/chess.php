<?php
require_once "Chess.php";
//object of Chess class
$obj=new Chess();
//no of rows and cols
$size=8;
echo '<div style="border:1px solid black;width:395px;">';
for($i=1;$i<=$size;$i++)
{
	for($j=1;$j<=$size/2;$j++)
	{
		//if line no is even
		if($i%2==0)
		{
			echo $obj->white(),$obj->black();
		}
		//if line is odd
		else
			echo $obj->black(),$obj->white();
	}
	echo "<br>";
}
echo '</div>';
?>