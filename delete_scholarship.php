<?php

$username = "root"; 
$password = ""; 
$database = "project"; 

// Create connection
$conn = new mysqli("localhost", $username, $password, $database); 


// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$id=$_REQUEST['id'];
$query = "DELETE FROM scholarships WHERE scholarship_id=$id"; 
$result = mysqli_query($conn,$query) ;
header("Location: view_scholarship.php"); 
$conn->close();
 ?>


