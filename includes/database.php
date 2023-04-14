<?php
include_once('./connect.php');

// registreerd user
function registerUser($email, $password)
{
    global $conn;
    $stmt = $conn->prepare("INSERT INTO users (email, password) VALUES ( :email, :password)");
    $stmt->bindParam(':email', $email);
    $stmt->bindValue(':password', password_hash($password, PASSWORD_DEFAULT));
    $stmt->execute();
    return true;
}
