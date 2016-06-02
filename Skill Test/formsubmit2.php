<?php include("header.php")?>
<!DOCTYPE html>
	<body>
	<h1><u>Form #2 Information</u></p></h1>
	
	<!-- Start of PHP -->
	<?php 
		//assigns information to variables 
		$First = $_GET["FName"];
		$Last =$_GET["LName"];
		$Pwd =$_GET["Pwd"];
		$ConfirmPwd =$_GET["ConfirmPwd"];
		$Offers =$_GET["Offers"];
		
		//session_start();
		echo "The first name is <strong><u> ".$First."</u></strong></p>";
		echo "The last name is <strong><u> ".$Last."</u></strong></p>";
		echo "The password is <strong><u>".$Pwd."</u></strong></p>";
		echo "The password is <strong><u>".$ConfirmPwd."</u></strong></p>";
		echo "Special offiers? <strong><u>".$Offers."</u></strong></p>";
		
				
		//back to the Form page. PHP STYLE. 
		echo "<a href='Form2.php'>Return to Form</a></p>";
	?>
	<!-- End of PHP -->
	</body>
</html>