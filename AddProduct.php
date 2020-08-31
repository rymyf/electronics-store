<?php
if(isset($_POST['submit'])) {
  $Name = $_POST["name"];
  $Type = $_POST["type"];
  $Price = $_POST["price"];
    //Process the image that is uploaded by the user

    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["imageUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    $check = getimagesize($_FILES["imageUpload"]["tmp_name"]);

    if($check !== false){
        $image = $_FILES['imageUpload']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));

        require_once('configure.php');
        $sql= "INSERT INTO Product(Name, Image, Price, Type) VALUES ('$Name','$imgContent','$Price','$Type')";
        $result = $conn->query($sql);

        if($result){
            echo "File uploaded successfully.";
        }else{
            echo "File upload failed, please try again.";
        }
}else {
  echo "Please select an image file to upload.";
}
}

 ?>
