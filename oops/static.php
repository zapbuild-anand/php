<?php
class test
{
	static $x;
	public static function show()
	{
		test::$x=10;
	}
}
test::show();
echo "Value of x : ".test::$x;
?>