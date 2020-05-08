<!-- <?php
  // session_start();
  //
  // if(isset($_REQUEST["logout"]))
  // {
  //   session_unset();
  //   session_destroy();
  //   echo "<script>
  //          location.href='prototype.html';
  //          </script>";
  // }
 ?> -->

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="Delete_acc.css">
    <style type="text/css">
      body{
        background-image: url("");
      }
      ul{
        font-size: 16px;
      }
      h2{
        margin-top: 20%;
        text-align: center;
        color: white;
        font-style: italic;
      }
    </style>
  </head>
  <body>
    <ul>
      <li><a href="Home.php">Home</a></li>
      <li><a href="Search_user.php" class="active">Users</a></li>
      <li><a href="Create_acc.php">Create account for user</a></li>
      <li><a href="#">Assigned Book to user</a></li>
      <li><a href="Delete_acc.php" class="home">Delete user account</a></li>
      <li id="padd">  <form class="" action="" method="post">
          <a href=""><input id="button" type="submit" name="logout" value="Logout"></a>
        </form></li>
    </ul>
    <div class="heading">
      <header>
        <h1>Delete user Account From Records</h1>
      </header>
    </div>
    <div class="form">
      <form class="" action="" method="post" name="insert">
        User_id <br><br><input class="edit" type="text" name="userid" placeholder="Enter user id"><br><br>
        Name <br><br><input  class="edit" type="text" name="name" placeholder="Enter name"><br><br>
        Password<br><br><input  class="edit" type="password" name="pass" placeholder="Enter Password"><br><br>
        <input  class="button" type="submit" name="delete" value="Delete">
      </form>
    </div>
  </body>
</html>


<?php
  if(isset($_REQUEST["delete"]))
  {
    $con=new mysqli("localhost","root","Harshil479","library_project");
    $uname=$_POST["userid"];
    $pass=$_POST["pass"];
    $sql="select * from user_table where Username='$uname'";
    if($result=mysqli_query($con,$sql))
    {
      while($row=mysqli_fetch_row($result))
      {
        if($pass==$row[5])
        {
          $sql1="DELETE FROM `user_table` WHERE `Username` = '$uname'";
          $del=mysqli_query($con,$sql1);
          if($del)
          {
            echo "<script>
                  alert('Data is Deleted from Record');
                  </script>";
          }
        }
      }
    }
  }
 ?>
