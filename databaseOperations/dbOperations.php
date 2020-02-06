<?php
	$con=new mysqli("localhost","root","1234","zap");
	if($con)
	{
		echo "Connected";
	}
	else
		echo "Not connected";
	//Print record
	$sql="SELECT * from employees";
	$res=$con->query($sql);
	if($res->num_rows>0)
	{
		echo '<table border="1" width="70%" align="center">';
		echo "<tr> <th>User ID</th><th>User Name</th><th>Email Id</th><th>Edit</th><th>Delete</th></tr>";
		while($row=$res->fetch_assoc())
		{
			echo "<tr>";
			echo "<td>".$row["id"]."</td>";
			echo "<td>".$row["firstname"]." ".$row["lastname"]."</td>";
			echo "<td>".$row["email"]."</td>";
            echo '<td><a href="update.php?id='.$row["id"].'">Update</a></td>';
            echo '<td><a href="controller.php?id='.$row["id"].'&action=del">Delete</a></td>';
            echo "</tr>";
		}
        echo "</table>";
        echo '<center><a href="insert.php">Insert new Record</a></center>';
	}
	else
	{
		echo "No data";
	}
	$con->close();
?>
