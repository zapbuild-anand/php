<?php
//to test autoload magic method
class testMagic
{
	function show()
	{
		echo "Autoload called"."<br>";
	}
	public static function disp()
	{
		echo "Autoload for Static function ";
	}
}
?>