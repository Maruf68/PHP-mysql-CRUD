<?php
include 'connect.php';


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>



    <div class="container">
    <form method="post" >
      
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Username</label>
          <input type="text" class="form-control" name="AdminName" id="exampleInputEmail1" required>
          
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" name="AdminPassword" id="exampleInputPassword1" required>
        </div>
       
        <button type="submit" name="signin" class="btn btn-primary">Submit</button>
      </form>
    </div>



    <?php




      if(isset($_POST['signin'])){
        $sql= "SELECT * FROM `admin` WHERE `Admin_Name`= '$_POST[AdminName]' AND `Admin_Password`= '$_POST[AdminPassword]'" ;
      $result= mysqli_query($con,$sql);
           if(mysqli_num_rows($result)==1){
            header("location:display.php");
           }
           else{
             echo   '<script>alert("Wrong username or password")</script>';
           }
        }



    ?>


 
    



</body>
</html>