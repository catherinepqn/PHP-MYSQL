<?php include("header.php")?>
<!DOCTYPE html>
<html>
	<body>
		<title>Delivery Form</title>
		<h1><u>Delivery Form</u></h1></p>
		
		<!-- when the submit button is clicked, will send information to form exercise -->
		<form method="get" action="http://rhaines.odu.edu/it461/formexercisesubmit.php">
		First Name:<input type="text" name="FName"></textarea></p>
		Last Name:<input type="text" name="LName"></textarea></p>
		Email: <input type="text" name="EmailAddr"></p>
		Password: <input type="password" name="Pwd"></p>
		Are you at least 13 years old? :
		<input type="radio" name="Minor"
		<?php if (isset($Minor) && $Minor=="yes") echo "checked";?>
		value="No">Yes
		<input type="radio" name="Minor"
		<?php if (isset($Minor) && $Minor=="no") echo "checked";?>
		value="Yes">No
		
		</p> Would you like to be added to the e-mail list? :
		<input type="radio" name="EmailList"
		<?php if (isset($EmailList) && $EmailList=="yes") echo "checked";?>
		value="Yes">Yes
		<input type="radio" name="EmailList"
		<?php if (isset($EmailList) && $EmailList=="no") echo "checked";?>
		value="No">No
		<p><button type="submit"> Submit the Form </button></p>
		</form>
	</body>
</html>