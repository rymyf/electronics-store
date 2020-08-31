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
   <style type="text/css"media="screen">
     div form{
       padding: 20px;
       text-align: center;
       border:none;
     }
     .addproduct{
         float: left;
         width: 80%;

       }
     .addproduct input,select{
       width: 50%;
       padding: 15px;
       margin: 5px 0 22px 0;
       display: inline-block;
       border: none;
       background: #f1f1f1;
     }
     button{
       width: 50%;
     }

   </style>
</head>
<body>

<?php
session_start();
require_once('configure.php');

$sql="SELECT Product.*, Cart.*
FROM Product, Cart, Cart_Product
WHERE Cart_Product.ID_Product=Product.ID AND Cart_Product.ID_Cart= Cart.ID";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // echo "<table>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo $row;
      // echo "<tr><td>".'<img src="data:image/jpeg;base64,'.base64_encode($row['Image']).'"/>'
      // ."</td><td><p>".$row['Name']."</p></td><td><p>".$row['Type']."</p></td><td><p>".$row['Price']."</td><td>"
      // ."<button  onclick='document.getElementById(\"id02\").style.display=\"block\"' type='button' name='modifybtn'>Modify</button>"
      // ."<button type=\"button\"   name=\"removebtn\">Remove</button>"
      // ."<button  onclick='document.getElementById(\"id01\").style.display=\"block\"' type='button' name='cartbtn'>Add To Cart</button>"
      // ."</tr>";
    }
    // echo "</table>";
  }else{
  echo "<img src='pics/c1.png' style='margin:10px; text-align:center; width:20%;'  />";

}
?>


</body>
</html>
