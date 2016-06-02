<?php include("header.php")?>
<?php
$conn = mysqli_connect ('localhost', 'cnguy007_admin', 'adminpass','cnguy007_IT461');
if (mysqli_connect_errno())
{
		echo "Failed to connect to DB.".mysqli_connect_error();
}
//Ok, but how the fuck are you programming this?
//Me at me: ok, so take the user id, confirm id is correct, print out information in changeable text boxes, and submit and assure submit.
	if (isset($_POST["UserID"])) {
		$UserID=$_POST["UserID"];
	} else {
		$UserID="";
	}
	if (isset($_POST["FirstName"])) {
		$FirstName=$_POST["FirstName"];
	} else {
		$FirstName="";

	}
	if (isset($_POST["LastName"])) {
		$LastName=$_POST["LastName"];
	} else {
		$LastName="";
	}
	if (isset($_POST["Address1"])) {
		$Address1=$_POST["Address1"];
	} else {
		$Address1="";
	}
	if (isset($_POST["City"])) {
		$City=$_POST["City"];
	} else {
		$City="";
	}
	if (isset($_POST["State"])) {
		$State=$_POST["State"];
	} else {
		$State="";
	}
	if (isset($_POST["Zip"])) {
		$ZIP=$_POST["Zip"];
	} else {
		$ZIP="";
	}
?>
<form action="" method="post">
	First Name: <input type="text" name="FirstName" value="<?php echo $FirstName;?>"></p>
	Last Name: <input type="text" name="LastName" value="<?php echo $LastName;?>"></p>
	Address: <input type="text" name="Address1" value="<?php echo $Address1;?>"></p>
	City: <input type="text" name="City" value="<?php echo $City;?>"></p>
	State: <input type="text" name="State" value="<?php echo $State;?>"></p>
	ZIP: <input type="test" name="Zip" value="<?php echo $ZIP;?>"></p>
	<input type="hidden" name="UserID" value="<?php echo $UserID;?>">
	<input type="submit" name="submit" value="Submit">
</form>

<?php
 // check if the form has been submitted. If it has, process the form and save it to the database
if (isset($_POST['submit']))
{
 // confirm that the 'id' value is a valid integer before getting the form data
	if (isset($_POST['FirstName']) 
		and isset($_POST['LastName']) 
		and isset($_POST['Address1']) 
		and isset($_POST['City']) 
		and isset($_POST['State'])
		and isset($_POST['Zip']))
	{
		// save the data to the database
		$sql= "UPDATE Customers SET UserID='$UserID',FirstName='$FirstName',LastName='$LastName',Address1='$Address1', 
		City='$City', State='$State', Zip='$ZIP' WHERE UserID='$UserID'";
		$conn->query($sql);
		header("Location: MYSQL4.php");
	}
	else
	{
		echo "Please make sure that all fields are not left empty!";
	}
}
?>