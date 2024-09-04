<?php
include 'connection.php';

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "SELECT * From `users` WHERE `email` = '$email' AND `password` = '$password' ";
    $result = mysqli_query($conn, $query);
    if ($result->num_rows > 0) {
        $userData = $result->fetch_assoc();
        session_start();
        $_SESSION['id'] = $userData['id'];
        $_SESSION["name"] = $userData['name'];
        $_SESSION["email"] = $userData['email'];
        $_SESSION["password"] = $userData['password'];


        header("location:welcomepage.php");
    }
}
