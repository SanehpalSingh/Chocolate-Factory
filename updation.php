<?php

    require_once("views/header.php");
    require_once("db/conn.php");
    $sql = "SELECT * from product";
    $result = $conn->query($sql);
    if(isset($_POST['logout']))
    {
        unset($_SESSION['username']);
        header('location:index.php');
        session_start();
    }
    session_start();
    if($_SESSION['username'] == true)
    {
        ?> 
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post" >
             <input type="submit" name="logout" value="logout"><br><br>
        </form>
      <?php  
    if ($result->num_rows > 0) 
    {
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
                <li><a href="updation_form.php?id=<?=$row["id"]?>">Update Product</a></li>
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
    }
    else
    header('location:login.php');
?>