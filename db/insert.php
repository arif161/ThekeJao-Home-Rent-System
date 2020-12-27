<?php 
	
	$Location =  $_POST['Location_Entry'];
	$Room_Type = $_POST['Room_Type'];
	$Guest = $_POST['Guest'];
	
	require_once('../db_config.php');

	$sql = "Insert into host VALUES(NULL, '$Location', '$Room_Type', '$Guest')";

	$conn = new mysqli($servername, $username, $password, $dbname);

	$result = $conn->query($sql);

	if (!$result)
	{
		echo "Error during insertion!<br>";
		echo mysqli_error($conn);
	}
	else
	{
		echo "Successfully added Host info. <br>";
	}

	$conn->close();

	echo "<a href='../index.php'>Back</a>"
	// php header("Location: ../index.php'"); 

?>