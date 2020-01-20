<html>
<head>
	<title>Calculator</title>
</head>
<body>
	<div>
		<form method="post">
			<label for="number">Enter 1st number : </label><input type="number" name="num1"/><br>
			<label for="number">Enter 2nd number : </label><input type="number" name="num2"/><br>
			<p>Select operation :
			<select name="opt">
 				<option value="Select">Select</option>
 				<option value="Add">Add</option>
 				<option value="Sub">Sub</option>
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
//if submit button is clicked
if(isset($_POST['submit']))
{
	$num1=$_POST['num1'];
	$num2=$_POST['num2'];
	$opt=$_POST['opt'];
	
	class Calci 
	{
	    private $num1 , $num2;

	    public function __construct($num1, $num2)
	    {
	        $this->num1 = $num1;
	        $this->num2 = $num2;
	    }

	    public function add()
	    {
	    	return $this->num1 + $this->num2;
	    }

	    public function subtract()
	    {
	   		return $this->num1 - $this->num2;
	    }

	    public function multiply()
	    {
	    	return $this->num1 * $this->num2;
	    }

	    public function divide() 
	    {
	    	return $this->num1 / $this->num2;
	    }
	    public function squareRoot()
	    {
	    	return sqrt($this->num1);
	    }
	}

	//object of Calci class
	$cal = new Calci($num1,$num2);
	//operator checking using if elif else
	if($opt=="Add")
	{
		//calling add function
		echo $num1." + ".$num2." = ".$cal->add();
	}
	elseif($opt=="Sub")
	{
		//calling subtract function
		echo $num1." - ".$num2." = ".$cal->subtract();
	}
	elseif($opt=="Multiply")
	{
		//calling multiply function
		echo $num1." * ".$num2." = ".$cal->multiply();
	}
	elseif($opt=="Divide")
	{
		//calling divide function
		echo $num1." / ".$num2." = ".$cal->divide();
	}
	elseif($opt=="SquareRoot")
	{
		//calling squareRoot function
		echo "<b>&#8730</b>".$num1." = ".$cal->squareRoot();
	}
	else
	{
		//for invalid input
		echo "Enter a valid choice ";
	}
}


?>
