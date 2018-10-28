<?php
	session_start();

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


	$accountName = $_POST['userName'];
	$accountPwd = sha1($_POST['passWord']);

	$sql = "select * from tb_user where userName = '" . $accountName . "' and passWord = '" . $accountPwd . "'";
	$result = $conn -> query($sql);
	if($result->num_rows > 0) {
		while($row = $result -> fetch_assoc()){
			$_SESSION['userId'] = $row['userId'];	
		}
	}
	$conn->close();