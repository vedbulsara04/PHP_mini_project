<!DOCTYPE html>
<html>

<head>
	<title>Contact Form</title>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => contact_form
		$conn = mysqli_connect("localhost", "root", "", "contact_form");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking the 2 values from the form data(input)
		$name = $_REQUEST['name'];
		$email = $_REQUEST['email'];
		
		// Performing insert query execution
		$sql = "INSERT INTO contact_me VALUES ('$name', '$email')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>Your contact info has been submitted!</h3>";

			echo nl2br("\n$name\n $email");
		} else{
			echo "ERROR: could not submit the form! $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>
</html>
