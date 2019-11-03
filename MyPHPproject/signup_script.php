<?php
include 'common.php';
$n=$_POST['user'];
$a=$_POST['email'];
$b=$_POST['password'];
$c=$_POST['city'];
$cont=$_POST['contact'];
$d=$_POST['address'];
$query="select email from users where email='$a'";
$r=mysqli_query($con,$query)or die(mysqli_error($con));
if(mysqli_num_rows($r)>0){

  echo "user already exists";
  header('location:SignUp.php');

}else {
  $m="insert into users(name,email,password,contact,city,address) values('$n','$a','$b','$cont','$c','$d')";
  $result=mysqli_query($con,$m)or die(mysqli_error($con));
  $p=mysqli_insert_id($con);
  $_SESSION['id']=$p;
  $_SESSION['email']=$a;
  header('location:Login.php');
}?>
