<html>
    <head>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <title>Scholarship Details</title>
    </head>
<body>
    <center>
<?php 


$username = "root"; 
$password = ""; 
$database = "project"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 
$query = "SELECT * FROM scholarships";

print "<h2>STUDENT SCHOLARSHIP DETAILS</h2>";
print ("\r\n");

echo '<table table class="table table-bordered table-hover  " border="1" cellspacing="4" cellpadding="4"> 
      <tr> 
          <td bgcolor="#d63447"> <font color="white"><font face="Verdana" size=4>Scholarship id</font> </td> 
          <td bgcolor="#d63447"> <font color="white"><font face="Verdana" size=4>Scholarship type</font> </td> 
          <td bgcolor="#d63447"> <font color="white"><font face="Verdana" size=4>Student name</font> </td> 
          <td bgcolor="#d63447"> <font color="white"><font face="Verdana" size=4>course</font> </td> 
          <td bgcolor="#d63447"> <font color="white"><font face="Verdana" size=4>Admission No</font> </td> 
          
      </tr>';

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["scholarship_id"];
        $field2name = $row["scholarship_type"];
        $field3name = $row["scholarship_student_name"];
        $field4name = $row["scholarship_student_course"];
        $field5name = $row["adm_no"]; 
    

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
