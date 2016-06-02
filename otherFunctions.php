<?php
	function grabPostField ($nameOfField)
	{
		if (isset($_POST[$nameOfField]))
		{
			return $_POST[$nameOfField];
		}
		else
		{
			return "";
		}
	}
		//checks for length of entry
	function isEntry($userVariable,$minLength,$maxLength)
	{
		if (strlen($userVariable)<$minLength)
		{
			return false;
		}
		else if (strlen($userVariable)>$maxLength)
		{
			return false;
		}
		else
		{
			return true; 
		}
	}
?>