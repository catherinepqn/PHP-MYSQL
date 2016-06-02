<?php include("header.php")?>
<?php

$conn = mysqli_connect ('localhost', 'cnguy007_admin', 'adminpass','cnguy007_IT461');
if (mysqli_connect_errno())
{
	echo "Failed to connect to DB.".mysqli_connect_error();
}
else
{ 
	// sql to create table
	$sql = "CREATE TABLE Customers(
	UserID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	FirstName VARCHAR(30) NOT NULL,
	LastName VARCHAR(30) NOT NULL,
	Address1 VARCHAR(50),
	City VARCHAR(50),
	State VARCHAR(50),
	Zip INT(6)
	)";

	if ($conn->query($sql) === TRUE) {
		echo "Customers Table created successfully";
		
	} else {
		echo "Error creating table: " . $conn->error;
		echo "<br>";
	}
	echo $sql;

	$conn->close();
}
?> 