<?php
namespace myNamespace1;
function show()
{
	echo "hello";
}
namespace myNamespace2;
function show()  // two functions with same name in one program using namespace
{
	echo "Hii";
}
\myNamespace1\show(); //calling
\myNamespace2\show();
?>