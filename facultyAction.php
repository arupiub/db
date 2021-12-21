<?php	
	$facultyID = $_POST['facultyID'];
	$facultyName = $_POST['facultyName'];
	$deptID = $_POST['deptID'];

	// Database connection
	$conn = new mysqli('localhost','root','','db');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$sql = "INSERT INTO faculty (facultyID, facultyName, deptID)
		VALUES ('$facultyID', '$facultyName', '$deptID')";
		if ($conn->query($sql) === TRUE) {
		  echo "New record created successfully";
		} else {
		  echo "Error: " . $sql . "<br>" . $conn->error;
		}
		$conn->close();
	}
?>