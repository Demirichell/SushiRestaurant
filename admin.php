<?php include_once ('includes/connect.php');
//var_dump($_SESSION);
if ( isset($_SESSION ['user_logged_in'])&& $_SESSION ['user_logged_in']== true) {
   
}
else {
    header("location: inlog.php");
}
?>

<?php //include_once ('header.php');?>
<a href="logout.php"> logout </a>
<main>

<?php
        include_once "./includes/connect.php";

        $stmt = $conn->prepare("SELECT * FROM gerechten;");
        $stmt->execute();
        $data = $stmt->fetchAll();
        //var_dump($data);
        ?>
        <div class="menu">
            <?php
            foreach ($data as $key => $value) :
            ?>
                <div class="smallmenu">
                    <img class="sushi" src="<?php echo $value['img']; ?> " alt="gerechten">
                    <p> <?php echo $value['naam']; ?> <br>
                        <?php echo $value['prijs']; ?> <br>
                        <?php echo $value['beschrijving']; ?> <br>
                        <a href="delete.php?id=<?php echo $value['id']; ?>">delete</a> 
                    
                    </p>


                </div>
            <?php endforeach; ?>

        </div>
</main>
<?php //include_once ('footer.php');?>