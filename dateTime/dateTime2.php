
<?php
echo "<h4>Date: 4th February, 2020</h4>";
$sun_info=date_sun_info(strtotime("2020-02-04"),30.7114158,76.6890948);
foreach ($sun_info as $key=>$val)
  {
  echo "$key: " . date("H:i:s",$val) . "<br>";
  }


$date=date_create("2013-05-01");
//sets the time
date_time_set($date,13,24);
echo date_format($date,"Y-m-d H:i:s") . "<br>";

$date=date_create();
//unix time stamp
echo date_timestamp_get($date). "<br>";

$date=date_create(null,timezone_open("Europe/Paris"));
//set time zone
$tz=date_timezone_get($date);
//get time zone
echo timezone_name_get($tz). "<br>";

echo date("l"). "<br>";

//print_r(getdate());
//current date and time info
$mydate=getdate(date("U"));
echo "<br>"."$mydate[weekday], $mydate[month] $mydate[mday], $mydate[year]";

echo "<br>"."Feb 4, 2020 is on a ".date("l", gmmktime(0,0,0,02,4,2020))."<br>";

echo(gmstrftime("%B %d %Y, %X %Z",mktime(20,0,0,12,31,98))."<br>");
setlocale(LC_ALL,"hu_HU.UTF8");
//format time according to locale setting
echo(gmstrftime("%Y. %B %d. %A. %X %Z"));

echo "<br>".idate("d") . "<br>";

print_r(localtime());

$format="%d/%m/%Y %H:%M:%S";
$str=strftime($format);
echo "<br>"."$str"."<br>";
print_r(strptime($str,$format));

$time=strtotime("last Sunday");
echo "<br>".date("Y-m-d",$time);


$tz=timezone_open("Asia/Kolkata");
print_r(timezone_location_get($tz));

//name of timezone created
$tz=timezone_open("Europe/Paris");
//get timezone name
echo "<br>".timezone_name_get($tz);

$timezone = new DateTimeZone("Europe/Paris");
print_r(reset(timezone_transitions_get($timezone)));
echo "<br>";
// Object oriented
print_r(reset($timezone->getTransitions()));

echo "<br>".timezone_version_get();

echo "<br>".date("r");
?>