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
    $data_sem=$_POST['semester'];
    $data_admno=$_POST['admission'];
    $data_sub1=$_POST['subject_1'];
    $data_sub2=$_POST['subject_2'];
    $data_sub3=$_POST['subject_3'];
    $data_sub4=$_POST['subject_4'];
    $data_sub5=$_POST['subject_5'];
    $data_sub6=$_POST['subject_6'];
    $data_sname1=$_POST['sname_1'];
    $data_sname2=$_POST['sname_2'];
    $data_sname3=$_POST['sname_3'];
    $data_sname4=$_POST['sname_4'];
    $data_sname5=$_POST['sname_5'];
    $data_sname6=$_POST['sname_6'];

    $sql1="INSERT INTO `grades`(`semester`,`adm_no`,`subject1`,`subject2`,`subject3`,`subject4`,`subject5`,`subject6`) VALUES('$data_sem','$data_admno','$data_sub1','$data_sub2','$data_sub3','$data_sub4','$data_sub5',' $data_sub6')";
    $sql2="INSERT INTO `subject`(`adm_no`,`sub_1`,`sub_2`,`sub_3`,`sub_4`,`sub_5`,`sub_6`) VALUES('$data_admno','$data_sname1','$data_sname2','$data_sname3','$data_sname4','$data_sname5',' $data_sname6')";
    $result1=mysqli_multi_query($data,$sql1);
    $result2=mysqli_query($data,$sql2);
  
    if($result1 && $result2){
        header("Location:main.html?UploadSuccess");
    }
    else{
        echo "failed";
    }
?>
