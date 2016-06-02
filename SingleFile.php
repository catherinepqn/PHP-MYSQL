<?php include("header.php")?>
<!DOCTYPE html>
<html><head>
  <title>Single File Action Form</title>
</head>

<?php
//Want to do as much as possible before anything is sent to browser.
$validForm = true;

if (isset($_GET["UserName"]))
{
	$Name=$_GET["UserName"];
}
	else
	{
		$Name="";
		$validForm =false;
	}
if (isset($_GET["UserAge"]))
{
	$Age=$_GET["UserAge"];
}	
	else
	{
		$Age="";
		$validForm = false;
	}
//checks if name is numeric
if (is_numeric($Name))
{
	$nameMessage = " Name cannot be a number.";
	$validForm =false;
}
	else
	{
		$nameMessage= "";
	}
//checks if age is numeric
if (!(is_numeric($Age)) && $Age !="")
{
	$ageMessage = " Age must be a number.";
	$validForm =false;
}
	else if ($Age= "")
	{
	$validForm =false;
	}
	else
	{
		$ageMessage="";
	}
?>


<!DOCTYPE html>
<html>
	<body>
		<?php 
		if($validForm == false)
		{
		?>
		<u><h3>A Single File Action Form</h3></u></p>
		<form action="SingleFile.php" method="get">
		Your Name:<input type="text" name="UserName" value="<?php echo $Name;?>">
		<span style="color: red"><?php echo $nameMessage;?></span></p> <!--will display error in red -->
		
		Your Age: <input type="text" name="UserAge" value="<?php echo $Age;?>">
		<span style="color: red"><?php echo $ageMessage;?></span></p><!--will display error in red--> 
		<button type="submit">Submit</button>
		</form>
		<?php
		} else
		{
			echo "Form is valid.";
		
		}
		?>
	</body>
</html>