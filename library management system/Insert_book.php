<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Insert record</title>
    <link rel="stylesheet" href="Insert_book.css">
  </head>
  <body>
    <ul>
      <li><a href="Home.php">Home</a></li>
      <li><a href="Search_book.php">Find a Book</a></li>
      <li><a href="Update_book.php" >Update Book's record</a></li>
      <li><a href="Insert_book.php" class="home">Add Book in record</a></li>
      <li><a href="Delete_book.php">Delete book from record</a></li>
      <li id="padd">  <form class="" action="" method="post">
          <a href=""><input id="button" type="submit" name="logout" value="Logout"></a>
        </form></li>
    </ul>
    <div class="heading">
      <header>
        <h1>Insert Book Into Records</h1>
      </header>
    </div>
    <div class="form">
      <form class="" action="" method="post" name="insert">
        Book_id <br><br><input class="edit" type="text" name="bookid" placeholder="Enter book id"><br><br>
        Book_name <br><br><input  class="edit" type="text" name="bookname" placeholder="Enter book name"><br><br>
        Author_name <br><br><input  class="edit" type="text" name="authorname" placeholder="Enter Author name"><br><br>
        Price <br><br><input  class="edit" type="text" name="price" placeholder="Enter price"><br><br>
        <input  class="button" type="submit" name="insert" value="Insert">
      </form>
    </div>
  </body>
</html>


<?php
  if(isset($_REQUEST["insert"]))
  {
    $id=$_POST["bookid"];
    $name=$_POST["bookname"];
    $Aname=$_POST["authorname"];
    $price=$_POST["price"];
    $con=new mysqli("localhost","root","Harshil479","library_project");
    $sql="INSERT INTO `books` (`Book_id`,`Book_name`, `Author_name`,`Price`) VALUES  ('$id','$name','$Aname','$price')";
    $ins=mysqli_query($con,$sql);
    if($ins)
    {
      echo "<script>
            alert('Data is Inserted in Record');
            </script>";
    }
  }
 ?>
