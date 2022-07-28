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
    $data_parent=$_POST['username'];
    $data_admno=$_POST['admission'];
    $data_email=$_POST['email'];
    $data_gender=$_POST['gender'];
    $data_dob=$_POST['DOB'];
    $data_course=$_POST['level'];
    $data_dptm=$_POST['department'];
    $data_contc=$_POST['phonenumber'];
    $data_pstate=$_POST['pstate'];
    $data_pdstrct=$_POST['pDistrict'];
    $data_pcity=$_POST['pcity'];
    $data_ppin=$_POST['pzip'];
    $data_pcontct=$_POST['pphonenumber'];
    $data_tstate=$_POST['tstate'];
    $data_tdstrct=$_POST['tDistrict'];
    $data_tcity=$_POST['tcity'];
    $data_tpin=$_POST['tzip'];
    $data_tcontct=$_POST['tphonenumber'];
    
    $sql="update `registration` set `name`='$data_fullname',`parentName`='$data_parent',`gender`='$data_gender',`dob`='$data_dob',`email`=' $data_email',`program`='$data_course',`department`='$data_dptm',`contact`='$data_contc',`p_state`='$data_pstate',`p_district`='$data_pdstrct',`p_city`='$data_pcity',`p_pincode`='$data_ppin',`p_contact`='$data_pcontct',`t_state`='$data_tstate',`t_district`='$data_tdstrct',`t_city`='$data_tcity',`t_pincode`='$data_tpin',`t_contact`='$data_tcontct' where `admissonNo`='$data_admno' ";
    $result=mysqli_query($data,$sql);

  
    if($result){
        header("Location:main.html?UploadSuccess");
    }
    else{
        echo "failed";
    }

?>