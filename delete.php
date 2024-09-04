<?php

include 'connection.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];


    $query = "Delete From `users` WHERE `id` = '$id'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        header("location:registerpage.php");
    }
}
