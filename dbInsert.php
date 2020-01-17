<html>
<head>
	<title>Database operations</title>
</head>
<body>
	<div style="background-color: lightblue">
		<form method="POST">
			<h2>Insert details</h2>
			<label for="ID">Employee ID : </label><input type="number" name="id" size="30"/><br>
			<label for="fname">First name  : </label><input type="text" name="fname" size="30"/><br>
			<label for="lname">Last name  : </label><input type="text" name="lname" size="30"/><br>
			<label for="email">Email id  :</label>
			<input type="text" name="email" size="30" required></br>
	       	<button type="submit" name="submit-insert">Submit</button>
		</form>
	</div>
	<div style="background-color: lightblue">
		<form method="POST">
			<h2>Update Email id</h2>
			<label for="ID">Employee ID of registered Employee : </label><input type="number" name="id" size="30"/><br>
			<label for="email">New Email id  :</label>
			<input type="text" name="email" size="30" required></br>
	       	<button type="submit" name="submit-update">Submit</button>
		</form>
	</div>
	
</body>
</html>

<?php
//Create connection
if(isset($_POST['submit']))
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
	//Update record
	$id=number_format($_POST['id']);
	$email=$_POST['email'];
	$sql="UPDATE employees SET email='$email' WHERE id=$id";
	if($con->query($sql)===TRUE)
	{
		echo "\nRecord Updated\n";
	}
	else
		echo "Error";
	$con->close();
}
?>