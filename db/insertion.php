<?php
    include 'conn.php';

    print_r($_FILES);

    
    $TARGET_DIR='../image/';

    $target_file=$TARGET_DIR . $_FILES['image']["name"];
    
    move_uploaded_file($_FILES['image']['tmp_name'], $target_file );
    $TARGET_DIR='image/';   
    $target_file=$TARGET_DIR . $_FILES['image']["name"];
    print_r($_POST);
    
    $sql = "INSERT INTO product (name, price, description,quantity,image_url,is_showroom)
    VALUES ('".$_POST['name']."', ".$_POST['price'].", '".$_POST['description']."',".$_POST['quantity'].",'".$target_file."',".$_POST['is_showroom'].")";

    if ($conn->query($sql) === TRUE) {
        header("location:../adminview.php");
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    die("got it");
?>