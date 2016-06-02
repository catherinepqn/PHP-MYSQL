<?php include("header.php")?>
<?php
$conn = mysqli_connect ('localhost', 'cnguy007_admin', 'adminpass','cnguy007_IT461');
if (mysqli_connect_errno())
{
		echo "Failed to connect to DB.".mysqli_connect_error();
}
if (isset($_POST["UserID"]))
{
	$UserID = htmlentities($_POST["UserID"]);
}
else
{
	$UserID ='';
}
if(isset($_POST["Confirm"]))
{	$confirm = htmlentities($_POST["Confirm"]);
		if ($confirm=="Yes")
		{
			echo "Deleting User!";

			$sql ="DELETE FROM Customers WHERE UserID =".mysqli_real_escape_string($conn, $UserID).";";
			$conn->query($sql);
			die;
			header("Location: sortZIP.php");
		}

}
	echo "UserID: ".$UserID."</p>";
	echo "You want to delete this user?</p>";
	echo "<form method='post'; action='deleteRecord.php'>";
	echo "<input type= 'checkbox' name='Confirm' value='Yes'> I am sure.</p>";
	echo "<input type='hidden' name='UserID' value='".$UserID."'>";
	echo "<button type='submit'>Confirm</button>";
	echo"</form>";
?>