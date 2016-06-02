<?php
if(isset($_POST["Confirm"]))
{	$confirm = htmlentities($_POST["Confirm"]);
		if ($confirm=="Yes")
		{
			if (isset($_POST["LastName"]))
			{
				$LastName = htmlentities($_POST["LastName"]);
			}
			if (isset($_POST["FirstName"]))
			{
				$FirstName = htmlentities($_POST["FirstName"]);
			}
			echo "Deleting User: ".$LastName.",".$FirstName."</p>";
			require ("fullControl.php");
			$sql ="DELETE FROM Customers WHERE LastName =".mysqli_real_escape_string($conn, $LastName)."AND FirstName =".mysqli_real_escape_string($conn,$FirstName).";";
			echo $sql;
			die;
			header("Location: sortZIP.php");
		}

}
	echo "You want to delete User: ".htmlentities($_POST["LastName"]).",".htmlentities($_POST["FirstName"])." ?</p>";
	echo "<form method='post'; action='deleteRecord.php'>";
	//needs input type to hold Customer ID
	echo "<input type= 'checkbox' name='Confirm' value='Yes'> I am sure.</p>";
	echo "<button type='submit'>Confirm</button>";
	echo"</form>";
?>