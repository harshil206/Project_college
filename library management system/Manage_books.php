<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <script type="text/javascript">

    </script>
  </head>
  <body>
    <style type="text/css">
    ul{
      list-style-type: none;
      margin: 0;
      padding: 0;
      overflow: hidden;
      background-color: grey;
      position: sticky;
    }
    li
    {
      float: left;
    }
    li a
    {
      display: inline-block;
      color: white;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }
    li a:hover
    {
      background-color: red;
    }
    .home{
      background-color: red;
    }
    </style>
    <ul>
      <li><a href="prototype.html" class="home">Home</a></li>
      <li><a href="#bookavailable" class="active">List Of Books</a></li>
      <li><a href="#Update">Update Book's record</a></li>
      <li><a href="#Add">Add Book in record</a></li>
      <li><a href="#Delete">Delete book from record</a></li>
    </ul>

    <form class="" action="" method="post">
      <input type="submit" name="logout" value="Logout">
      
    </form>
  </body>
</html>


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
