<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <script src="https://kit.fontawesome.com/d8ae08f65d.js" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <title>Update record of books</title>
    <link rel="stylesheet" type="text/css" href="./D:/fontawesome-free-5.13.0-web/css/all.css">
    <link rel="stylesheet" href="Search_book.css">
  </head>
  <body>
    <ul>
      <li><a href="Home.php">Home</a></li>
      <li><a href="Search_book.php" class="home">Find a Book</a></li>
      <li><a href="Update_book.php">Update Book's record</a></li>
      <li><a href="Insert_book.php" >Add Book in record</a></li>
      <li><a href="Delete_book.php">Delete book from record</a></li>
      <li id="padd">  <form class="" action="" method="post">
          <a href=""><input id="button" type="submit" name="logout" value="Logout"></a>
        </form></li>
    </ul>
    <div class="heading">
      <header>
        <h1>Search a Book by it's Id.</h1>
      </header>
      <form class="" action="" method="post">
        <input type="text" name="search" placeholder="Enter a Book Id...">
        <input type="submit" name="search1" value="Search">
        <!-- <button type="submit" name="search1"><i class='fas fa-search-plus'></i></button> -->
      </form>
    </div>
  </body>
</html>


<?php
  if(isset($_REQUEST["search1"]))
  {
    $id=$_POST["search"];
    // $name=$_POST["bookname"];
    // $Aname=$_POST["authorname"];
    // $price=$_POST["price"];
    $con=new mysqli("localhost","root","Harshil479","library_project");
    $sql="select * from books where Book_id='$id'";
    if($result=mysqli_query($con,$sql))
    {
      while($row=mysqli_fetch_row($result))
      {
        echo "<h3 align='center'>";
        echo "Book id: $row[0]<br>";
        echo "Book Name: $row[1]<br>";
        echo "Author Name: $row[2]<br>";
        echo "Price: $row[3]<br>";
        echo "</h3>";
      }
    }
  }
?>
