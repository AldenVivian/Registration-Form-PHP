<html>
	<body>
		<form method="POST" action = "registration.php">
			Name: <input type ="text" name = "name"><br>
			Password: <input type ="password" name = "pass"><br>
			Email: <input type ="email" name = "email"><br>
			Phone Number: <input type ="number" name = "phnum"><br><br>
			Gender:<br> 
				Male: <input type ="radio" name = "gender" value ="male" required>
				Female: <input type ="radio" name = "gender" value ="female"required>
				Other: <input type ="radio" name = "gender" value ="other"required><br><br>
			Special interests:<br>
				Sports:<input type ="checkbox" name = "special[]" value ="sports">
				Music: <input type ="checkbox" name = "special[]" value ="music">
				Dance: <input type ="checkbox" name = "special[]" value ="dance"><br>
		
			<input type="submit" name = "submit"value = "submit">
		</form>
		
		<?php
			if(isset($_POST["submit"]))
			{
				echo "<b>Name: </b>".$_POST["name"]."<br>";
				echo "<b>Password:</b>".$_POST["pass"]."<br>";
				echo "<b>Email: </b>".$_POST["email"]."<br>";
				echo "<b>Phone Number: </b>".$_POST["phnum"]."<br>";
				echo "<b>Gender: </b>".$_POST["gender"]."<br>";
				echo "<b>Special interests:</b>";
				
				
				if(isset($_POST["special"]))
				{
					foreach($_POST["special"] as $spec)
					{
						echo $spec."  ";
					}
				}
			}
		?>
	</body>
</html>
				