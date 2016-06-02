<?php include("header.php")?>
<!DOCTYPE html>
<html>
	<body>
		<title>PHP Validate #2</title>
		<h1><u>PHP Validate #2</u></h1></p>
		
		<!-- when the submit button is clicked, will send information to form exercise -->
		<form action="PHPValidate2.php" method="post">
		Password:<input type="password" name= "Password"></textarea>
		Confirm Password:<input type="password" name="Confirm"></textarea>
		<p><input name= "submission" button type="submit" value="Submit"></button></p>
	
		</form>
	</body>
</html>

<?php
	//checks that the submission button has been clicked once.
	if (isset( $_POST['submission']) )
	{
		$Password = $_POST["Password"];
		$Confirm = $_POST["Confirm"]; 
		if (strlen($Password)>8 && (preg_match('/[0-9]/', $Password)))
			{
				echo "The password is secure.</p>";
			}
		else if ($Password =="" && $Confirm =="")
		{
			echo "Please enter a password and confirm it.";
		}
		else
			{
				echo "The password is NOT secure. It must contain at least 1 number and letter.</p>";
			}
		if ($Password != $Confirm)
		{
				echo "Passwords do not match. Please fix it.</p>";
		}
	}
	
?>