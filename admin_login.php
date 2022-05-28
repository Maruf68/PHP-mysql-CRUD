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



    <section class="vh-100">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6 text-black">

     

        <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

          <form method="post" style="width: 23rem;">

            <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Log in</h3>

            <div class="form-outline mb-4">
              <input type="text" placeholder="Enter Username" id="form2Example18" name="AdminName" class="form-control form-control-lg" />
              <label class="form-label" for="form2Example18"></label>
            </div>

            <div class="form-outline mb-4">
              <input type="password" placeholder="Enter Password" id="form2Example28" name="AdminPassword"  class="form-control form-control-lg" />
              <label class="form-label" for="form2Example28"></label>
            </div>

            <div class="pt-1 mb-4">
              <button class="btn btn-info btn-lg btn-block" name="signin" type="submit">Login</button>
            </div>

           

          </form>

        </div>

      </div>
      <div class="col-sm-6 px-0 d-none d-sm-block">
        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img3.webp"
          alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
      </div>
    </div>
  </div>
</section>


    <?php




      if(isset($_POST['signin'])){
        $sql= "SELECT * FROM `admin` WHERE `Admin_Name`= '$_POST[AdminName]' AND `Admin_Password`= '$_POST[AdminPassword]'" ;
      $result= mysqli_query($con,$sql);
           if(mysqli_num_rows($result)==1){
           
            session_start();
            $_SESSION['AdminLoginid']=$_POST['AdminName'];
            header("location:display.php");
           }
           else{
           
             echo '<script>alert("Wrong username or password")</script>';
           }
        }



    ?>


 
    



</body>
</html>