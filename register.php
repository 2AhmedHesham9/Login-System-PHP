<?php
include 'connection.php';
if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    // $query = "INSERT INTO `users` (`name`,`email`,`password`) VALUES( $username,$email,$password )";
    $query = " INSERT INTO `users`(  `name`, `email`, `password`) VALUES ( '$username','$email','$password')";
    $result = mysqli_query($conn, $query);
    if ($result) {
        // echo "<script>alert('account added')</script>";
        header('Location:loginpage.php');
    }
    var_dump("register");
}
