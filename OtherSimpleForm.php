<?php include("header.php")?>
<!DOCTYPE html>
<html>
<head>
  <title>Single File Action Form</title>
<?php
$validForm = true;
$emptyForm = true;
require("otherFunctions.php");


	if (isset($_POST["CustomerID"]))
	{
		$CustomerID=$_POST["CustomerID"];
		$emptyForm = false;
	}
		else
		{
			$CustomerID="";
			$validForm = false;
		}
//DEBUGE CODE ALWAYS SHOW FORM
$EmailAddress =grabPostField("EmailAddress");
if (isEntry($EmailAddress,1,5))
{
	
}
else
{
		$validForm = false;
		$emailError = "Email Address must be 1 to 5 characters long.";
}
//$validForm=false; 
if ($validForm ==false or $emptyForm)
{
?>
	<body>			
		<form method="post" action="OtherSimpleForm.php">
			Customer ID: <input type="text" name="CustomerID" value= "<?php echo htmlentities($CustomerID);?>"></p>
			Email Address: <input type="text" name="EmailAddress" value= "<?php echo htmlentities($EmailAddress);?>"></p>
			<?php
			if (!($emptyForm))
			{ 
				echo $emailError."</p>";
			}?>
		<button type="Submit">Submit</button>
		</form>
	</body>
</html>

<?php
}
else 
{
	echo "Form has successfully been submitted.";
}
?>
