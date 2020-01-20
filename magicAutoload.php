<?php
function __autoload($file)
{
	require "./".$file.".php";
}
//creating object of testMagic class using autoload
$obj=new testMagic;
$obj->show();
//calling static method of testMagic class
testMagic::disp();

?>