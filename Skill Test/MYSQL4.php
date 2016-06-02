<?php include("header.php")?>
<!DOCTYPE html>
<html lang="en">
<!--
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
 <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head> -->
<body>
<div align= "center">
 <?php
	//It literally connects you to the database.
	$conn = mysqli_connect ('localhost', 'cnguy007_admin', 'adminpass','cnguy007_IT461');
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to DB.".mysqli_connect_error();
	}
	
	//get the information from the table in the database
	$sql = "SELECT * FROM Customers;";
	
	//result is a dataset
	$result = $conn->query($sql); 
	if (!$result)
	{
		echo "No records returned:</p> ".mysqli_error($conn);
	}
	else
	{
		
	echo "<table border='1' cellpadding='10'>";
	echo'<tr><td> User ID </td><td> First Name </td><td> Last Name </td><td> Address </td><td> City </td><td> State </td><td> ZIP </td><td> Edit User</td>';
		while ($row = $result->fetch_assoc()) 
		{
		//list everything and allows you to change singular users
		echo '<tr>';
		echo '<td>'.htmlentities($row["UserID"])."</td>"
			 ."<td>".htmlentities($row["FirstName"])."</td>"
			 ."<td>".htmlentities($row["LastName"])."</td>"
			 ."<td>".htmlentities($row["Address1"])."</td>"
			 ."<td>".htmlentities($row["City"])."</td>"
			 ."<td>".htmlentities($row["State"])."</td>"
			 ."<td>".htmlentities($row["Zip"])."</td>";
		echo "<td><form action='editRecord.php' method='post'>";
		echo "<input type='hidden' name='UserID' value='".htmlentities($row["UserID"])."'>";
		echo "<input type='hidden' name='FirstName' value='".htmlentities($row["FirstName"])."'>";
		echo "<input type='hidden' name='LastName' value='".htmlentities($row["LastName"])."'>";
		echo "<input type='hidden' name='Address1' value='".htmlentities($row["Address1"])."'>";
		echo "<input type='hidden' name='City' value='".htmlentities($row["City"])."'>";
		echo "<input type='hidden' name='State' value='".htmlentities($row["State"])."'>";
		echo "<input type='hidden' name='Zip' value='".htmlentities($row["Zip"])."'>";
		echo "<button type ='submit'>Edit</button></td>";
		//echo '<td><a class = "btn btn-info" aria-label="Edit" href="editRecord.php?id='. $row['UserID'] . '"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span>';
		echo "</form></p>";
		}
		echo'</tr>';
		echo'</table>';
	}
?>
</body>
</div>
</html>
