<?php
include_once("./database.php");

// if sumbitted then register
if (isset($_POST["submit"])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $isRegisterd = registerUser($email, $password);

    if ($isRegisterd == true) {
        header("Location: ../inlog.php");
    }
}
