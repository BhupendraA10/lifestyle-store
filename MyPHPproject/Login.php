<!DOCTYPE html>
<?php
include 'common.php';
if (isset($_SESSION['email']))
 {
  header('location: Product.php');
 }
 ?>


<html>
  <head>
    <title>LogIn</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"> </script>
<style>
footer{
    margin-top:200px;
    padding: 10px 0;
    background-color: #101010;
    color:#9d9d9d;
    bottom: 0;
    width: 100%;
}
</style>
  </head>
  <body>
<div class="navbar navbar-inverse navbar-fixed-top">
<div class="container">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" datatarget="#myNavbar">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="index.php">E-Store</a>
  </div>
  <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav navbar-right">
                   <li><a href="SignUp.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                   <li><a href="Login.php"><span class="glyphicon glyphicon-log-in"></span> LogIn</a></li>
                   <li><a href = "AboutUs.php"><span class = "glyphicon glyphicon-th-list"></span> About Us</a></li>
                   <li><a href = "ContactUs.php"><span class = "glyphicon glyphicon-phone"></span> Contact Us</a></li>

                               </ul>
            </div>
          </div>
        </div>
<br><br><br><br>
<div class="container">
    <div class="col-xs-4" style="float:right;"> 
        <img src="welcome.jpg" style="width:550px;">
     </div>
    
    <div class="col-xs-4 col-xs-offset-4" style="padding-left:20px;">
    <div class="row">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3>Login</h3>

        </div>
        <div class="panel-body">
          <form method="POST" action="login_submit.php">
          <div class="form-group">
          <input type="text" name="email" class="form-control" id="email" placeholder="Enter Email">
          </div>
          <div class="form-group">
            <input type="password" name="password" class="form-control"  id="password" placeholder="Enter Password">
          </div>
<div><b class="red">
 </b></div>
<br>
          <button class="btn btn-success">Submit</button>
        </div>
        </form>
        <div class="panel-footer">
            <h4>Don't have an Account?<h4><a href="SignUp.php">Register</a>
        </div>
      </div>
     </div>
  </div>

</div>
<footer>
  <div class="container">
<center><p>Copyright © E-Store. All Rights Reserved | Contact Us: +91 90000 00000</p></center>
  </div>
</footer>
</body>
</html>
