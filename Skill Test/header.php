<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
  <title>A Whole New Server</title>

  <!--Bootstap courtesy of W3 School Tutorials --> 	
  <html lang="en">  
  <title>Bootstrap Theme</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>

<body>
<!--Navigation bar with dropdown -->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="../"><span class="glyphicons glyphicons-skull"></span>Main Page</a>
    </div>
	<!--Start of the list -->
    <ul class="nav navbar-nav">
	
		 <!-- In Class Assignments -->
		  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">In Class Assignments <span class="caret"></span></a>
			<ul class="dropdown-menu">
				<li><a href="../variables.php">Variables Form</a></li>
				<li><a href="../DeliveryForm.php">Form Skill</a><li>
				<li><a href="../OtherSimpleForm.php">Other Simple Form</a></li>
				<li><a href="../stringform.php">String Form</a></li>
				<li><a href="../SingleFile.php">Single File</a></li>
			</ul>
		  </li><!-- end of In Class Assignments -->
		  
		  <!-- Skill Practice -->
		  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Skill Practice <span class="caret"></span></a>
			<ul class="dropdown-menu">
				<li><a href="./Form1.php">Form #1</a></li>
				<li><a href="./Form2.php">Form #2</a></li>
				<li><a href="./PHPValidate1.php">PHP Validate #1</a></li>
				<li><a href="./PHPValidate2.php">PHP Validate #2</a></li>
				<li><a href="./MYSQL.php">PHP and MYSQL #1</a></li>
				<li><a href="./MYSQL2.php">PHP and MYSQL #2</a></li>
				<li><a href="./MYSQL3.php">PHP and MYSQL #3</a></li>
			</ul>
		  </li> <!--end of Skill Practice -->
		  
		  <!-- DB-->
		   <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">DB Practice<span class="caret"></span></a>
			<ul class="dropdown-menu">
			<li><a href="../DB/createTable.php">Create Table</a></li>
			<li><a href="../DB/insertRecord.php">Insert Record</a></li>
			<li><a href="../DB/customerList.php">Customer List</a></li>
			<li><a href="../DB/emailList.php">Email List</a></li>
			</ul>
		  </li><!--end of DB -->
		  
    </ul><!--end of list -->
  </div><!-- end of container fluid-->
</nav>	<!--end of nav bar-->
	
</body>
</html>