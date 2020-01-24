<html>
<head>
	<title>Calculator</title>
</head>
<body>
	<div>
		<form method="post">
			<label for="firstNumber">Enter 1st number : </label><input type="number" name="firstNumber"/><br>
			<label for="secondNumber">Enter 2nd number : </label><input type="number" name="secondNumber"/><br>
			<p>Select operation :
			<select name="opt">
 				<option value="Select">Select</option>
 				<option value="Add">Add</option>
 				<option value="Sub">Subtract</option>
 				<option value="Multiply">Multiply</option>
  				<option value="Divide">Divide</option>
  				<option value="SquareRoot">SquareRoot</option>
			</select> 
			<br><button type="submit" name="submit">Submit</button>
		</form>
	</div>
</body>
</html>
<?php
//require_once "Calci.php";
function __autoload($class)
{
	require_once "./".$class.".php";
}
//if submit button is clicked
if(isset($_POST['submit']))
{
	$firstNumber=$_POST['firstNumber'];
	$secondNumber=$_POST['secondNumber'];
	$opt=$_POST['opt'];
	
	//object of Calci class
	$cal = new Calci($firstNumber,$secondNumber);
	//operator checking using if elif else
	switch($opt)
	{
		case "Add":
			//calling add function
			echo $cal->add();
			break;
		case "Sub":
			//calling subtract function
			echo $cal->subtract();
			break;
		case "Multiply":
			//calling multiply function
			echo $cal->multiply();
			break;
		case "Divide":
			//calling divide function
			echo $cal->divide();
			break;
		case "SquareRoot":
			//calling squareRoot function
			echo $cal->squareRoot();
			break;
		default:
			//for invalid input
			echo "Enter a valid choice ";
	}
}


?>
