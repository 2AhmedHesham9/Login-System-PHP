<?php
session_start();
include("logout.php");

if (isset($_SESSION['id'])) {
    $id = $_SESSION['id'];
    $name = $_SESSION['name'];
    $email = $_SESSION['email'];
    $password = $_SESSION['password'];
} else {
    $id = 0;
    $name = "Your session was expired go to login page";
    $email = "Your session was expired go to login page";
    $password = "Your session was expired go to login page";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="welcomestyle.css">

    <title>Home Page</title>
</head>

<body>
    <nav class="navbar navbar-light bg-light justify-content-between">
        <a class="navbar-brand">Navbar</a>
        <form class="form-inline" method="post">
            <!-- <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"> -->
            <button class="btn btn-outline-success my-2 my-sm-0 mr-2" type="submit" name="logout">LogOut</button>
            <a href="editpage.php?id=<?php echo  $id ?>" class="btn btn-outline-success my-2 my-sm-0 mr-2" target="_blank">Edit</a>
            <a href="delete.php?id=<?php echo  $id ?>" class="btn btn-outline-danger my-2 my-sm-0 mr-2"> Delete Account

            </a>


        </form>
    </nav>

    <div class="cards">
        <div class="card red">
            <p class="tip">Welcome</p>
            <p class="first-text"> <?php echo $name ?></p>
        </div>
        <div class="card blue">
            <p class="tip">Email</p>
            <p class="first-text"><?php echo $email ?></p>
        </div>
        <div class="card green">
            <p class="tip">Password</p>
            <p class="first-text"><?php echo $password  ?></p>
        </div>
    </div>
</body>

</html>