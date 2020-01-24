<?php
$str="Hello 'this' is me ! ";
//strlen for length
echo "Length of string : ".strlen($str)."<br>";
//count words
echo "No of words : ".str_word_count($str)."<br>";
//reverse of string
echo "Reverse : ".strrev($str)."<br>";
//position of given substring
echo "Position of 'this' : ".strpos($str,"this")."<br>";
//add slash before given letter
$str1=addcslashes($str,"t");
echo $str1."<br>"; 
//add slashes before quotes
$str1=addslashes($str);
echo $str1."<br>";
//string to hexadecimal conversion
$str1=bin2Hex($str);
echo $str1."<br>";
echo pack("H*",$str1)."<br>";
//chop given substring from string form right end
echo chop($str,"me ! ")."<br>";
//characters of ASCII value or decimal value
echo chr(52)."<br>";
echo chr(0x52)."<br>";
echo chr(046)."<br>";  //for &
echo chunk_split($str,2,".")."<br>";
//encode string
$str1=convert_uuencode($str);
echo $str1."<br>";
//decode the encoded string
echo convert_uudecode($str1)."<br>";
//all characters used in string
echo count_chars($str,3)."<br>";
//32 bit src(cyclic redundancy checksum) for a string
$str1=crc32($str);
echo $str1."<br>";
printf("%u<br>",$str1);
//convert string to array
print_r(explode(" ",$str));
//writes formatted string to a file
$number=23;
$s="Anand kumar";
$file = fopen("test.txt","w+");
echo fprintf($file,"My name is %s and I am %u",$s,$number);
fclose($file);
//translation table used by html special_chars
print_r(get_html_translation_table());
?>
