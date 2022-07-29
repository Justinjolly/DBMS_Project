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

    $sql="update `grades` set `graph_theory`='$data_gt',`operating_system`=''$data_os',`database_management_system`='$data_dbms',`computer_organization_and_architecture`='$data_coa',`professional_ethic`='$data_pe',`constitution_of_india`=''$data_coi' where adm_no='$data_admno' ";
    $result=mysqli_query($data,$sql);

  
    if($result){
        header("Location:main.html?UploadSuccess");
    }
    else{
        echo "failed";
    }

?>