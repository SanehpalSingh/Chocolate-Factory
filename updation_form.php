<?php
    include 'db/conn.php';
    require_once("views/header.php");
 
    $sql = "SELECT * from product where id=".$_GET['id'];
    $result = $conn->query($sql);

    while($row = $result->fetch_assoc()) {
?>
<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post" >
             <input type="submit" name="logout" value="logout"><br><br>
        </form>
        
        <form action="db_update.php" method="post" enctype="multipart/form-data">
            Name:<br>
            <input type="text" name="name" value="<?= $row['name']?>" pattern="[a-zA-z]{1,25}"><br>
            <input type="hidden" name="id" value="<?=$_GET['id'] ?>">
            Price:<br>
            <input type="number" name="price" value="<?= $row['price']?>"><br><br>
            Quantity:<br>
            <input type="number" name="quantity" value="<?= $row['quantity']?>"><br><br>
            Description:<br>
            <input type="text" name="description" value="<?= $row['description']?>"><br><br>
            Showroom Product : <br>
            <input type="radio" name="is_showroom" value="1" checked> Yes
            <input type="radio" name="is_showroom" value="0"> NO<br>
            Image:<br>
            <input type="file" name="image"  ><br><br>
            <input type="hidden" name="file"value="<?= $row['image_url']?>">

            <input type="submit" value="Submit">
        </form> 
    <?php
    }


    ?>