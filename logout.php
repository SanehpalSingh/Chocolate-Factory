<?php
if(isset($_POST['logout']))
    {
        unset($_SESSION['username']);
        header('location:index.php');
        session_start();
    }
    if($_SESSION['username'] == true)
    {
        ?>