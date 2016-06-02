<?php include("header.php")?>
<!DOCTYPE html>
<html>
	<body>
		<h1>Variables Form</h1></p>
		
		<form method="post" action="send_variables.php">
		<?php if(isset($_GET["text"])){ ?>
		Text: <p><input type="text" name="text" value="<?php echo $_GET["text"];?>"</textarea></p>
		<?php } else { ?>
		Text: <p><input type="text" name="text"></textarea></p>
		<?php } ?>
		<button type="submit"> Submit the Form </button></p>
		<a href="index.html">Return to Homepage</a>
		</form>
	</body>
</html>