<?php
class test
{
	public function show()
	{
		echo "Hello mate";
	}

}
$ar=array();
$ar[]=new test();
$ar[]=new test();
foreach($ar as $x)
{
	$x->show();
}
?>