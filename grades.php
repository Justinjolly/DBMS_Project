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

    $data_admno=$_POST['admission'];
    $data_gt=$_POST['gt'];
    $data_os=$_POST['os'];
    $data_coa=$_POST['coa'];
    $data_coi=$_POST['coi'];
    $data_pe=$_POST['pe'];
    $data_dbms=$_POST['dbms'];

    $sql="INSERT INTO `grades`(`adm_no`,`graph_theory`,`operating_system`,`database_management_system`,`computer_organization_and_architecture`,`professional_ethic`,`constitution_of_india`) VALUES('$data_admno','$data_gt','$data_os','$data_dbms','$data_coa','$data_pe',' $data_coi')";
    $result=mysqli_query($data,$sql);

  
    if($result){
        header("Location:main.html?UploadSuccess");
    }
    else{
        echo "failed";
    }
?>