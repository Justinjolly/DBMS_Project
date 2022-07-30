<?php

$connection=new mysqli("localhost","root","","project");

if($_POST)

{
    $email=$_POST['email'];

    $selectquery=mysqli_query($connection,"select * from admin where email='{$email}'") or die(mysqli_error($connection));
    $count=mysqli_num_rows($selectquery);
    
    $row=mysqli_fetch_array($selectquery);
    $password=isset($row['password']) ;
    
    if($count>0){
      $message=("your password is ".$row['password']);
      echo "<script type='text/javascript'>alert('$message');</script>"; 
    }
    else{
      echo '<script type ="text/JavaScript">';  
      echo 'alert("Invalid email")';  
      echo '</script>';  
  }
  echo "<script> location.href='index.html'; </script>";
}


?>

<html>
   <style>
     .button{
          background-color: #9c2715;
          color: white;
     }
     .form{
          background-color: #dcdcdc;
          width: 400px;
          padding-bottom: 50px;
          padding-top: 50px;
          border: 2px solid black;
     }
     .main{
         margin: 120px 0px;
     }
     .form_design{
    padding-top: 20px;
    
    }
    .title{
    
    /* #9c2715 */
    background-color:#d63447;
    color: white;
    text-align: center;
    font-weight: bold;
    width: 400px;
    padding-top: 10px;
    padding-bottom: 10px;
    font-size: 20px;
    border: 2px solid black;
    border-bottom: none;

}
     .background{
    background-size: 100% 100%;
    background-repeat: no-repeat;
    background-attachment: fixed;
}
   </style>
     <body background="images/SJCET_PALAI_College_Front_View.jpg" class="background">
          <center class="main">
         
          <div class="form_design"> 
          <center class="title">Recover Password</center>
          
          
            <form method="post" class="form">
                <br>
                Email: <input type="email" name="email">
                <br>
                <br>
                <input type="submit" class="button">

            </form>
          </div>
          
          </center>
     </body>

</html>
