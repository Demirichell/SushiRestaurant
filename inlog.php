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
<form action="" method="post">
    <input type="email" name="email" id="">
    <input type="password" name="password" id="">
    <input type="submit" name="submit" value="login">
</form>
<?php //include_once ('footer.php')?>
