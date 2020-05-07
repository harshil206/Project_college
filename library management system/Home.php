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
    <title>Home</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style type="text/css">
       body{
         background-color: #C0C0C0	;
       }
      table{
        margin-top: 90px;
        border-radius: 40%;
      }
      tr,td{
        padding-right:1%;
        text-align: center;
      }
      #one{
        background-color: ;
      }
      td:hover{
        background-color: white;
      }
      a{
        color:black ;
      }
      #contact{
        margin-top: 100px;
      }
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
        color: white;
        text-decoration: none;
        background-color: red;
      }
      .home{
        background-color: red;
      }
      #button{
        border: none;
        background-color: inherit;
        color: white;
        padding-top: 2%;
        cursor: pointer;
      }
      #padd{
        padding-left: 1200px;
        text-align: right;
      }
    </style>
  </head>
  <body>
    <ul>
      <li><a href="admin.php" class="home">Home</a></li>
      <li id="padd">  <form class="" action="" method="post">
          <a href=""><input id="button" type="submit" name="logout" value="Logout"></a>
        </form></li>
    </ul>
    <?php echo "<h1 align=center>Hello "; echo  $_SESSION['name']; echo " Library!!</h1>"; ?>
    <h3 class="container"><p class="page-header"><br>You can handle book database and users database..<br> From below links.</p></h3>
    <table align="center" class="jumbotron">
    <tr>
      <td id="one"><h3><a href="Manage_books.php">Manage Books</a></h3></td>
      <td><h3><a href="Manage_user.php">Manage Users</a></h3></td>
    </tr>
  </table>
  <div id="contact" class="container">
 <h3 class="text-center">Contact</h3>
 <p class="text-center"><em>Review Our website!!</em></p>

 <div class="row">
   <div class="col-md-4">
     <p>Fan? Drop a note.</p>
     <p><span class="glyphicon glyphicon-map-marker"></span>Ahmedabad, India</p>
     <p><span class="glyphicon glyphicon-phone"></span>Phone: +91 7778801883,  </p>
     <p><span class="glyphicon glyphicon-envelope"></span>Email: harshilshah479@gmail.com, dhairya.shah562@gmail.com</p>
   </div>
   <div class="col-md-8">
     <div class="row">
       <div class="col-sm-6 form-group">
         <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
       </div>
       <div class="col-sm-6 form-group">
         <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
       </div>
     </div>
     <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
     <br>
     <div class="row">
       <div class="col-md-12 form-group">
         <button class="btn pull-right" type="submit">Send</button>
       </div>
     </div>
   </div>
 </div>
  </body>
</html>
