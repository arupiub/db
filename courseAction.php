<?php	
	$courseID = $_POST['courseID'];
	$credit = $_POST['credit'];
	$courseName = $_POST['courseName'];
	$semID = $_POST['semID'];

	// Database connection
	$conn = new mysqli('localhost','root','','db');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$sql = "INSERT INTO course (courseID, credit, courseName, semID)
		VALUES ('$courseID', '$credit', '$courseName', '$semID')";
		if ($conn->query($sql) === TRUE) {
		  echo "New record created successfully";
		} else {
		  echo "Error: " . $sql . "<br>" . $conn->error;
		}
		$conn->close();
	}
?>