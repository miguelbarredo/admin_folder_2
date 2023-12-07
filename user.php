<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];
    $student_number=$_POST['student_number'];

    $sql="insert into `crud` (firstname,lastname,email,mobile,password,student_number)
    values('$firstname','$lastname','$email','$mobile','$password','$student_number')";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location:display.php');
    }
    else{
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <title>Crud operation</title>
  </head>
  <body>
    <div class="container my-5">
    <form method="post">
  <div class="form-group">
    <label>Firstname</label>
    <input type="text" class="form-control" placeholder="Enter your first name" name="name" autocomplete="off">
  </div>
  <div class="form-group">
    <label>Lastname</label>
    <input type="text" class="form-control" placeholder="Enter your last name" name="name" autocomplete="off">
  </div>
  <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete="off">
  </div>
  <div class="form-group">
    <label>Mobile</label>
    <input type="text" class="form-control" placeholder="Enter your mobile number" name="mobile" autocomplete="off">
  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="text" class="form-control" placeholder="Enter your password" name="password" autocomplete="off">
  </div>
  <div class="form-group">
    <label>Student Number</label>
    <input type="text" class="form-control" placeholder="Enter your student number" name="name" autocomplete="off">
  </div>

  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
    </div>

   
  </body>
</html>