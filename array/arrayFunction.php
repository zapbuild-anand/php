<?php
//indexed array
$arr=array(1,2,3,4,5);
print_r($arr);
//associative array having key and value pair
$arr=array("Name"=>"Anand","ID"=>"22093");
echo "<br>";
echo "I am ".$arr["Name"]." my ID is ".$arr["ID"]."<br>";
echo "<br>";
print_r(array_change_key_case($arr,CASE_UPPER));
echo "<br>";
foreach($arr as $x=>$value)
{
	echo $x." : ".$value."<br>";
}
//multidimentional array
$arr=array(array("Name"=>"Anand","ID"=>"zap11"),array("Name"=>"Ankit","ID"=>"zap12"));
print_r($arr);


?>