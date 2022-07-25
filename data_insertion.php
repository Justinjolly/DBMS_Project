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

if(isset($_POST['submit']))

{
    $data_fullname=$_POST['fullname'];
    $data_parent=$_POST['username'];
    $data_admno=$_POST['admission'];
    $data_email=$_POST['email'];
    $data_fees=$_POST['fees'];
    $data_gender=$_POST['gender'];
    $data_dob=$_POST['DOB'];
    $data_course=$_POST['level'];
    $data_dptm=$_POST['department'];
    $data_contc=$_POST['phonenumber'];
    $data_gt=$_POST['gt'];
    $data_os=$_POST['os'];
    $data_coa=$_POST['coa'];
    $data_coi=$_POST['coi'];
    $data_pe=$_POST['pe'];
    $data_dbms=$_POST['dbms'];
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
    

    $sql="INSERT INTO `registration`(`name`,`parentName`,`gender`,`admissonNo`,`dob`,`email`,`fees`,`program`,`department`,`contact`,`gt`,`os`,`dbms`,`coa`,`pe`,`coi`,`p_state`,`p_district`,`p_city`,`p_pincode`,`p_contact`,`t_state`,`t_district`,`t_city`,`t_pincode`,`t_contact`) VALUES('$data_fullname','$data_parent','$data_gender','$data_admno','$data_dob','$data_email','$data_fees','$data_course','$data_dptm','$data_contc','$data_gt','$data_os','$data_dbms','$data_coa','$data_pe',' $data_coi','$data_pstate','$data_pcity','$data_pdstrct','$data_ppin','$data_pcontct','$data_tstate','$data_tcity','$data_tdstrct','$data_tpin','$data_tcontct')";
    $result=mysqli_query($data,$sql);

  
    if($result){
        header("Location:main.html?UploadSuccess");
    }
    else{
        echo "failed";
    }
}
?>