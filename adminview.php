<?php
    require_once("views/header.php");
    session_start();
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
<ul>
    <li><a href="insertion_form.php"> insert product </a></li>
    <li><a href="updation.php"> update product</a></li>
<ul>
<?php
        }
        else
        header('location:login.php');
    require_once("views/footer.php");
    
?>