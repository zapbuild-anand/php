<?php
echo "&#9400; copyright Zapbuild ".date("d-m-Y")."<br>";
$date=mktime(13,44,02,06,19,2020);
echo date("d/m/Y h:i:s A",$date)."<br>";
$timestamp=time();
echo "Time stamp of current date : ".$timestamp."<br>";
echo "Current date : ".date("Y-m-d",$timestamp)."<br>";
$date=date_create();
date_modify($date,"+1 month");
echo "Modified date by +1 month : ".date_format($date,"Y-m-d h:i:s A")."<br>";
$t1=date_create("2020-06-19 13:44:02");
$t2=date_create("2020-10-13 23:04:22");
$dif=date_diff($t1,$t2);
echo $dif->format("%R%a days")."<br>";
echo gmdate("Y-m-d\T H:i:s\Z")."<br>";
?>