<?php
    $servername="localhost";
	$username="root";
	$password="";
	
	$conn = new mysqli($servername, $username, $password);
	
	$sql = "CREATE DATABASE file_upload_system";
	
	if($conn->query($sql)==TRUE)
	{
		echo "Database created successfully";
	}
	else
	{
		echo "Error creating database: " . $conn->error;
	}
	
	$conn->close();
?>

