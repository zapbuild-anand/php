<?php
class test
{
	private $name;
	private $id;
	function __construct($name,$id)
	{
		$this->name=$name;
		$this->id=$id;
	}
	function __toString()
	{
		return "Name : ".$this->name." and "." ID : ".$this->id;
	}
	public function __clone()
	{
		echo "Clone made "."<br>";
	}
}
//object of class test
$t1=new test("Anand","zap321");
$t2=new test("Ankit","zap322");
//to make copy of object using clone
$t2=clone $t1;
//calls the toString method
echo $t2;
?>