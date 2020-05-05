<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Signup Successfully</title>
    <style type="text/css">
      body{
        margin-top: 15%;
      }
      h1,h2{
        color: blue;
      }
      a{
        color: green;
      }
    </style>
  </head>
  <body align="center">
    <h1>Your details is store Successfully.....</h1>
    <h2>Now you can log in from given link...
    <a href="prototype.html">login</a></h2>
  </body>
</html>
<?php
  $con=new mysqli("localhost","root","Harshil479","library_project");
  $name=$_POST["Name"];
  $number=$_POST["Number"];
  $Date=$_POST["Bith"];
  $email=$_POST["Email"];
  $username=$_POST["username"];
  $pass=$_POST["Password"];

  // if(!$con)
  // {
  //   echo "not connected";
  // }
  // else
  // {
  //   echo "connected";
  // }
  if($_POST){
    $query="INSERT INTO `user_table` (`Name`, `Phone_number`, `Birth_date`, `Email`, `Username`, `Password`) VALUES  ('$name', '$number', '$Date', '$email','$username', '$pass')";
    // echo "$query";
    $ins=mysqli_query($con,$query);
    // echo "$ins";
  }


  // if($ins==true)
  // {
  //   echo " inserted";
  // }
  // else {
  //   echo "not inserted";
  // }
  // mysqli_close($con);
 ?>
