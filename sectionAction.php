<?php
	$secID = $_POST['secID'];
	$secNo = $_POST['secNo'];
	$secCapacity = $_POST['secCapacity'];
	$enrolled = $_POST['enrolled'];
	$courseID = $_POST['courseID'];

	// Database connection
	$conn = new mysqli('localhost','root','','db');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$sql = "INSERT INTO section (secID, secNo, secCapacity, enrolled, courseID)
		VALUES ('$secID', '$facultyID', '$secNo', '$secCapacity', '$enrolled', '$courseID')";
		if ($conn->query($sql) === TRUE) {
		  echo "New record created successfully";
		} else {
		  echo "Error: " . $sql . "<br>" . $conn->error;
		}
		$conn->close();
	}
?>