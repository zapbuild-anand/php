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
		echo "ID : ".$this->id;
	}
}
$obj=new test("Anand","ZAP321");
$obj->display();
?>
