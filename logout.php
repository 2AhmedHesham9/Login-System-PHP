<?php
if (isset($_POST['logout'])) {


    session_destroy();
    header('Location:loginpage.php');
}
