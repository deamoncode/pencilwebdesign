<?php

class db_connector
{
	public function __construct()
	{
		
	}
	
	public function connect($servername, $username, $password)
	{
		$conn = new mysqli($servername, $username, $password);
		
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		echo "Connected successfully";
	}
}
?> 