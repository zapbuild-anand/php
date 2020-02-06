<?php
//session_start();
//Create connection
if(isset($_POST['submit-insert']))
{
	$con=new mysqli("localhost","root","1234","zap");
	if($con)
	{
		echo "Connected";
	}
	else
		echo "Not connected";
	//Create table
	/*$sql = "CREATE TABLE employees(
	        id INT(2)  PRIMARY KEY, 
	        firstname VARCHAR(30) NOT NULL,
	        lastname VARCHAR(30) NOT NULL,
	        email VARCHAR(50)
	        )";
	if ($con->query($sql) === TRUE) {
	    echo "Table employees created successfully";
	} else {
	    echo "Error creating table: " . $con->error;
	}
	*/
	//Insert record
	$id=number_format($_POST['id']);
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$sql="INSERT INTO employees(id,firstname,lastname,email)values($id,'$fname','$lname','$email')";
	if($con->query($sql)===TRUE)
	{
		echo "\nRecord Inserted\n";
	}
	else
		echo "Error";
    $con->close();
    header("Location: dbOperations.php");
}

if(isset($_POST['submit-update']))
{
	$con=new mysqli("localhost","root","1234","zap");
	if($con)
	{
		echo "Connected";
	}
	else
		echo "Not connected";
	//Update record
	$id=$_GET['id'];
	$email=$_POST['email'];
	$sql="UPDATE employees SET email='$email' WHERE id=$id";
	if($con->query($sql)===TRUE)
	{
		echo "\nRecord Updated\n";
	}
	else
		echo "Error";
    $con->close();
    header("Location: dbOperations.php");
}
//delete record
if($_GET['action']=="del")
{
	$con=new mysqli("localhost","root","1234","zap");
	if($con)
	{
		echo "Connected";
	}
	else
		echo "Not connected";
	//Update record
	$id=$_GET['id'];
	$sql="DELETE from employees WHERE id=$id";
	if($con->query($sql)===TRUE)
	{
		echo "\nRecord Deleted\n";
	}
	else
		echo "Error";
	$con->close();
    header("Location: dbOperations.php");
}

?>