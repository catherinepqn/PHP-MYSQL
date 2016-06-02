<?php
	require("fullControl.php");
	$sql = "SELECT CustomerID, EmailAddress FROM EmailList;";
	//result is a dataset
	$result = $conn->query($sql); 
	if (!$result)
	{
		echo "No records returned:</p> ".mysqli_error($conn);
	}
	else
	{
		//echo /*$sql.*/ "Query successful. Hot damn.</p>";
		
		//if there are rows in the dataset, output each data of each row
		if($result->num_rows >0)
		{	
			while ($row = $result->fetch_assoc()) 
			{
				echo "<form action='updateRecord.php' method='post'>";
				echo "CustomerID: ".htmlentities($row["CustomerID"])." --- EmailAddress: ".htmlentities($row["EmailAddress"])."<br>";
				echo "<input type ='hidden' name='CustomerID' value='".htmlentities($row["CustomerID"])."'>";
				//echo "<input type ='hidden' name='EmailAddress' value='".htmlentities($row["EmailAddress"])."'>";
				echo "<button type ='submit'>Update</button>";
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