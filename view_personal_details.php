<html>
    <head>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <title>Student Details</title>
    </head>
<body>
    <center>
<?php 


$username = "root"; 
$password = ""; 
$database = "project"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 
$query = "SELECT * FROM registration";

print "<h2>STUDENT DETAILS</h2>";
print ("\r\n");

echo '<table table class="table table-bordered table-hover  " border="1" cellspacing="4" cellpadding="4"> 
      <tr> 
          <td bgcolor="#d63447"> <font color="white"><font face="Verdana" size=4>Admission No</font> </td> 
          <td bgcolor="#d63447"> <font color="white"><font face="Verdana" size=4>Name</font> </td> 
          <td bgcolor="#d63447"> <font color="white"><font face="Verdana" size=4>Gender</font> </td> 
          <td bgcolor="#d63447"> <font color="white"><font face="Verdana" size=4>DOB</font> </td> 
          <td bgcolor="#d63447"> <font color="white"><font face="Verdana" size=4>Parent Name</font> </td> 
          <td bgcolor="#d63447"> <font color="white"><font face="Verdana" size=4>Email</font> </td>
          <td bgcolor="#d63447"> <font color="white"><font face="Verdana" size=4>Program</font> </td> 
          <td bgcolor="#d63447"> <font color="white"><font face="Verdana" size=4>Dept</font> </td> 
          <td bgcolor="#d63447"> <font color="white"><font face="Verdana" size=4>Contact</font> </td> 
          <td bgcolor="#d63447"> <font color="white"><font face="Verdana" size=4>City</font> </td> 
          <td bgcolor="#d63447"> <font color="white"><font face="Verdana" size=4>District</font> </td>
      </tr>';

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["admissonNo"];
        $field2name = $row["name"];
        $field3name = $row["gender"];
        $field4name = $row["dob"];
        $field5name = $row["parentName"]; 
        $field6name = $row["email"];
        $field7name = $row["program"];
        $field8name = $row["department"]; 
        $field9name = $row["contact"];
        $field10name = $row["p_city"];
        $field11name = $row["p_district"]; 
        

        echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 
                  <td>'.$field4name.'</td> 
                  <td>'.$field5name.'</td> 
                  <td>'.$field6name.'</td> 
                  <td>'.$field7name.'</td> 
                  <td>'.$field8name.'</td> 
                  <td>'.$field9name.'</td> 
                  <td>'.$field10name.'</td> 
                  <td>'.$field11name.'</td>
              </tr>';
    }
    $result->free();
} 
?>
  </center>
</body>
</html>