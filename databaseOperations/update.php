<html>
<body>
<div style="background-color: lightblue">
		<form method="POST" action="controller.php?id=<?php $id=$_GET["id"]; echo $id; ?>">
			<h2>Update Email id</h2>
			<label for="ID">Employee ID <?php $id=$_GET["id"]; echo $id; ?> </label><br>
			<label for="email">New Email id  :</label>
			<input type="email" name="email" pattern=".+@gmail.com" size="30" required></br>
	       	<button type="submit" name="submit-update">Submit</button>
		</form>
	</div>
</body>
</html>
