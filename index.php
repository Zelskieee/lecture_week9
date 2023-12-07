<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" href="./img/icon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style/style.css">
</head>
<body>

<div class="registration-form">
    <form action="process.php" method="post">
    
    <div class="image-container">
    <img src="./img/register.png" alt="Registration Image" width="110px" height="150px">
    </div>

        <h1>Login</h1>

        <label for="name">Name:</label>
        <input type="text" name="name" id="name">
        
        <label for="program">Program:</label>
        <input type="text" name="program" id="program">
        
        <input type="submit" name="submit" value="Submit">

        <p>Don't have an account? <a href="register.php">Click here</a>.</p>

    </form>
</div>

</body>
</html>
