<?php
	$semID = $_POST['semID'];
	$semester = $_POST['semester'];
	$year = $_POST['year'];

	// Database connection
	$conn = new mysqli('localhost','root','','db');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$sql = "INSERT INTO semester (semID, semester, year)
		VALUES ('$semID', '$semester', '$year')";
		if ($conn->query($sql) === TRUE) {
		  echo "New record created successfully";
		} else {
		  echo "Error: " . $sql . "<br>" . $conn->error;
		}
		$conn->close();
	}
?>