<?php
include 'connect.php';
$id=$_GET['updateid'];
$sql="Select * from `crud` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$firstname=$row['firstname'];
$lastname=$row['lastname'];
$email=$row['email'];
$mobile=$row['mobile'];
$password=$row['password'];
$student_number=$row['student_number'];

if(isset($_POST['submit'])){
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];
    $student_number=$_POST['student_number'];

    $sql="update `crud` set id=$id, firstname=$firstname, lastname=$lastname, email=$email, 
    mobile=$mobile, password=$password, student_number=$student_number
    where id=$id";
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
    <input type="text" class="form-control" placeholder="Enter your first name" name="name" autocomplete="off" value=<?php echo $firstname;?>>
  </div>
  <div class="form-group">
    <label>Lastname</label>
    <input type="text" class="form-control" placeholder="Enter your last name" name="name" autocomplete="off" value=<?php echo $lastname;?>>
  </div>
  <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete="off" value=<?php echo $email;?>>
  </div>
  <div class="form-group">
    <label>Mobile</label>
    <input type="text" class="form-control" placeholder="Enter your mobile number" name="mobile" autocomplete="off" value=<?php echo $mobile;?>>
  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="text" class="form-control" placeholder="Enter your password" name="password" autocomplete="off" value=<?php echo $password;?>>
  </div>
  <div class="form-group">
    <label>Student Number</label>
    <input type="text" class="form-control" placeholder="Enter your student number" name="name" autocomplete="off" value=<?php echo $student_number;?>>
  </div>

  <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>
    </div>

   
  </body>
</html>