<?php
    include 'db/conn.php';
    require_once("views/header.php");

    $sql = "SELECT * from product";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) 
    {
        // output data of each row
?>
   <ul>
<?php
        while($row = $result->fetch_assoc()) 
        {

?>

                <img src = "<?= $row["image_url"]  ?>" height="300" width="400">
                <li>Name : <?= $row["name"]; ?></li>
                <li> Price : <?= $row["price"];?></li>
                <li> Quantity : <?= $row["quantity"];?></li>
                <li> Likes : <?= $row["like_count"];?></li>
                <li> <a href="likepage.php?id=<?=$row["id"] ?>"> Like product</a></li>
                <br><br>
            <?php
        }
    
    ?>
   
    </ul>

    <?php
     }
     else
     {
         echo 'no product to display';
     }
     require_once("views/footer.php");
    ?>