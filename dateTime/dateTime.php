<?php
echo time()."<br>";
echo date("l jS \of F Y h:i:s A")."<br>";
//check date is valid or not
if(checkdate(8,10,2012))
{
    echo "Valid date ";
}
else
{
    echo "Invalid date ";
}
$date=date_create("2019-03-15");
//add date upto given interval
date_add($date,date_interval_create_from_date_string("1 year 40 days"));
echo "<br>".date_format($date,"d-m-Y");
//formatted date and time
$date=date_create_from_format("j-M-Y","15-Mar-2019");
echo "<br>".date_format($date,"Y/m/d");

$date=date_create("2020-02-04 23:40:00",timezone_open("Europe/Oslo"));
echo "<br>".date_format($date,"Y/m/d H:iP");

$date=date_create();
//set new date and format it
date_date_set($date,2020,10,30);
echo "<br>".date_format($date,"Y/m/d");

echo "<br>".date_default_timezone_get();

date_default_timezone_set("Europe/Paris");
echo "<br>".date_default_timezone_get();
echo "<br>".date("d-F-Y h-i-s A");

$date1=date_create("2013-03-15");
$date2=date_create("2016-12-12");
$diff=date_diff($date1,$date2);
echo "<br>".$diff->format("%R%a days");

//get errors
// date_create("gyuiyiuyui%&&/");
// echo "<br>";
// print_r(date_get_last_errors());

$date=date_create("2020-05-01");
date_modify($date,"+15 days");
echo "<br>".date_format($date,"Y-m-d")."<br>";
//details about specific date
print_r(date_parse_from_format("mmddyyyy","05122013"));


?>