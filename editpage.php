<?php
session_start();
include("edit.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="editpage.css">
    <title>Edit</title>
</head>

<body>
    <div class="card">
        <span class="title">Leave a Comment</span>
        <form class="form" method="post">
            <div class="group">
                <input placeholder="" type="text" name="username" required=""value="<?php echo  $_SESSION["username"]?>">
                <label for="name">Name</label>
            </div>
            <div class="group">
                <input placeholder="" type="email" id="email" name="email" required="" value="<?php echo  $_SESSION["email"]?>">
                <label for="email">Email</label>
            </div>
            <div class="group">
                <input placeholder="" type="text" id="password" name="password" required="" value="<?php echo  $_SESSION["password"]?>">
                <label for="password">Password</label>
            </div>
            
            <button type="submit" name="update">Update</button>
        </form>
    </div>

</body>

</html>