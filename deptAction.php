<?php	
	$deptID = $_POST['deptID'];
	$deptName = $_POST['deptName'];
	$schoolID = $_POST['schoolID'];

	// Database connection
	$conn = new mysqli('localhost','root','','db');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$sql = "INSERT INTO dept (deptID, deptName, schoolID)
		VALUES ('$deptID', '$deptName', '$schoolID')";
		if ($conn->query($sql) === TRUE) {
		  echo "New record created successfully";
		} else {
		  echo "Error: " . $sql . "<br>" . $conn->error;
		}
		$conn->close();
	}
?>