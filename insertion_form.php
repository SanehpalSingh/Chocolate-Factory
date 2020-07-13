<?php
     session_start();
        include 'db/conn.php';
        require_once("views/header.php");
    
        if($conn->connect_error)
        {
            die("connection failed : ".$conn->connect_error);
        }
        if(isset($_POST['logout']))
        {
            unset($_SESSION['username']);
            header('location:index.php');
            session_start();
        }
        if($_SESSION['username'] == true)
        {
        ?> 
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post" >
             <input type="submit" name="logout" value="logout"><br><br>
        </form>
        
        <form action="db/insertion.php" method="post" enctype="multipart/form-data">
            Name:<br>
            <input type="text" name="name" value="" pattern="[a-zA-z]{1,25}"><br>
            Price:<br>
            <input type="number" name="price" value=""><br><br>
            Quantity:<br>
            <input type="number" name="quantity" value=""><br><br>
            Description:<br>
            <input type="text" name="description" value=""><br><br>
            Showroom Product : <br>
            <input type="radio" name="is_showroom" value="1" checked> Yes
            <input type="radio" name="is_showroom" value="0"> NO<br>
            Image:<br>
            <input type="file" name="image" multiple='multiple'><br><br>

            <input type="submit" value="Submit">
        </form>  
<?php
    }
    else
    header('location:login.php');
?>