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
    $data_avail=$_POST['level'];
    $data_category=$_POST['Category'];
    $data_dptm=$_POST['department'];
   
    

    $sql="INSERT INTO `scholarships`(`scholarship_student_name`,`adm_no`,`scholarship`,`scholarship_type`,`scholarship_student_course`) VALUES('$data_fullname','$data_admno','$data_avail','$data_category','$data_dptm')";
    $result=mysqli_query($data,$sql);

  
    if($result){
        header("Location:main.html?UploadSuccess");
    }
    else{
        echo "failed";
    }
?>