<?php
	require("fullControl.php");
	$startAddress = "a";
	$endAddress = "j"; //why
	$sql = "SELECT CustomerID, EmailAddress FROM EmailList WHERE EmailAddress >='a' AND EmailAddress <= 'j';";
	$sql = "INSERT INTO EmailList (CustomerID, EmailAddress)
			VALUES(".mysqli_real_escape_string($conn, $startAddress).",'"
					.mysqli_real_escape_string($conn, $endAddress)."')";
	//result is a dataset
	$result = $conn->query($sql); 
	if (!$result)
	{
		echo "No records returned:</p> ".mysqli_error($conn);
	}
	else
	{
		echo /*$sql.*/ "Query successful.</p>";
		
		//if there are rows in the dataset, output each data of each row
		if($result->num_rows >0)
		{	
			while ($row = $result->fetch_assoc()) 
			{
				echo "<form action='deleteRecord.php' method='post'>";
				echo "CustomerID: ".htmlentities($row["CustomerID"])." --- EmailAddress: ".htmlentities($row["EmailAddress"])."<br>";
				echo "<input type ='text' name='CustomerID' value='".htmlentities($row["CustomerID"])."'>";
				echo "<input type ='text' name='EmailAddress' value='".htmlentities($row["EmailAddress"])."'>";
				echo "<button type ='submit'>Delete</button>";
				echo "</form>";
				echo "</p>";
				
			}
		}
		else
		{
			echo "No results returned.";
		}
	}
	$conn->close();
	
?>