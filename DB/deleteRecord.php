<?php include("header.php")?>
<?php
if(isset($_POST["Confirm"]))
{	$confirm = htmlentities($_POST["Confirm"]);
		if ($confirm=="Yes")
		{
			if (isset($_POST["CustomerID"]))
			{
				$CustomerID = htmlentities($_POST["CustomerID"]);
			}
			echo "Deleting CustomerID: ".$CustomerID."</p>";
			require ("fullControl.php");
			$sql ="DELETE FROM EmailList WHERE CustomerID =".mysqli_real_escape_string($conn, $CustomerID).";";
			if (mysqli_query($conn, $sql)) 
				echo "</br>User deleted!";
			else 
				echo "</br>Error: " . mysqli_error($conn);
		}

}
else
{
	echo "You want to delete CustomerID: ".htmlentities($_POST["CustomerID"])." ?</p>";
	echo "<form method='post'; action='deleteRecord.php'>";
	//needs input type to hold Customer ID
	echo "<input type= 'checkbox' name='Confirm' value='Yes'> I am sure.</p>";
	echo "<input type ='hidden' name='CustomerID' value='".htmlentities($_POST['CustomerID'])."'>";
	echo "<button type='submit'>Confirm</button>";
	echo"</form>";
}

?>