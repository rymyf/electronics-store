<?php
session_start();
require_once('configure.php');

$Email = $_POST["email"];
$Password = $_POST["psw"];

$sql = "SELECT * FROM User WHERE Email='$Email' AND Password='$Password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    // output data of each row
    while($row = $result->fetch_assoc()) {

      if($row["Type"]=="Admin")
      {
      echo "<script>window.location.href = 'AdminInterface.php'</script>";
      }
      else
      {
        echo "<script>window.location.href = 'PurchaserInterface.php'</script>";
      }
      $_SESSION['id']=$row['ID'];
      $_SESSION['fname']=$row['FirstName'];
      $_SESSION['lname']=$row['LastName'];
      $_SESSION['email']=$row['Email'];
      $_SESSION['phonenumber']=$row['PhoneNumber'];
      $_SESSION['address']=$row['Address'];
      $_SESSION['gender']=$row['Gender'];
      $_SESSION['dob']=$row['DoB'];
      $_SESSION['type']=$row['Type'];


    }
} else {
    echo "0 results";
}
$conn->close();

?>
