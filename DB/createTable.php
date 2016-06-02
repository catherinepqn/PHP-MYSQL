<?php include("header.php")?>
<?php
echo "Note: This page would typically create a table named 'EmailList' if it was not already created</p>";
$conn = mysqli_connect ('localhost', 'cnguy007_admin', 'adminpass','cnguy007_IT461');
if (mysqli_connect_errno())
{
	echo "Failed to connect to DB.".mysqli_connect_error();
}
else
{
	echo "Connection to server successful!</p>"; 
}
	//creates a table name EmailList 
	$sql = "CREATE TABLE EmailList ( 
			CustomerID int NOT NULL, 
			EmailAddress varchar(100) NOT NULL,
			CONSTRAINT EmailListPrimaryKey PRIMARY KEY(CustomerID)
			);";
	
	//creates a connections and put table in
	if (mysqli_query($conn, $sql)) 
	{
    echo "</p>Table created successfully";
	} 
	else {
			echo "</p>".mysqli_error($conn);
		}
		
?>