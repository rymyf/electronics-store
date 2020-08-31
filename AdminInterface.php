<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="stylepro.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  <!-- Google Fonts -->
  <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
   <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
   <!-- Add icon library -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript">
function Profile(){
  var e = document.getElementById('myframe');
  e.src = "Profile.php";
  }
  function AddProduct(){
    var e = document.getElementById('myframe');
    e.src = "AdminAddProduct.html";
  }
</script>
</head>
<body style="padding-bottom: 0rem;">
 <div class="site-branding">
 <div class="header">
 <div class="logo">
   <h1 class="BlueH1branding">e-Electronics</h1>
   </div>
   <!-- Navigation -->
   <nav class="menu">
     <a href="Home.html" >Home</a>
     <a href="Products.php" >Products</a>
     <a href="AboutUs.html">About Us</a>
     <a href="LogIn.html" style="float:right;">Log In</a>
     <a href="SignUp.html" style="float:right;">Sign Up</a>
   </nav>
   </div>
   </div>
<div class="container">
  <nav class="left-side">
      <ul>
            <li>
              <img src="pics/icon2.png" style="width:60%;" class="nav-img"><br><br>
              <h4><b><?php echo $_SESSION['fname']." ". $_SESSION['lname']; ?></b></h4>
              <p class="w3-text-grey"><?php echo $_SESSION['type'];?></p>
            </li>
            <li><a href="#" class="link" onclick="Profile()">Profile</a></li>
            <li><a href="#" onclick="AddProduct()" class="link">Add Product</a></li>
            <li><a href="LogOut.php" class="link">Log Out</a></li>
      </ul>
  </nav>
<div class="uiproducts">
<iframe id ="myframe" src="Profile.php" style=" height:800px;border: none;">
</iframe>
</div>
</div>
   <!-- Footer -->
   <footer>
    <a href="#" class="fa fa-facebook"></a>
    <a href="#" class="fa fa-twitter"></a>
    <a href="#" class="fa fa-google"></a>
    <a href="#" class="fa fa-youtube"></a>
    <a href="#" class="fa fa-instagram"></a>
    <a href="#" class="fa fa-pinterest"></a>
    <a href="#" class="fa fa-snapchat-ghost"></a>
  </footer>
</body>
</html>
