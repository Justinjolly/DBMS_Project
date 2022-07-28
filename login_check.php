<?php

$host="localhost";
$user="root";
$password="";
$db="project";
$data=mysqli_connect($host,$user,$password,$db); //connected to database 

if($data==false){  //check connection
    die("connection error");
}

//execute when login button is clicked
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $name=$_POST['username'];  //'username' from login.php
    $pass=$_POST['password'];

    $sql="select * from admin where username='".$name."' AND password='".$pass."' ";
    //here username and password from database
    $result=mysqli_query($data,$sql);//checking whether they mathch to the db
    $row=mysqli_fetch_array($result);
    if(isset($row['role'])=="admin"){
        header("location:main.html");//change with the details page later
    }
    else{
        echo '<script type ="text/JavaScript">';  
      echo 'alert("Invalid username or password")';  
      echo '</script>';  
    
    }
    echo "<script> location.href='index.html'; </script>";
}
?>
