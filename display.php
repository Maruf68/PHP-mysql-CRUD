 <?php

include 'connect.php';

session_start();

if(!isset($_SESSION['AdminLoginid'])){
  header("location:admin_login.php");
}


 ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>crud operation</title>
</head>
<body>
    
<div class="container">

<form method="post">  
<button class="btn btn-primary my-5"><a href="user.php" class="text-light" > Add user

</a>
</button>
 <button class="pick btn btn-warning" name="signout" class="pick btn btn-warning my-5">Logout </button>
 </form>




<style>
    a{
        text-decoration:none;
    }
   
    .pick{
      margin-left:770px;
    }
    </style>




 <?php

if(isset($_POST['signout'])){
  session_destroy();
  header("location:admin_login.php");
}

 ?>



 <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">sl no</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Password</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>

  <?php


 $sql =" Select * from `user`";
 $result=mysqli_query($con,$sql);
if($result){
      while($row=mysqli_fetch_assoc($result)){
          $id=$row['id'];
          $name=$row['name'];
          $email=$row['email'];
          $mobile=$row['mobile'];
          $password=$row['password'];


          echo '<tr>
          <th scope="row">'.$id.' </th>
          <td>'.$name.'</td>
          <td>'.$email.'</td>
          <td>'.$mobile.'</td>
          <td>'.$password.'</td>
          <td>
          <button class="btn btn-primary">
          <a href="update.php?updateid='.$id.'" class="text-light">Update</a>
          </button>
   
          <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light" >Delete</a>
          </button>
       </td>
        </tr>';


   }
}
  ?>
   

   
  </tbody>
</table>

</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js">
    </script>
</body>
</html>