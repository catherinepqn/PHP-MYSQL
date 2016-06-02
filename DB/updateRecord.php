<?php
	echo "Update information:</p>";
	if (isset($_POST["CustomerID"]))
	{
		require("fullControl.php");
		$customerID= $_POST["CustomerID"];
		if(isset($_POST["EmailAddress"]))
		{
			$emailAddress= $_POST["EmailAddress"];
			$sql ="UPDATE EmailAddress SET CustomerID=".mysqli_real_escape_string($conn, $customerID)
			.", EmailAddress=".mysqli_real_escape_string($conn, $emailAddress)
			."' WHERE CustomerID='".mysqli_real_escape_string($conn, $customerID)."';";
				 echo $sql. "</p>";
				 $result = $conn->query($sql);
			die;
		}
	
		$sql = "SELECT CustomerID, EmailAddress FROM EmailList WHERE CustomerID='".mysqli_real_escape_string($conn, $customerID)."';";
		$result = $conn->query($sql);
		//echo $sql. "</p>";
			if (!$result)
			{
				echo "No records returned:</p> ".mysqli_error($conn);
			}
			else
			{	
				//if there are rows in the dataset, output each data of each row
				if($result->num_rows >0)
				{	
					while ($row = $result->fetch_assoc()) 
					{
						echo "<form action='updateRecord.php' method='post'>";
						//echo "CustomerID: ".htmlentities($row["CustomerID"])." --- EmailAddress: ".htmlentities($row["EmailAddress"])."<br>";
						echo "CustomerID:<input type ='text' name='CustomerID' value='".htmlentities($row["CustomerID"])."'></p>";
						echo "EmailAddress:<input type ='text' name='EmailAddress' value='".htmlentities($row["EmailAddress"])."'></p>";
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
			}
			else
			{
				$customerID='';
				echo "No Customer Selected.";
				die;
			}
			
			
			
?>