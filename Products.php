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
<style type="text/css" media="screen">
  .products::after{
    content: "";
    clear: both;
    display: table;
    margin-bottom: 0%;
  }
</style>
</head>
<body>
 <div class="site-branding">
 <div class="header">
 <div class="logo">
   <h1 class="BlueH1branding">e-Electronics</h1>
   </div>
   <!-- Navigation -->
   <nav class="menu">
     <a href="Home.html" class="w3-button w3-bar-item">Home</a>
     <a href="Products.php" style="background-color: #ddd;color: black;"class="w3-button w3-bar-item">Products</a>
     <a href="aboutUs.html" class="w3-button w3-bar-item">About Us</a>
     <a href="LogIn.html" style="float:right;">Log In</a>
     <a href="SignUp.html" style="float:right;">Sign Up</a>
   </nav>
   </div>
   </div>
<div class="products">
  <?php
  require_once('configure.php');
  $sql = "SELECT * FROM Product ORDER BY Price DESC";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        echo "<div style='margin : 20px;
        padding: 20px;
        text-align: center;
        border-radius: 10px;
        box-shadow:0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12);
        background-color: #FFFF;
        float:left;
        width:500px;
        height:auto;'class='item' id='". $row['ID'] ."'>"
              ."<div ><p>".$row['ID']."</p>".'<img style="width: 200px; height:200px" src="data:image/jpeg;base64,'.base64_encode($row['Image']).'"/>'
              ."<div>"
                ."<p>".$row['Name']."</p><p>".$row['Type']."</p><p>".$row['Price']."</p>"
              ."</div>"
              ."<div>";
              if($_SESSION['type']=="Admin"){
                echo "<button  style='margin:5px; width: 40%;'onclick='document.getElementById(\"id02\").style.display=\"block\"' type='button' id='modifybtn' class='adminbtn' name='modifybtn'>Modify</button>"
                ."<button style='margin:5px; width: 40%;'type=\"button\"  class='adminbtn' name=\"removebtn\">Remove</button>";
              }else if($_SESSION['type']=="Purchaser"){
                echo "<br><button style='width: 40%;' onclick='document.getElementById(\"id01\").style.display=\"block\"' id='purchbtn' type='button' name='cartbtn'>Add To Cart</button>";
              }
        echo "</div></div></div>";
    }
  }
  ?>
</div>
<div id="id01" class="screen">
  <form class="screen-content" action="action.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="pics/p1.jpg" alt="Avatar" class="avatar">
    </div>
    <div class="screen-content-info" style="background-color:#f1f1f1">
      <div class="">
        <p class="screen-content-info-item">Name</p>
        <p class="screen-content-info-item">Type</p>
        <p class="screen-content-info-item">Price</p>
        <input class="screen-content-info-item" type="number" name="Quantity" value=""min="1">
      </div>
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <a href="Cart.html"><button type="button" name="button">Add To Cart</button></a>
    </div>
  </form>
</div>
<div id="id02" class="screen">
  <form class="screen-content" action="action.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="pics/p1.jpg" alt="Avatar" class="avatar">
    </div>
    <div class="screen-content-info" >
      <div class="">
        <input class="screen-content-info-item"type="text" name="name" value=""placeholder="Name">
        <input class="screen-content-info-item"type="text" name="name" value=""placeholder="Type"><br>
        <input class="screen-content-info-item"type="text" name="name" value=""placeholder="Price">
        <input class="screen-content-info-item" type="number" name="Quantity" value=""min="1">
      </div>
      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
      <a href="Cart.html"><button type="button" name="button">Save</button></a>
    </div>
  </form>
</div>
<!-- ................................................................. Footer................................................................. -->
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
