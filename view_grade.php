<html>
    <head>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <title>Grade Details</title>
  <script language="JavaScript" type="text/javascript">
function checkDelete(){
    return confirm('Are you sure?');
}
</script>
    </head>
<body>
    <center>
<?php 


$username = "root"; 
$password = ""; 
$database = "project"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 
// $query = "SELECT * FROM grades";
 

print "<h2>STUDENT DETAILS</h2>";
print ("\r\n");

echo '<table table class="table table-bordered table-hover  " border="1" cellspacing="4" cellpadding="4"> 
      <tr> 
          <td bgcolor="#d63447"> <font color="white"><font face="Verdana" size=4>Admission No</font> </td> 
          <td bgcolor="#d63447"> <font color="white"><font face="Verdana" size=4>Name</font> </td> 
          <td bgcolor="#d63447"> <font color="white"><font face="Verdana" size=4>Program</font> </td> 
          <td bgcolor="#d63447"> <font color="white"><font face="Verdana" size=4>Dept</font> </td> 
          <td bgcolor="#d63447"> <font color="white"><font face="Verdana" size=4>Subject 1</font> </td> 
          <td bgcolor="#d63447"> <font color="white"><font face="Verdana" size=4>grade 1</font> </td>
          <td bgcolor="#d63447"> <font color="white"><font face="Verdana" size=4>Subject 2</font> </td> 
          <td bgcolor="#d63447"> <font color="white"><font face="Verdana" size=4>grade 2</font> </td> 
          <td bgcolor="#d63447"> <font color="white"><font face="Verdana" size=4>Subject 3</font> </td> 
          <td bgcolor="#d63447"> <font color="white"><font face="Verdana" size=4>grade 3</font> </td> 
          <td bgcolor="#d63447"> <font color="white"><font face="Verdana" size=4>Subject 4</font> </td>
          <td bgcolor="#d63447"> <font color="white"><font face="Verdana" size=4>grade 4</font> </td> 
          <td bgcolor="#d63447"> <font color="white"><font face="Verdana" size=4>Subject 5</font> </td> 
          <td bgcolor="#d63447"> <font color="white"><font face="Verdana" size=4>grade 5</font> </td> 
          <td bgcolor="#d63447"> <font color="white"><font face="Verdana" size=4>Subject 6</font> </td>
          <td bgcolor="#d63447"> <font color="white"><font face="Verdana" size=4>grade 6</font> </td> 
          <td bgcolor="#d63447"> <font color="white"><font face="Verdana" size=4>Delete</font> </td>
      </tr>';
      $sel_query="Select * from grades  
      JOIN registration  ON registration.admissonNo=grades.adm_no 
      JOIN subject  ON grades.adm_no =subject.adm_no;";
      $result = mysqli_query($mysqli,$sel_query);
      while($row = mysqli_fetch_assoc($result)) { ?>
      <tr>
      <td align="center"><?php echo $row["admissonNo"]; ?></td>
      <td align="center"><?php echo $row["name"]; ?></td>
      <td align="center"><?php echo $row["program"]; ?></td>
      <td align="center"><?php echo $row["department"]; ?></td>
      <td align="center"><?php echo $row["subject1"]; ?></td>
      <td align="center"><?php echo $row["sub_1"]; ?></td>
      <td align="center"><?php echo $row["subject2"]; ?></td>
      <td align="center"><?php echo $row["sub_2"]; ?></td>
      <td align="center"><?php echo $row["subject3"]; ?></td>
      <td align="center"><?php echo $row["sub_3"]; ?></td>
      <td align="center"><?php echo $row["subject4"]; ?></td>
      <td align="center"><?php echo $row["sub_4"]; ?></td>
      <td align="center"><?php echo $row["subject5"]; ?></td>
      <td align="center"><?php echo $row["sub_5"]; ?></td>
      <td align="center"><?php echo $row["subject6"]; ?></td>
      <td align="center"><?php echo $row["sub_6"]; ?></td>
      <td align="center">
      <a href="delete_grade.php?id=<?php echo $row["admissonNo"]; ?>" onclick="return checkDelete()">Delete</a>
      </td>
      </tr>
      <?php }

?>
  </center>
</body>
</html>


