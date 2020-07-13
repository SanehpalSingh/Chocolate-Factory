<?php
require_once("db/conn.php");


if(empty($_FILES['image']['name']))
{
   $target=$_POST['file'];
}
else{
   $TARGET_DIR='image/';

    $target_file=$TARGET_DIR . $_FILES['image']["name"];
    
    move_uploaded_file($_FILES['image']['tmp_name'], $target_file );
    $TARGET_DIR='image/';   
    $target_file=$TARGET_DIR . $_FILES['image']["name"];
}
$sql = "update  product set name='".$_POST['name']."', price=".$_POST['price'].", quantity=".$_POST['quantity'].", description='".$_POST['description']."', is_showroom=".$_POST['is_showroom'].",image_url='".$target."' where id=".$_POST['id'];

if ($conn->query($sql) == TRUE) {
   header("location:adminview.php");
   echo "New record created successfully";
  
} else {
   echo "Error: " . $sql . "<br>" . $conn->error;
}

?>