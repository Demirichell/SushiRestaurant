
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
    <?php include_once ('includes/connect.php');

$message ="";
//var_dump($_POST);
if (isset($_POST["email"]) && isset($_POST['password'])) {
    if(empty($_POST['email'])&& empty($_POST ['password'])){
    $message = " email and password is empty";
    }  else {
        if ($_POST['email'] == "demi@rocnijmegen.nl" && $_POST['password'] == "1234"){
            $_SESSION['user_logged_in'] = true;
            $_SESSION['email'] = $_POST ['email'];
            header ("location: admin.php");
        }
    }
}
?>
</div>

<div class="inlogform">
<form action="./includes/login.php" method="post" >
    <input type="email" name="email" id="">
    <input type="password" name="password" id="">
    <input type="submit" name="submit" value="login">
</form>
<?php //include_once ('footer.php')?>
</div>

</body>

</html>








