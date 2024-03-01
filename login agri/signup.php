<?php
    session_start();

    include("db.php");
    

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
      $firstname = $_POST['fname'];
      $lastname = $_POST['lname'];
      $Gender = $_POST['gender'];
      $num = $_POST['number'];
      $address = $_POST['add'];
      $gmail = $_POST['mail'];
      $password = $_POST['pass'];


      if(!empty($gmail) && !empty($password) && !is_numeric($gmail))
      {

        $query = "INSERT INTO form (fname, lname, gender, cnum, address, email, pass) VALUES ('$firstname', '$lastname', '$Gender', '$num', '$address', '$gmail', '$password')";


        mysqli_query($con, $query);

        echo "<script type='text/javascript'> alert('successfully Register')</script>";
        header("location: http://localhost/agri/index.php");
                        die;


      }
      else 
      {
        echo "<script type='text/javascript'> alert('Please Enter Some Valid Information ')</script>";

      }

    }




?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="signup">
    <h1>Sign Up</h1>
    <h4>It's free and only takes a minute</h4>
    <form method="POST">
      <label for="">First Name</label>
      <input type="text" name="fname" required>
      <label for="">Last Name</label>
      <input type="text" name="lname" required>
      <label for="">Gender</label>
      <input type="text" name="gender" required>
      <label for="">Contact Adress</label>
      <input type="tel" name="number" required>
      <label for="">Address</label>
      <input type="text" name="add" required>
      <label for="">Email</label>
      <input type="email" name="mail" required>
      <label for="">Password</label>
      <input type="password" name="pass" required>
      <input type="submit" name="" value="submit">
      <!-- <label for="">Email</label>
      <input type="email" name="" required> -->
      <p>By Clicking the Sign Up button, you agree to our <br>
      <a href="">Terms and condition</a>and <a href="#">Policy Privacy</a>
    </p>
      <p>Already have an Account? <a href="login.php">Login Here</a>
      </p>
    </form>
  </div>
</body>
</html>