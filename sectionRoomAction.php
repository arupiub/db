<?php
	$secID = $_POST['secID'];
	$facultyID = $_POST['facultyID'];
	$roomNo = $_POST['roomNo'];
	$startTime = $_POST['startTime'];
	$endTime = $_POST['endTime'];
	$days = $_POST['days'];

	// Database connection
	$conn = new mysqli('localhost','root','','db');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$sql = "INSERT INTO sectionroomfaculty (secID, facultyID, roomNo, startTime, endTime, days)
		VALUES ('$secID', '$facultyID', '$roomNo', '$startTime', '$endTime', '$days')";
		if ($conn->query($sql) === TRUE) {
		  echo "New record created successfully";
		} else {
		  echo "Error: " . $sql . "<br>" . $conn->error;
		}
		$conn->close();
	}
?>