<?php
session_start();
if(isset($_SESSION['counter']))
{
	$_SESSION['counter']+=1;
}
else
{
	$_SESSION['counter']=1;
}
echo "Number of times you have visited this page :".$_SESSION['counter']."<br>";
$_SESSION['user1']=array("Name"=>"Anand","ID"=>"Zap123");
$_SESSION['user2']=array("Name"=>"Pulok","ID"=>"Zap124");
echo "Session set"."<br>";
echo "Session ID : ".session_id()."<br>";
echo "User 1 details ";
print_r($_SESSION['user1']);
echo "<br>";
echo "User 2 details ";
print_r($_SESSION['user1']);

//session_unset();
//session_destroy();
?>