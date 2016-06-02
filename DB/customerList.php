<?php include("header.php")?>
<?php
	require("fullControl.php");
	$sql = "SELECT UserID, FirstName, LastName, Address1, City, State, Zip FROM Customers;";
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
				echo "UserID: ".htmlentities($row["UserID"])." Name: ".htmlentities($row["FirstName"])." ".htmlentities($row["LastName"])."<br>".
				"Address: ".htmlentities($row["Address1"]).", ".htmlentities($row["City"]).", ".htmlentities($row["State"])." ".htmlentities($row["Zip"])."<br>";
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