<?php include("header.php")?>
<!DOCTYPE html>
<html>
	<body>
		<h1>String Form</h1></p>
		
		<form method="post" action="send_stringform.php">
		Text1: <p><input type="text" name="text1" value="<?php if (isset($_GET["text1"])){ echo $_GET["text1"];} ?>"</textarea></p>
		Text2: <p><input type="text" name="text2" value="<?php if (isset($_GET["text2"])) echo $_GET["text2"]; ?>"</textarea></p>
		<button type="submit"> Submit the Form </button></p>
		<a href="index.html">Return to Homepage</a>
		
		</form>
	</body>
</html>