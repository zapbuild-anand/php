<?php
$time="12:30:45PM";
echo "$time\n";
$last=substr($time,8,2);
if($last=="PM" && substr($time,0,2)!="12")
    $time=(intval(substr($time,0,2))+12).substr($time,2,6);
elseif($last=="AM" && substr($time,0,2)=="12")
    $time="00".substr($time,2,6);
else
    $time=substr($time,0,8);
echo "\n".$time;
?>