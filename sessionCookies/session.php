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
$_SESSION['Name']="Anand Kumar";
$_SESSION['ID']="ZAP22093";
echo "Session set";
//session_unset();
//session_destroy();
?>