<!DOCTYPE html>
<!-- comment made in VS code -->
<!-- comment from github -->
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Form</title>
		<link rel="stylesheet" href="form.css">
	</head>
	<body>
		<!-- add code here -->
		<form action="formProcess.php" method="post">
			<?php
			error_reporting(0);
			?>
			<h2>Add a user</h2>
			<label for="fname">First name:</label><br>
			<input value="<?php echo $_GET['fname'];?>" type="text" id="fname" name="fname">
			<span style="color: red";><?php echo $_GET["fnameError"];?></span><br>
			<label for="lname">Last name:</label><br>
			<input value="<?php echo $_GET['lname'];?>"type="text" id="lname" name="lname">
			<span style="color: red";><?php echo $_GET["lnameError"];?></span><br>
			<br>
			<input type="submit" value="submit">
		</form>	
		<script src="form.js"></script>
	</body>
</html>	
