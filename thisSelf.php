<?php
//use of this,self,scope resolution,static function and variable
class test
{
	private $name;
	private $id;
	public static $age; //static variable
	function __construct($name,$id)
	{
		$this->name=$name;	//this keyword used to indicate local variable
		$this->id=$id;
	}
	public function show()
	{
		echo "Name : ".$this->name."<br>";
		echo "ID : ".$this->id."<br>";
		echo "Age : ".self::$age."<br>"; //self is used to access local static variable

	}
	public static function change() //static function
	{
		self::$age=25;
		//$this->name="Ankit";			//error static function only use static variable
		//echo "New name :".$this->name."<br>";		//error
		echo "New age : ".self::$age."<br>"; //static variable inside static function
	}
}
$t1=new test("Anand","zap321");
test::$age=23; //static variable assignment outside class by class name name and scope resolution operator
$t1->show();
test::change(); //static function call
?>