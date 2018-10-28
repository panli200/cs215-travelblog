<?php

	$servername = "localhost";
	$username = "root";
	$password = "root";
	$dbName = "test";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbName);

	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 

	$userName = $_POST['userName'];
	$passWord = sha1($_POST['passWord']);
	$re_passWord = sha1($_POST['re_passWord']);
	if ($passWord == $re_passWord) {
		// create new user
		$sql = "INSERT INTO tb_user (userName, passWord) VALUES ('" . $userName . "', '" . $passWord . "')";
		if ($conn->query($sql) === TRUE) {
    		echo "New record created successfully";
		} else {
    		echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}
	$conn->close();