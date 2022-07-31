
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
          <td bgcolor="#d63447"> <font color="white"><font face="Verdana" size=4>Delete</font> </td>
      </tr>';


      $sel_query="Select * from registration;";
      $result = mysqli_query($mysqli,$sel_query);
      while($row = mysqli_fetch_assoc($result)) { ?>
      <tr>
      <td align="center"><?php echo $row["admissonNo"]; ?></td>
      <td align="center"><?php echo $row["name"]; ?></td>
      <td align="center"><?php echo $row["gender"]; ?></td>
      <td align="center"><?php echo $row["dob"]; ?></td>
      <td align="center"><?php echo $row["parentName"]; ?></td>
      <td align="center"><?php echo $row["email"]; ?></td>
      <td align="center"><?php echo $row["program"]; ?></td>
      <td align="center"><?php echo $row["department"]; ?></td>
      <td align="center"><?php echo $row["contact"]; ?></td>
      <td align="center"><?php echo $row["p_city"]; ?></td>
      <td align="center"><?php echo $row["p_district"]; ?></td>
      <td align="center">
      <a href="delete_student.php?id=<?php echo $row["admissonNo"]; ?>">Delete</a>
      </td>
      </tr>
      <?php }

?>
  </center>
</body>
</html>


