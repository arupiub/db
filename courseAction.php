<?php	
	$courseID = $_POST['courseID'];
	$credits = $_POST['credits'];
	$courseName = $_POST['courseName'];
	$semID = $_POST['semID'];

	// Database connection
	$conn = new mysqli('localhost','root','','db');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$sql = "INSERT INTO course (courseID, credits, courseName, semID)
		VALUES ('$courseID', '$credits', '$courseName', '$semID')";
		if ($conn->query($sql) === TRUE) {
		  echo "New record created successfully";
		} else {
		  echo "Error: " . $sql . "<br>" . $conn->error;
		}
		$conn->close();
	}
?>