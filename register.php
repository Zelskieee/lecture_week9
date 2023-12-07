<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="icon" href="./img/icon.ico" type="image/x-icon">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <link rel="stylesheet" href="style/register.css">
</head>
<body>

<form action="insert.php" method="post" class="registration-form">

<div class="image-container">
    <img src="./img/register.png" alt="Registration Image" width="110px" height="150px">
</div>

<h1>Register</h1>

<label for="name">Name</label>
    <input type="text" name="name" id="name" required>

    <label for="matric">Matric</label>
    <input type="text" name="matric" id="matric" required>

    <label for="password">Password</label>
    <input type="password" name="password" id="password" required>

    <label for="accessLevel">Role</label>
    <select name="accessLevel" id="accessLevel" required>
        <option value="">Please select</option>
        <option value="lecturer">Lecturer</option>
        <option value="student">Student</option>
    </select>
    
    <div class="g-recaptcha" data-sitekey="YOUR_RECAPTCHA_SITE_KEY"></div>
    
    <input type="submit" name="submit" value="Submit">

    <p>Already have an account? <a href="index.php">Click here</a>.</p>
    
</form>

</body>
</html>
