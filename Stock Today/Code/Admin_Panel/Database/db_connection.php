<?php
// Database configuration
$host = 'localhost'; 
$username = 'root';  
$password = '';     
$database = 'Blogs';  

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
} 

?>