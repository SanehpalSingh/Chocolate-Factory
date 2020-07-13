<?php
    require_once("views/header.php");
     require_once("db/conn.php");
     $sql = "update  product set like_count = (like_count +1) where id=".$_GET['id'];
    require_once("views/footer.php");
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        header("location:product.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
?>