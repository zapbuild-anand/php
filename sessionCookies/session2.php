<?php
session_start();
echo "Session ID : ".session_id()."<br>";
echo "Name : ".$_SESSION['Name']."<br>";
echo "ID : ".$_SESSION['ID'];
session_close();
?>