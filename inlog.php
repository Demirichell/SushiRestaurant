<?php
    if(isset($_POST["email"]) && isset($_POST["password"])){
        if($_POST["email"] == 'd.radic@roc-nijmegen.nl' && 
        $_POST["password"] == '12345'){
            echo 'success';
        }
    }
    //var_dump($_POST);
    //var_dump($_POST["email"]);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="post.php" method="post">
        email
        <input type="email" name="email" id="" 
        placeholder="email">
        password
        <input type="password" name="password" id="">
        <input type="submit" value="login">
    </form>
    
</body>
</html>