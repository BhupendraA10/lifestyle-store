<?php
include'common.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Products</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"> </script>
<style media="screen">
  footer{

      padding: 10px 0;
      background-color: #101010;
      color:#9d9d9d;
      bottom: 0;
      width: 100%
  }
</style>
</head>
<body>
<?php
include 'header.php';
include'check-if-added.php';
?>
<br><br><br>
<div class="container">
  <div class="jumbotron">
    <h1>Welcome to our Smartphones Store!</h1>
    <p> We have the best brands, mobiles and qualities for you. No need to hunt around, we have all in one place</p>

  </div>


<div class="row text-center">
  <div class="col-md-4 col-sm-6">
      <a href="#" class="thumbnail"><img src="5.jpg" alt="fgfdgd" class="img-responsive img-rounded"></a>
    <div class="caption">
      <h3>Samsung A30</h3>
      <h5>Price:Rs.30000.00</h5>
      <?php if (!isset($_SESSION['email'])) { ?>                                 
      <p><a href="Login.php" role="button" class="btn btn-primary btn-block">Order Now</a></p>                                 
          <?php                             
          
      } 
      else if(check_if_added_to_cart(1)){?>
          <a href="Product.php?id=1" name="add" value="add" class="btn btn-block btn-success" disabled>Added to cart</a>                                 
      <?php }
             else{                             
          ?>                                     
      <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     
          <?php                                 
          
      }                            
                                  
      ?> 
 
 
  </div>

</div>
<div class="col-md-4 col-sm-6">
  <a href="#" class="thumbnail"><img src="2.jpg" alt="fgfdgd" class="img-responsive img-rounded" style="height:350px;"></a>
  <div class="caption">
    <h3>One Plus7 Pro</h3>
    <h5>Price:Rs.48000.00</h5>
           <?php if (!isset($_SESSION['email'])) { ?>                                 
      <p><a href="Login.php" role="button" class="btn btn-primary btn-block">Order Now</a></p>                                 
          <?php                             
          
      } 
      else if(check_if_added_to_cart(2)){?>
          <a href="Product.php?id=1" name="add" value="add" class="btn btn-block btn-success" disabled>Added to cart</a>                                 
      <?php }
             else{                                  
                                         
          ?>                                     
      <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     
          <?php                                 
          
      }                            
                                 
      ?> 
    
</div>

</div>
<div class="col-md-4 col-sm-6">
  <a href="#" class="thumbnail"><img src="3.jpg" alt="fgfdgd" class="img-responsive img-rounded"></a>
  <div class="caption">
    <h3>One Plus 7</h3>
    <h5>Price:Rs.43000.00</h5>
           <?php if (!isset($_SESSION['email'])) { ?>                                 
      <p><a href="Login.php" role="button" class="btn btn-primary btn-block">Order Now</a></p>                                 
          <?php                             
          
      } 
      else if(check_if_added_to_cart(3)){?>
          <a href="Product.php?id=1" name="add" value="add" class="btn btn-block btn-success" disabled>Added to cart</a>                                 
      <?php }
             else{                                   
                                          
          ?>                                     
      <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     
          <?php                                 
          
      }                            
                                  
      ?> 
    </div>

</div>

</div>
<br>
<div class="row text-center">
  <div class="col-md-4 col-sm-6">
      <a href="#" class="thumbnail"><img src="21.jpg" alt="fgfdgd" class="img-responsive img-rounded" style="height:350px;"></a>
    <div class="caption">
      <h3>Redme Note7 Pro</h3>
      <h5>Price:Rs.20000.00</h5>
       <?php if (!isset($_SESSION['email'])) { ?>                                 
      <p><a href="Login.php" role="button" class="btn btn-primary btn-block">Order Now</a></p>                                 
          <?php                             
          
      } 
      else if(check_if_added_to_cart(4)){?>
          <a href="Product.php?id=1" name="add" value="add" class="btn btn-block btn-success" disabled>Added to cart</a>                                 
      <?php }
             else{                                 
                                         
          ?>                                     
      <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     
          <?php                                 
          
      }                            
                                  
      ?> 
      
  </div>

</div>
<div class="col-md-4 col-sm-6">
  <a href="#" class="thumbnail"><img src="18.jpg" alt="fgfdgd" class="img-responsive img-rounded"></a>
  <div class="caption">
    <h3>iPhone 7</h3>
    <h5>Price:Rs.43000.00</h5>
     <?php if (!isset($_SESSION['email'])) { ?>                                 
      <p><a href="Login.php" role="button" class="btn btn-primary btn-block">Order Now</a></p>                                 
          <?php                             
          
      } 
      else if(check_if_added_to_cart(5)){?>
          <a href="Product.php?id=1" name="add" value="add" class="btn btn-block btn-success" disabled>Added to cart</a>                                 
      <?php }
             else{                                 
                                         
          ?>                                     
      <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     
          <?php                                 
          
      }                            
                                  
      ?> 
    
</div>

</div>
<div class="col-md-4 col-sm-6">
    <a href="#" class="thumbnail"><img src="19.jpg" alt="fgfdgd" class="img-responsive img-rounded" style="height:350px;"></a>
  <div class="caption">
    <h3>iPhone xr</h3>
    <h5>Price:Rs.85000.00</h5>
     <?php if (!isset($_SESSION['email'])) { ?>                                 
      <p><a href="Login.php" role="button" class="btn btn-primary btn-block">Order Now</a></p>                                 
          <?php                             
          
      } 
      else if(check_if_added_to_cart(6)){?>
          <a href="Product.php?id=1" name="add" value="add" class="btn btn-block btn-success" disabled>Added to cart</a>                                 
      <?php }
             else{                                  
                                       
          ?>                                     
      <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     
          <?php                                 
          
      }                            
                                   
      ?> 
    </div>

