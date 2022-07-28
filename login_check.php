<?php

$host="localhost";
$user="root";
$password="";
$db="sms_project";
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
        header("location:main.php");//change with the details page later
    }
    else{
        echo "USERNAME OR PASSWORD IS WRONG";
    }
}
?>
