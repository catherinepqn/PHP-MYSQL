<?php include("header.php")?>
<!DOCTYPE html>
	<body>
	<h1><u>Form #1 Information</u></p></h1>
	
	<!-- Start of PHP -->
	<?php 
		//session_start();
		echo "The first name is <strong><u> ".$_GET["First"]."</u></strong></p>";
		echo "The last name is <strong><u> ".$_GET["Last"]."</u></strong></p>";
		
		//assigns information to variables 
		$First = $_GET["First"];
		$Last =$_GET["Last"];
		
		echo "<strong>Is this the correct length?</strong></p>";
		
		//checks that first name is no more than 30 characters
		if (strlen($First)>30 && strlen($Last)<30)
		{
			echo "No, the first name is too long.</p>";
			echo "<a href='Form1.php?First=".$First."'> Click here to fix first name.</a></p>";
			die;
		}
		//checks that last name is no more than 30 characters
		if (strlen($First)<30 && strlen($Last)>30)
		{
			echo "No, the last name is too long.</p>";
			echo "<a href='Form1.php?Last=".$Last."'> Click here to fix last name. </a></p>";
			die;
		}
		
		if (strlen($First)>30 && strlen ($Last)>30)
		{
			echo "No, both the first name and last name are too long.</p>";
		}
		else 
		{
			echo "Yes, both first and last name are the appropriate length.</p>";
		}
				
		//back to the Form page. PHP STYLE. 
		echo "<a href='Form1.php'>Return to Form</a></p>";
	?>
	<!-- End of PHP -->
	</body>
</html>