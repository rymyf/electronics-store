<?php
require_once('configure.php');

$Fname = $_POST["fname"];
$Lname = $_POST["lname"];
$Email = $_POST["email"];
$DOB = $_POST["DoB"];
$PNumber = $_POST["PhoneNumber"];
$Address = $_POST["address"];
$Password = $_POST["psw"];
$Gender = $_POST["gender"];

$sql="SELECT * FROM User WHERE Email='$Email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "Sorry! This Email is already exist. Please choose different email.";
}
else
{
  $sql="INSERT INTO Cart(TotalPrice,Quantity) VALUES('0.0','0')";
  $result = $conn->query($sql);
  $cart_id="SELECT ID FROM Cart ORDER BY ID DESC LIMIT 1";
  $result = $conn->query($cart_id);
  $row = $result->fetch_assoc();
  $ID_Cart = $row["ID"];

  $sql="INSERT INTO User(FirstName, LastName,Email, Password, PhoneNumber, Address, Gender, DoB, Type, ID_Cart)
  VALUES('$Fname','$Lname','$Email','$Password','$PNumber','$Address','$Gender','$DOB','Purchaser','$ID_Cart')";

  if ($conn->query($sql) === TRUE) {
      echo "<script>window.location.href = 'LogIn.html'</script>";
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }

}

$conn->close();

?>
