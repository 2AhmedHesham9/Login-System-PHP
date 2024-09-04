<?php
include 'connection.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * From `users` WHERE `id` = '$id' ";
    $result = mysqli_query($conn, $query);
    if ($result->num_rows) {
        $userData = $result->fetch_assoc();

        $_SESSION["username"] = $userData['name'];
        $_SESSION["email"] = $userData['email'];
        $_SESSION["password"] = $userData['password'];
    }
}

if (isset($_POST['update'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    echo $id;
    $query = "UPDATE `users` SET `name` = '$username', `email` = '$email',`password`= '$password' where `id` = '$id' ";
    $_SESSION["name"] = $username;
    $_SESSION["email"] = $email;
    $_SESSION["password"] = $password;
    $result = mysqli_query($conn, $query);
    if ($result) {
        header("location:welcomepage.php");
    }
}
