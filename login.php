<?php
    session_start();
    require_once("views/header.php");
  
    if(isset($_POST['submit']))
    {
        $username=$_POST['username'];
        $password=$_POST['password'];
        if($username=='root'&& $password=='Root@123' )
        {
            $_SESSION['username']=$username;
         
           header("location:adminview.php");
            echo 'login successfully';   
        }
        else
        {
            echo "Wrong Input Data";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<main>
<br>
  <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
         <label for="$username">Username</label>
         <input type="text" name="username" id="username" value="" required />
         <br><br>
         <label for="$username">Password</label>
         <input type="password" name="password" id="password" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required value="" />
         <br><br>
         <input type="submit" name="submit" value="login" />
  </form>


</main>
<?php
require_once('views/footer.php');
?>
</body>
</html>