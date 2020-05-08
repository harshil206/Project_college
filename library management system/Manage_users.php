<?php
  session_start();

  if(isset($_REQUEST["logout"]))
  {
    session_unset();
    session_destroy();
    echo "<script>
           location.href='prototype.html';
           </script>";
  }
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="Manage_users.css">
    <style type="text/css">
      body{
        background-image: url("2.jpg");
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
      <li><a href="Home.php" class="home">Home</a></li>
      <li><a href="Search_user.php" class="active">Users</a></li>
      <li><a href="Create_acc.php">Create account for user</a></li>
      <li><a href="#">Assigned Book to user</a></li>
      <li><a href="Delete_acc.php">Delete user account</a></li>
      <li id="padd">  <form class="" action="" method="post">
          <a href=""><input id="button" type="submit" name="logout" value="Logout"></a>
        </form></li>
    </ul>
    <h2>User can take one book at a time..</h2>
  </body>
</html>
