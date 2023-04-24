<?php

include_once('./includes/connect.php');
include_once('./includes/database.php');

if (isset($_POST['email']) && isset($_POST['password'])) {
    $user = findUser($_POST['email'], $_POST['password']);
    var_dump($user);
    if ($user !== null) {
        $_SESSION['user_logged_in'] = true;
        $_SESSION['email'] = $_POST['email'];
        header("location: admin.php");
    }
}

?>

<!DOCTYPE html>
<html lang="en">


<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/menu.css">
    <link rel="stylesheet" href="./css/inlog.css">
    <title>sushi</title>
</head>

<body>
    <div>
    </div>
    <div class="inlogform">
        <img class="avatar" src="./img/emptyavatar.png" alt="avatar">
        <form action="./inlog.php" method="post">
            <input type="email" name="email" id="email" placeholder="email">
            <input type="password" name="password" id="" placeholder="password">
            <input type="submit" name="submit" value="login">
        </form>
        <?php //include_once ('footer.php')
        ?>
    </div>
    <div class="registerbutton">
        <a href="register.php">registreer</a>
    </div>
</body>

</html>