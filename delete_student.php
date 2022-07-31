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
$query = "DELETE FROM registration WHERE admissonNo='$id'"; 
$result = mysqli_query($conn,$query) ;
header("Location: view_personal_details.php"); 
$conn->close();
 ?>


