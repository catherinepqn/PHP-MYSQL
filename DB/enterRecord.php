<?php
//I want to do as much as possible before anything is sent to browser
$validForm = true;
$formIsEmpty = true;
if (isset($_GET["CustomerID"])) {
	$CustomerID=$_GET["CustomerID"];
	$formIsEmpty = false; //the value is set so the form is not empty
} else {
	$CustomerID="";
	$validForm = false;
}
if (isset($_GET["EmailAddress"])) {
	$EmailAddress=$_GET["EmailAddress"];
	$formIsEmpty = false; //value set, form is not empty
} else {
	$EmailAddress="";
	$validForm = false;
}
if (is_numeric($EmailAddress)) {
	$messageToUserAboutEmailAddress = " EmailAddress must be numeric";
	$validForm = false;
	
} else {
	if (strlen($EmailAddress)<5)
	{
		$messageToUserAboutEmailAddress = "Email Address must not be at least 5 characters.";	
		$validForm = false;
	}	
	else if(strlen($EmailAddress)>100)
	{
		$messageToUserAboutEmailAddress = "Email Address must be less than 100 characters.";
		$validForm = false;
	}
	else
	{
		$messageToUserAboutEmailAddress = "";	
	}
	
}

if (is_numeric($CustomerID)) 
{
	if ($CustomerID<1)
	{
		$messageToUserAboutCustomerID = "CustomerID must be greater than zero.";
		$validForm = false;
	}	
	else if ($CustomerID>2147483647)
	{
		$messageToUserAboutCustomerID = "CustomerID must be less than 2,147,483,647.";
		$validForm = false;
	}
	else
	{
		$messageToUserAboutCustomerID = "";
	}
		
} 
else {
	$messageToUserAboutCustomerID = " CustomerID must be an integer.";
	$validForm = false;
}

?>
<!DOCTYPE html>
<html>
<body>
<?php
if ($validForm==false or $formIsEmpty) {
//This is shown if user entered an invalid value
?>
<form action="enterRecord.php" method="get">
Customer ID: <input type="text" name="CustomerID" value="<?php
echo $CustomerID;
?>"><span style="color: red;"><?php
if (!$formIsEmpty) {
	echo $messageToUserAboutCustomerID;	
}
?></span></p>
Email Address: <input type="text" name="EmailAddress" value="<?php
echo $EmailAddress;
?>"><span style="color: red;"><?php
if (!$formIsEmpty) {
	echo $messageToUserAboutEmailAddress;
}
?></span></p>
<button type="submit">Submit</button>
</form>
<?php
} else {
	echo "Form values were valid. Thank you.</p>";
	require("fullControl.php");
	$sql = "INSERT INTO EmailList (CustomerID, EmailAddress)
			VALUES('".mysqli_real_escape_string($conn, $CustomerID)."','"
					.mysqli_real_escape_string($conn, $EmailAddress)."');";
	echo $sql;
	
	if (mysqli_query($conn, $sql)) 
	{
    echo "</p>Information inputed successfully.";
	} 
	else {
			echo "</p>Error creating table: " . mysqli_error($conn);
		}
}
?>
</body>
</html>