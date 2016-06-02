<?php include("header.php")?>
<!DOCTYPE html>
<html>
	<body>
		<title>PHP Validate #3</title>
		<h1><u>PHP Validate #3</u></h1></p>
		<?php
		if(!isset($_POST['Email']))
			$Email = '';
		else
			$Email = $_POST["Email"];
		
		if(!isset($_POST['Confirm']))
			$Confirm = '';
		else
			$Confirm = $_POST["Confirm"];  
		?>
		<!-- when the submit button is clicked, will send information to form exercise -->
		<form action="PHPValidate3.php" method="post">
		Email<input type="text" name= "Email" value="<?php echo $Email;?>">
		Confirm Email:<input type="text" name="Confirm" value="<?php echo $Confirm;?>">
		<p><input name= "submission" button type="submit" value="Submit"></button></p>
		</form>
	</body>
</html>

<?php

	//checks that the submission button has been clicked once.
	if (isset( $_POST['submission']) )
	{	
		if ($Email =="" && $Confirm =="")
		{
			echo "Please enter an Email and confirm it.";
		}
		else if ($Email != $Confirm)
		{
			echo "Emails do not match. Please fix it.</p>";
		}
		else if($Email[0] != '@' and strpos($Email, '@') !== false and substr_count($Email, '@') == 1 and strpos($Email, '.') !== false)
		{
			if(strpos(substr($Email, strpos($Email, '@') + 1), '.') !== false and strpos(substr($Email, -3), '.') == false)
			{
				echo "Email is valid!</p>";
			}
			else
			{
				echo "Not a valid Email Address </p>";
			}
		}
		else
		{
			echo "Not a valid Email Address </p>";
		}

	}
	
?>