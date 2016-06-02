<?php include("header.php")?>
<!--------It literally connects you to the database.-------------->
<?php
	$conn = mysqli_connect ('localhost', 'cnguy007_admin', 'adminpass','cnguy007_IT461');
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to DB.".mysqli_connect_error();
	}
	//Take the information and display it on the page

		if (isset($_POST["startZIP"]))
			{
				$start = htmlentities($_POST["startZIP"]);

			}
		else
		{ 
			$start='';
		}
		if(isset($_POST["endZIP"]))
		{
				$end =htmlentities($_POST["endZIP"]);
		}
		else
		{
			$end='';
		}
		#$sql = "SELECT UserID WHERE Zip BETWEEN ".$start." AND ".$end." FROM Customers;";
		$sql = "SELECT * FROM Customers WHERE Zip BETWEEN ".$start." AND ".$end." ORDER BY LastName;";
		$result = $conn->query($sql);
		if (!$result)
		{
			echo "Error creating table: " . $conn->error;
			echo "<br>";
		}
		else
		{
			echo "Customers Table created successfully";
			
			while($row = $result->fetch_assoc())
			{	
				echo "<form action='deleteRecord.php' method='post'>";
				echo "<br>Name: ".htmlentities($row["LastName"]).", ".htmlentities($row["FirstName"])." --- ZIP Code: ".htmlentities($row["Zip"]);
				echo "<input type='hidden' name='UserID' value='".htmlentities($row["UserID"])."'>";
				echo "<button type ='submit'>Delete</button>";
				echo "</form>";
				echo "</p>";
			}
		} 
	
?>