<?php
$arr=array("I","am","Anand");
//join array elements as string
echo join(" ",$arr)."<br>";
//convert 1st character to lower
echo lcfirst("Anand")."<br>";
echo ucfirst("anand")."<br>";
echo ucwords("Anand kumar")."<br>";
$str="Anand Kumar!";
//cut string from left
echo ltrim($str,"Anand")."<br>";
//cut string from right
echo rtrim($str,"Kumar!")."<br>";
//md5 hash of a string
echo md5($str,FALSE)."<br>";
echo md5("Hello")."<br>";
if(md5("Hello")=="8b1a9953c4611296a827abf8c47804d7")
	echo "Equal"."<br>";
else
	echo "Not equal"."<br>";
//formatted string
printf("My name is %s",$str."<br>");
// case insensitive replace the character with other and count th no of replacement
echo str_ireplace("Kumar", "Singh", $str,$i)."<br>"."Replacement : ".$i."<br>";
//padding to the right of left or both default is right
echo str_pad($str,20,"_",STR_PAD_LEFT)."<br>";
echo str_pad($str,20,"_",STR_PAD_BOTH)."<br>";
//repeat string given times
echo str_repeat("Hello", 10)."<br>";
//replace astring with other
echo str_replace("Kumar", "Singh", $str)."<br>";
//split string to array
print_r(str_split($str,3));
echo "<br>";
//count no of words in a string
echo str_word_count($str)."<br>";
//compare two string not case sensitive
echo strcasecmp("Well Done!", "well done!")."<br>";
echo strcasecmp("Well Done!", "well done")."<br>";
//find first occurence and returns the whole string after that
echo strchr("Good job done!", "job")."<br>";
echo strstr("Good job done!", "job")."<br>";
//find last occurence and returns the whole string after that
echo strrchr("Good job done! and the job is good ", "job")."<br>";
//compare two string case sensitive
echo strcmp("Good job!", "Good Job!")."<br>";
//compare two strings
echo strcoll("Good job!", "Good job!")."<br>";
//pisition of first occurence case insensetive
echo stripos("who is he and how is is he different.", "He")."<br>";
//pisition of first occurence case sensetive
echo strpos("who is he and how is is he different.", "He")."<br>";
//pisition of last occurence case insensetive
echo strripos("who is he and how is is he different.", "He")."<br>";
//string to lower case
echo strtolower("WELL done<br>");
//string to upper case
echo strtoupper("WELL done<br>");
//sub string from given position
echo substr($str,6)."<br>";
//compare from position given upto number op position given
echo substr_compare("Well done!", "do", 5,2)."<br>";
//count no of sub string in a string
echo substr_count("who is he and how is is he different.", "he")."<br>";
//replace sub string from string upto given no of position
echo substr_replace($str, "Singh", 6,4)."<br>";
//remove blank sapaceform both ends
echo trim("     Hello    ")."<br>";
//breaks to new line from length given
echo wordwrap("who is he and how is is he different.",6,"<br>")."<br>";
//convert html entities to chars
$x='&lt;a href=&quot;calci.php&quot;&gt;Calculator&lt;/a&gt;';
echo html_entity_decode($x)."<br>";
//convert chars to html entities
$y='<a href="calci.php">Calculator</a>';
echo htmlentities($y)."<br>";
//convert chars to html entities
$z="My name is <a>Anand</a> Kumar.";
echo htmlspecialchars($z)."<br>";

$str="Bye everyone. It was nice meeting you all. Have a good day.";
//split string one by one
$token=strtok($str," ");
while($token!=FALSE)
{
	echo "$token<br>";
	$token=strtok(" ");
}

//new branch user1
//stash 
?>