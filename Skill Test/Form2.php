<?php include("header.php")?>
<!DOCTYPE html>
<html>
	<body>
		<title>Form #2</title>
		<h1><u>Form #2</u></h1></p>
		
		<!-- when the submit button is clicked, will send information to form exercise -->
		<form method="get" action="formsubmit2.php">
		First Name:<input type="text" name="FName"></textarea></p>
		Last Name:<input type="text" name="LName"></textarea></p>
		Password: <input type="password" name="Pwd"></p>
		Confirm Password: <input type="password" name="ConfirmPwd"></p>

		</p> Send me special offers :
		<input type="checkbox" name="Offers"
		<?php if (isset($Offers) && $Offers=="yes") echo "checked";?>
		value="Yes">Yes
		<input type="checkbox" name="Offers"
		<?php if (isset($Offers) && $Offers=="no") echo "checked";?>
		value="No">No
		<p><button type="submit"> Submit the Form </button></p>
		</form>
	</body>
</html>