</div>

</div><br>
<div class="row text-center">
  <div class="col-md-4 col-sm-6">
      <a href="#" class="thumbnail"><img src="22.jpg" alt="fgfdgd" class="img-responsive img-rounded" style="height:350px;"></a>
    <div class="caption">
      <h3>Redme Note7 Pro</h3>
      <h5>Price:Rs.18000.00</h5>
       <?php if (!isset($_SESSION['email'])) { ?>                                 
      <p><a href="Login.php" role="button" class="btn btn-primary btn-block">Order Now</a></p>                                 
          <?php                             
          
      } 
      else if(check_if_added_to_cart(7)){?>
          <a href="Product.php?id=1" name="add" value="add" class="btn btn-block btn-success" disabled>Added to cart</a>                                 
      <?php }
             else{                                  
                                         
          ?>                                     
      <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     
          <?php                                 
          
      }                            
                                   
      ?> 
        </div>

</div>
<div class="col-md-4 col-sm-6">
    <a href="#" class="thumbnail"><img src="23.jpg" alt="fgfdgd" class="img-responsive img-rounded"style="height:350px;"></a>
  <div class="caption">
    <h3>realme</h3>
    <h5>Price:Rs.16000.00</h5>
     <?php if (!isset($_SESSION['email'])) { ?>                                 
      <p><a href="Login.php" role="button" class="btn btn-primary btn-block">Order Now</a></p>                                 
          <?php                             
          
      } 
      else if(check_if_added_to_cart(8)){?>
          <a href="Product.php?id=1" name="add" value="add" class="btn btn-block btn-success" disabled>Added to cart</a>                                 
      <?php }
             else{                                 
                                          
          ?>                                     
      <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     
          <?php                                 
          
      }                            
                                  
      ?> 
    </div>

</div>
<div class="col-md-4 col-sm-6">
  <a href="#" class="thumbnail"><img src="24.jpg" alt="fgfdgd" class="img-responsive img-rounded"></a>
  <div class="caption">
    <h3>Nokia 6.1Plus</h3>
    <h5>Price:Rs.21,500.00</h5>
    <?php if (!isset($_SESSION['email'])) { ?>                                 
      <p><a href="Login.php" role="button" class="btn btn-primary btn-block">Order Now</a></p>                                 
          <?php                             
          
      } 
      else  if(check_if_added_to_cart(9)){?>
          <a href="Product.php?id=1" name="add" value="add" class="btn btn-block btn-success" disabled>Added to cart</a>                                 
      <?php }
             else{                               
                                        
          ?>                                     
      <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     
          <?php                                 
          
      }                            
                                  
      ?> 
    </div>

</div>

<div class="col-md-4 col-sm-6">
    <a href="#" class="thumbnail"><img src="6.jpg" alt="fgfdgd" class="img-responsive img-rounded" style="height:350px;"></a>
  <div class="caption">
    <h3>Samsung A30</h3>
    <h5>Price:Rs.25000.00</h5>
     <?php if (!isset($_SESSION['email'])) { ?>                                 
      <p><a href="Login.php" role="button" class="btn btn-primary btn-block">Order Now</a></p>                                 
          <?php                             
          
      } 
      else if(check_if_added_to_cart(10)){?>
          <a href="Product.php?id=1" name="add" value="add" class="btn btn-block btn-success" disabled>Added to cart</a>                                 
      <?php }
             else{                                
                                         
          ?>                                     
      <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     
          <?php                                 
          
      }                            
                                  
      ?> 
    </div>

</div>
<div class="col-md-4 col-sm-6">
    <a href="#" class="thumbnail"><img src="13.jpg" alt="fgfdgd" class="img-responsive img-rounded" style="height:350px;"></a>
  <div class="caption">
    <h3>iPhone 6</h3>
    <h5>Price:Rs.25000.00</h5>
    <?php if (!isset($_SESSION['email'])) { ?>                                 
      <p><a href="Login.php" role="button" class="btn btn-primary btn-block">Order Now</a></p>                                 
          <?php                             
          
      } 
      else if(check_if_added_to_cart(11)){?>
          <a href="Product.php?id=1" name="add" value="add" class="btn btn-block btn-success" disabled>Added to cart</a>                                 
      <?php }
             else{                                 
                                         
          ?>                                     
      <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     
          <?php                                 
          
      }                            
                                   
      ?> 
    </div>

</div>
<div class="col-md-4 col-sm-6">
    <a href="#" class="thumbnail"><img src="4.jpg" alt="fgfdgd" class="img-responsive img-rounded"style="height:350px;"></a>
  <div class="caption">
    <h3>one plus 7</h3>
    <h5>Price:Rs.38000.00</h5>
     <?php if (!isset($_SESSION['email'])) { ?>                                 
      <p><a href="Login.php" role="button" class="btn btn-primary btn-block">Order Now</a></p>                                 
          <?php                             
          
      } 
      else if(check_if_added_to_cart(12)){?>
          <a href="Product.php?id=1" name="add" value="add" class="btn btn-block btn-success" disabled>Added to cart</a>                                 
      <?php }
             else{                                  
                                       
          ?>                                     
      <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     
          <?php                                 
          
      }                            
                                   
      ?> 
    </div>

</div>
</div>
</div>
<br><br>
<footer class="footer">
<div class="container">
  <center><p>Copyright © E-Store. All Rights Reserved|Contact Us: +91 90000 00000</p>
  </center>
</div>
</footer>
</body>
</html>
