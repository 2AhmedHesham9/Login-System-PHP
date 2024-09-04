<?php
include("register.php");


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sign Up Page</title>
</head>

<body>
    <div class="login-box">

        <form action=" " method="post">
            <div class="user-box">
                <input type="text" name="username" required>
                <label>User Name</label>
            </div>
            <div class="user-box">
                <input type="email" name="email" required>
                <label>Email</label>
            </div>
            <div class="user-box">
                <input type="password" name="password" required>
                <label>Password</label>
            </div>
            <center>
                <button name="register" value="register">
                    Sign Up
                    <span></span>
                </button>


            </center>
        </form>
    </div>
</body>

</html>