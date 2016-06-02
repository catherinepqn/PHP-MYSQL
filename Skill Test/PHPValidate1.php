<?php include("header.php")?>
<?php
	if(isset($_POST["FName"]))
		$First = $_POST["FName"];
	else
		$First = "";
	if(isset($_POST["LName"])) 
		$Last = $_POST["LName"];
	else
		$Last = "";
	//checks that the submission button has been clicked once.
	if (isset( $_POST['submission']) )
	{
		if ($First == "")
		{
			$firstMessage= "First name must contain at least one character.";
		}
		else
		{
			$firstMessage="";

		}
		
		if($Last =="")
		{
			$lastMessage= "Last name must contain at least one character..";
		}
		else
		{
			$lastMessage="";
		}
	}
	
?>
<!DOCTYPE html>
<html>
	<body>
		<title>PHP Validate #1</title>
		<h1><u>PHP Validate #1</u></h1></p>
		
		<!-- when the submit button is clicked, will send information to form exercise -->
		<form action="PHPValidate1.php" method="post">
		First Name:<input type="text" name="FName" value="<?php echo $First;?>"></textarea>
		Last Name:<input type="text" name="LName" value="<?php echo $Last;?>"></textarea>
		<p><input name= "submission" button type="submit" value="Submit"></button></p>
		<?php
			if ($First != "" && $Last != "")
		{	
			echo "The information has been filled.";
		}
		?>
		</form>
	</body>
</html>