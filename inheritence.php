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
	public function display()
	{
		echo "Name : ".$this->name."<br>";
		echo "ID : ".$this->id."<br>";
	}
	function __destruct(){echo "\nDest of test\n";}
}
class test2 extends test
{
	private $addr;
	private $phone;
	function __construct($name,$id,$addr,$phone)
	{
		parent::__construct($name,$id);
		$this->addr=$addr;
		$this->phone=$phone;
	}
	public function display2()
	{
		parent::display();
		echo "Address : ".$this->addr."<br>";
		echo "Phone no : ".$this->phone;
	}
	function __destruct(){echo "Dest of test2";}
}
$obj=new test2("Anand","ZAP321","Jalandhar","3421");
$obj->display2();
?>
