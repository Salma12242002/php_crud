<?php
include 'index.php';
if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $phonenumber=$_POST['phonenumber'];
  $password=$_POST['password'];

  $sql="insert into `crud` (name,email,phonenumber,password)
  values('$name', '$email', '$phonenumber', '$password')";
  $result=mysqli_query($con,$sql);
  if($result){
   // echo "Data Inserted Successfully";
  header('location:display.php'); 
  }else{
    die(mysqli_error($con));
  }
}


?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.rtl.min.css">

    <title>CRUD</title>
  </head>
  <body>
    <div class="container my-5">
    <form method="post">
  <div class="form-group">
    <label">Name</label>
    <input type="text" class="form-control" placeholder="Enter Your Name (Ex: Fulan Fulanah)" name="name" autocomplete="off">
  </div>
  <div class="form-group">
    <label">Email</label>
    <input type="email" class="form-control" placeholder="email@example.com" name="email">
  </div>
  <div class="form-group">
    <label">Phone Number</label>
    <input type="tel" class="form-control" placeholder="081234567890" name="phonenumber" autocomplete="off">
  </div>
  <div class="form-group">
    <label">Password</label>
    <input type="text" class="form-control" placeholder="Enter Your Password" name="password">
  </div>
  <button type="submit" class="btn btn-primary my-3" name="submit">Submit</button>
</form>
    </div>


  </body>
</html>