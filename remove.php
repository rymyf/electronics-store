<?php
require_once('configure.php');
$pid = $_GET['id'];

  $sql="DELETE FROM Product WHERE ID='$pid'";
  $result = $conn->query($sql);

if ($result===TRUE) {
  echo "Item Deleted Successfully!";
}
else
{
echo "Error: " . $sql . "<br>" . $conn->error;
}
 ?>
