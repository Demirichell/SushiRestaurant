<?php
include_once('connect.php');

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
//inlog functie 
function findUser($email, $password)
{
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM users WHERE email=:email");
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $user = $stmt->fetch();
    //var_dump($user);
    echo $password;
    if ($user && password_verify($password, $user['password'])) {
        return $user;
    } else {
        return null;
    }
}
