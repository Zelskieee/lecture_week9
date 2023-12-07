<?php 
    session_start(); 
    
    if(isset($_SESSION['submit']))
    {
        $_SESSION['name'] = $_POST['name'];
        $_SESSION['program'] = $_POST['program'];
    }

    if(isset($_SESSION['name']))
    {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Process</title>
    <link rel="icon" href="./img/icon.ico" type="image/x-icon">
</head>
<body>

<nav>
    <a href="about.php">About Us</a>
    <a href="logout.php">Logout</a>
</nav>

<?php
    //echo "Hello " . $_GET['name'] . "<br>";
    //echo "You are from " . $_GET['program'];
    
    echo "Hello " . $_POST['name'] . "<br>";
    echo "You are from " . $_POST['program'];
    setcookie("user", $_POST['name'], time()+ 3600);
?>
</body>
</html>
<?php

    }else{

        echo "Please <a href='index.php'>Login</a> First!";
    }
?>