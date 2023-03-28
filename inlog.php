<?php
if (isset($_POST["email"]) && isset($_POST["password"])) {
    if (
        $_POST["email"] == 'd.radic@roc-nijmegen.nl' &&
        $_POST["password"] == '12345'
    ) {
        echo 'success';
    }
}
//var_dump($_POST);
//var_dump($_POST["email"]);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="/css/inlog.css">
    <title>Login</title>
</head>

<body>
    
        <form class="login" action="post.php" method="post">
            email
            <input type="email" name="email" id="" placeholder="email">
            password
            <input type="password" name="password" id="">
            <input type="submit" value="login">
        </form>
    
</body>

</html>