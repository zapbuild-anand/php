<?php
Interface test
{
	public function disp();
}
class test1 implements test
{
	private $bank;
	private $balance;
	private $rate;
	function input()
	{
		$this->bank="HDFC";
		$this->balance=300000;
		$this->rate=8;
	}
	public function disp()
	{
		echo "Bank name : ".$this->bank."<br>";
		echo "Balance : ".$this->balance."<br>";
		$tot=($this->balance*$this->rate)/100+$this->balance;
		echo "Balance + Interest : ".$tot."<br>";
	}
}
$t1=new test1();
$t1->input();
$t1->disp();
?>