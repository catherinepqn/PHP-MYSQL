<?php include("header.php")?>
<?php
$conn = mysqli_connect ('localhost', 'cnguy007_admin', 'adminpass','cnguy007_IT461');
if (mysqli_connect_errno())
{
	echo "Failed to connect to DB.".mysqli_connect_error();
}
else
{
	echo "Connection Successfull.</p>"; 
}
$valid = true;
$formIsEmpty = true;

if (isset($_POST["FirstName"])) {
	$FirstName=$_POST["FirstName"];
	$formIsEmpty = false;
} else {
	$FirstName="";
	$valid = false;
}
if (isset($_POST["LastName"])) {
	$LastName=$_POST["LastName"];
	$formIsEmpty = false;
} else {
	$LastName="";
	$valid = false;
}
if (isset($_POST["Address1"])) {
	$Address1=$_POST["Address1"];
	$formIsEmpty = false;
} else {
	$Address1="";
	$valid = false;
}
if (isset($_POST["City"])) {
	$City=$_POST["City"]; 
	$formIsEmpty = false;
} else {
	$City="";
	$valid = false;
}
if (isset($_POST["State"])) {
	$State=$_POST["State"];
	$formIsEmpty = false;
} else {
	$State="";
	$valid = false;
}
if (isset($_POST["ZIP"])) {
	$ZIP=$_POST["ZIP"];
	$formIsEmpty = false;
} else {
	$ZIP="";
	$valid = false;
}
?>
<!DOCTYPE html>
<html>
<body>
Insert Record
<?php
if ($valid==false or $formIsEmpty) {
?>
<form action="insertRecord.php" method="post">
First Name: <input type="text" name="FirstName" value="<?php echo $FirstName;?>"></p>
Last Name: <input type="text" name="LastName" value="<?php echo $LastName;?>"></p>
Address1: <input type="text" name="Address1" value="<?php echo $Address1;?>"></p>
City: <input type="text" name="City" value="<?php echo $City;?>"></p>
State: <input type="text" name="State" value="<?php echo $State;?>"></p>
ZIP: <input type="test" name="ZIP" value="<?php echo $ZIP;?>"></p>

<button type="submit">Submit</button>
</form>
<?php
} else {
	$sql = "INSERT INTO Customers(UserID, FirstName,LastName,Address1,City,State,ZIP) VALUES('".mysqli_real_escape_string($conn, 'DEFAULT')."','"
			.mysqli_real_escape_string($conn, $FirstName)."','".mysqli_real_escape_string($conn, $LastName)."','".mysqli_real_escape_string($conn, $Address1)."','"
			.mysqli_real_escape_string($conn, $City)."','".mysqli_real_escape_string($conn, $State)."','".mysqli_real_escape_string($conn, $ZIP)."');";
	if (mysqli_query($conn, $sql)) 
	{
	echo "</br>User created!";
	} 
	else {
			echo "</br>Error: " . mysqli_error($conn);
		}
}
?>
</body>
</html>