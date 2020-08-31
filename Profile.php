<?php
session_start();
require_once('configure.php');

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
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
         padding-left: 80px;
         border:none;
       }
       .profile{
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
         float: right;
         width: 50%;
       }

     </style>
  </head>
  <body>
    <div class="profile">
      <form class="profile" action="SaveChanges.php" method="post">
        <h2 style="color: #253147;">Profile</h2>
        <input type="text" value="<?php echo $_SESSION['fname']; ?>" name="fname" required><br>
        <input type="text" value="<?php echo $_SESSION['lname']; ?>" name="lname" required><br>
        <input type="email" value="<?php echo $_SESSION['email']; ?>" name="email" required><br>
        <input type="date" value="<?php echo $_SESSION['dob']; ?>" name="DoB" required> <br>
        <input type="tel" value="<?php echo $_SESSION['phonenumber']; ?>" name="PhoneNumber" required><br>
        <input type="text" value="<?php echo $_SESSION['address']; ?>" name="address" required><br>
        <label for=""><b>Gender: </b><?php echo $_SESSION['gender']; ?></label><br>
      </form>
    </div>
  </body>
</html>
