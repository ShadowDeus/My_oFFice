<?php
// Database credentials
$host = 'localhost';
$dbname ='antique';
$name = 'root';
// $email = '';
$password = '';

// Establish MySQLi connection
$conn = new mysqli($host, $name, $password, $dbname);

// check connection
 if ($conn->connect_error) { 
   die("connection failed: " . $conn->connect_error);

 }
// echo "connected successfully";