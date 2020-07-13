<?php
include 'views\header.php';
    include 'db/conn.php';
    require_once("views/header.php");

    $sql = "SELECT * from product where is_showroom=1";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) 
    {
        // output data of each row
?>
 <centre>   <ul>
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
    </centre>
    <?php
     }
     else
     {
         echo 'no product to display';
     }
     require_once("views/footer.php");
    ?>
<?php include 'views\footer.php';?>