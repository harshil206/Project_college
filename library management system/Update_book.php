<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Update record of books</title>
    <link rel="stylesheet" href="Update_book.css">
    <style type="text/css">
      body{
          background-image: url("1.png");
      }
    </style>
  </head>
  <body>
    <ul>
      <li><a href="Home.php">Home</a></li>
      <li><a href="Search_book.php" class="active">Find a Book</a></li>
      <li><a href="Update_book.php" class="home">Update Book's record</a></li>
      <li><a href="Insert_book.php" >Add Book in record</a></li>
      <li><a href="Delete_book.php">Delete book from record</a></li>
      <li id="padd">  <form class="" action="" method="post">
          <a href=""><input id="button" type="submit" name="logout" value="Logout"></a>
        </form></li>
    </ul>
    <div class="heading">
      <header>
        <h1>Update Records</h1>
      </header>
    </div>
    <div class="form">
      <form class="" action="" method="post">
        Book_id <br><br><input class="edit" type="text" name="bookid" placeholder="Enter book id"><br><br>
        Book_name <br><br><input  class="edit" type="text" name="bookname" placeholder="Enter book name"><br><br>
        Author_name <br><br><input  class="edit" type="text" name="authorname" placeholder="Enter Author name"><br><br>
        Price <br><br><input  class="edit" type="text" name="price" placeholder="Enter price"><br><br>
        <input  class="button" type="submit" name="update" value="Update">
      </form>
    </div>
  </body>
</html>

<?php
  if(isset($_REQUEST["update"]))
  {
    $id=$_POST["bookid"];
    $name=$_POST["bookname"];
    $Aname=$_POST["authorname"];
    $price=$_POST["price"];
    $con=new mysqli("localhost","root","Harshil479","library_project");
    $sql="UPDATE `books` SET `Book_name`='$name',`Author_name`='$Aname',`Price`='$price' WHERE `Book_id`='$id'";
    $ins=mysqli_query($con,$sql);
    if($ins)
    {
      echo "<script>
            alert('Data is Updated in Record');
            </script>";
    }
  }
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
