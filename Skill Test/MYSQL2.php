<?php include("header.php")?>
<!--------It literally connects you to the database.-------------->
<?php
	$conn = mysqli_connect ('localhost', 'cnguy007_admin', 'adminpass','cnguy007_IT461');
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to DB.".mysqli_connect_error();
	}
?>
<!--- Sets your values and makes sure that they are not empty upon submission--->
<?php
	$validForm = true;
	$formIsEmpty = true;
	
	if (isset($_GET["UserID"])) {
		$UserID=$_GET["UserID"];
		$formIsEmpty = false; //the value is set so the form is not empty
	} else {
		$UserID="";
		$validForm = false;
	}
	if (isset($_GET["FirstName"])) {
		$FirstName=$_GET["FirstName"];
		$formIsEmpty = false; //value set, form is not empty
	} else {
		$FirstName="";
		$validForm = false;
	}
	if (isset($_GET["LastName"])) {
		$LastName=$_GET["LastName"];
		$formIsEmpty = false; //value set, form is not empty
	} else {
		$LastName="";
		$validForm = false;
	}
	if (isset($_GET["Address1"])) {
		$Address1=$_GET["Address1"];
		$formIsEmpty = false; //value set, form is not empty
	} else {
		$Address1="";
		$validForm = false;
	}
	if (isset($_GET["City"])) {
		$City=$_GET["City"];
		$formIsEmpty = false; //value set, form is not empty
	} else {
		$City="";
		$validForm = false;
	}
	if (isset($_GET["State"])) {
		$State=$_GET["State"];
		$formIsEmpty = false; //value set, form is not empty
	} else {
		$State="";
		$validForm = false;
	}
	if (isset($_GET["ZIP"])) {
		$ZIP=$_GET["ZIP"];
		$formIsEmpty = false; //value set, form is not empty
	} else {
		$ZIP="";
		$validForm = false;
	}
?>
<!----------------------------------------------------------------------------->
<!DOCTYPE html>
<html>
	<body>
	<?php
	if ($validForm==false or $formIsEmpty) {
	?>
	
	<!---------------------------------->
	<!-- THE START OF THE ACTUAL FORM -->
	<form action="MYSQL2.php" method="get">
	User ID: <input type="text" name="UserID" value="<?php echo $UserID;?>"></p>
	First Name: <input type="text" name="FirstName" value="<?php echo $FirstName;?>"></p>
	Last Name: <input type="text" name="LastName" value="<?php echo $LastName;?>"></p>
	Address: <input type="text" name="Address1" value="<?php echo $Address1;?>"></p>
	City: <input type="text" name="City" value="<?php echo $City;?>"></p>
	State: <input type="text" name="State" value="<?php echo $State;?>"></p>
	ZIP: <input type="test" name="ZIP" value="<?php echo $ZIP;?>"></p>
	
	<button type="submit">Submit</button>
	</form>
	<!---------------------------------->
	<!--END OF THE FORM-->
	
	<?php
	} else {
		echo "Form values were valid. Thank you.</p>";
		$sql = "INSERT INTO Customers(UserID, FirstName,LastName,Address1,City,State,ZIP)
				VALUES('".mysqli_real_escape_string($conn, $UserID)."','"
						.mysqli_real_escape_string($conn, $FirstName)."','"
						.mysqli_real_escape_string($conn, $LastName)."','"
						.mysqli_real_escape_string($conn, $Address1)."','"
						.mysqli_real_escape_string($conn, $City)."','"
						.mysqli_real_escape_string($conn, $State)."','"
						.mysqli_real_escape_string($conn, $ZIP)."');";
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