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
echo "<br>";
$arrName=array("Anand","Pulok","Ankit","Shiv");
$arrAge=array(23,24,23,24);
//combine two array with first as key and second as value
$arrCombine=array_combine($arrName,$arrAge);
print_r($arrCombine);
$arrName2=array("Deepak","Pulok");
$arrMerge=array_merge($arrName,$arrName2);
echo "<br>";
//merge the data of two array
print_r($arrMerge);
//difference of two arrays
$arrDiff=array_diff($arrName,$arrName2);
echo "<br>";
print_r($arrDiff);
//fill array upto given number with value
$arrNew=array_fill(3,4,"Hi");
echo "<br>";
print_r($arrNew);
?>