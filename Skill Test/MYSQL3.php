<?php include("header.php")?>
<?php	
//Prompt the user to input a starting and ending zip code
	echo "<form action='sortZIP.php' method='post'>";
	echo "Starting ZIP Code: <input type ='text' name='startZIP'> ";
	echo "Ending ZIP Code: <input type='text' name='endZIP' ></p>";
	echo "<button type ='submit'>Submit</button>";
	echo "</form></p>";
?>