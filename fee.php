<?php
$host="localhost";

$user="root";

$password="";

$db="project";

$data=mysqli_connect($host,$user,$password,$db);

if($data==false){ 
    
    die("connection error");
}
else{
    
}

    $data_fullname=$_POST['fullname'];
    $data_admno=$_POST['admission'];
    $data_amnt=$_POST['fees'];
    $data_dptm=$_POST['department'];
   
    

    $sql="INSERT INTO `fees`(`student_name`,`adm_no`,`fee_amount`,`department`) VALUES('$data_fullname','$data_admno','$data_amnt','$data_dptm')";
    $result=mysqli_query($data,$sql);

  
    if($result){
        header("Location:main.html?UploadSuccess");
    }
    else{
        echo "failed";
    }
?>