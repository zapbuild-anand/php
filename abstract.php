<?php
abstract class test
{
	abstract public function input();
}
class test1 extends test
{
	private $name;
	private $id;
	public function input()
	{
		$this->name="Anand";
		$this->id="ZAP321";
	}
	public function show()
	{
		echo "Name : ".$this->name."<br>";
		echo "ID :".$this->id."<br>";
	}
}
$t1=new test1();
$t1->input();
$t1->show();
?>
