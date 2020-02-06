<html>
    <body>
    <div style="background-color: lightblue">
		<form method="POST" action="controller.php">
			<h2>Insert details</h2>
			<label for="ID">Employee ID : </label><input type="number" name="id" size="30" required/><br>
			<label for="fname">First name  : </label><input type="text" name="fname" size="30" required/><br>
			<label for="lname">Last name  : </label><input type="text" name="lname" size="30" required/><br>
			<label for="email">Email id  :</label>
			<input type="email" name="email" pattern=".+@gmail.com" size="30" required></br>
	       	<button type="submit" name="submit-insert">Submit</button>
		</form>
	</div>
    </body>
</html>