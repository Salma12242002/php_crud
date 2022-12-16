<?php
include 'index.php';
$id=$_GET['updateid'];
$sql="select * from `crud` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$id=$row['id'];
$name=$row['name'];
$email=$row['email'];
$phonenumber=$row['phonenumber'];
$password=$row['password']; 

if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $phonenumber=$_POST['phonenumber'];
  $password=$_POST['password'];

  $sql="update `crud` set id='$id',name='$name',email='$email',phonenumber='$phonenumber',password='$password' where id=$id";
  $result=mysqli_query($con,$sql);
  if($result){
  //  echo "Update Successfully";
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
    <input type="text" class="form-control" placeholder="Enter Your Name (Ex: Fulan Fulanah)" name="name" autocomplete="off" value=<?php echo $name;?>>
  </div>
  <div class="form-group">
    <label">Email</label>
    <input type="email" class="form-control" placeholder="email@example.com" name="email" value=<?php echo $email;?>>
  </div>
  <div class="form-group">
    <label">Phone Number</label>
    <input type="tel" class="form-control" placeholder="081234567890" name="phonenumber" autocomplete="off" value=<?php echo $phonenumber;?>>
  </div>
  <div class="form-group">
    <label">Password</label>
    <input type="text" class="form-control" placeholder="Enter Your Password" name="password" value=<?php echo $password;?>>
  </div>

  <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>
    </div>


  </body>
</html>