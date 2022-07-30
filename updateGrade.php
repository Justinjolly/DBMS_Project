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

    $sql1="update `grades` set `semester`='$data_sem',`subject1`='$data_sub1',`subject2`='$data_sub2',`subject3`='$data_sub3',`subject4`='$data_sub4',`subject5`='$data_sub5',`subject6`='$data_sub6' where adm_no='$data_admno'";
    $sql2="update `subject` set `sub_1`='$data_sname1',`sub_2`='$data_sname2',`sub_3`='$data_sname3',`sub_4`='$data_sname4',`sub_5`='$data_sname5',`sub_6`='$data_sname6' where adm_no='$data_admno' ";    
            
    $result1=mysqli_multi_query($data,$sql1);
    $result2=mysqli_query($data,$sql2);
  
    if($result1 && $result2){
        header("Location:main.html?UploadSuccess");
    }
    else{
        echo "failed";
    }

?>
