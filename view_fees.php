<html>
    <head>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <title>Fee Details</title>
    </head>
<body>
    <center>
<?php 


$username = "root"; 
$password = ""; 
$database = "project"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 
$query = "SELECT * FROM fees";

print "<h2>FEE DETAILS</h2>";
print ("\r\n");

echo '<table table class="table table-bordered table-hover  " border="1" cellspacing="3" cellpadding="3"> 
      <tr> 
          <td bgcolor="#d63447"> <font color="white"><font face="Verdana" size=4>fee_id</font> </td> 
          <td bgcolor="#d63447"> <font color="white"><font face="Verdana" size=4>student_name</font> </td> 
          <td bgcolor="#d63447"> <font color="white"><font face="Verdana" size=4>adm_no</font> </td> 
          <td bgcolor="#d63447"> <font color="white"><font face="Verdana" size=4>fee_amount</font> </td> 
          <td bgcolor="#d63447"> <font color="white"><font face="Verdana" size=4>department</font> </td> 
          
      </tr>';

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["fee_id"];
        $field2name = $row["student_name"];
        $field3name = $row["adm_no"];
        $field4name = $row["fee_amount"];
        $field5name = $row["department"]; 

        echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 
                  <td>'.$field4name.'</td> 
                  <td>'.$field5name.'</td> 
                   
              </tr>';
    }
    $result->free();
} 
?>
  </center>
</body>
</html>