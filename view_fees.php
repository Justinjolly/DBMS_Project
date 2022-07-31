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
          <td bgcolor="#d63447"> <font color="white"><font face="Verdana" size=4>Delete</font> </td>


      </tr>';


      $sel_query="Select * from fees;";
      $result = mysqli_query($mysqli,$sel_query);
      while($row = mysqli_fetch_assoc($result)) { ?>
      <tr>
      <td align="center"><?php echo $row["fee_id"]; ?></td>
      <td align="center"><?php echo $row["student_name"]; ?></td>
      <td align="center"><?php echo $row["adm_no"]; ?></td>
      <td align="center"><?php echo $row["fee_amount"]; ?></td>
      <td align="center"><?php echo $row["department"]; ?></td>
      <td align="center">
      <a href="delete_fees.php?id=<?php echo $row["fee_id"]; ?>">Delete</a>
      </td>
      </tr>
      <?php }

?>
  </center>
</body>
</html>


