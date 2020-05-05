<?php
  session_start();
  $user=$_POST["user"];
  $pass=$_POST["password"];
  $flag=0;
  $con=new mysqli("localhost","root","Harshil479","library_project");
  if(!$con)
  {
    echo "not";
  }
  else {
    echo "connected";
  }
  $query="select * from admin";
  if($sql=mysqli_query($con,$query))
  {
    while($result=mysqli_fetch_row($sql))
    {
      if($user==$result[1] && $pass==$result[2])
      {
        $flag=1;
        break;
      }
      else {
        $falg=0;
      }
    }
    $_SESSION['name']=$result[0];
    echo $_SESSION['name'];
    if($flag===1)
    {
      echo "<h2>Hello $result[0]</h2>";
      // echo "<script type=text/javascript>
      //  location.href='add.html';
      //  </script>";
    }
    else {
      // echo "<script>
      // location.href='prototype.html';
      // alert('Incorrect Password');
      // </script>";
    }
  }
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
     <style type="text/css">
       body{

       }
       td{
         padding:2%;
       }
     </style>
   </head>
   <body>
     <h3>You can handle book database and users database..<br> From below links.</h3>
     <table align="center">
     <tr>
       <td><h3><a href="Manage_books.php">Manage Books</a></h3></td>
       <td><h3><a href="Manage_user.php">Manage User</a></h3></td>
     </tr>
   </table>
   </body>
 </html>
