<?php
class test
{
	private $name;
	private $id;
	public function display($name,$id)
	{
		$this->name=$name;
		$this->id=$id;
		echo "Name : ".$name."<br>";
		echo "ID : ".$id;
	}
}
$obj=new test();
$obj->display("Anand","ZAP321");
?>
