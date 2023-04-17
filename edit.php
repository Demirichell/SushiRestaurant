 <?php include_once('includes/connect.php');
    //var_dump($_SESSION);
    if (isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in'] == true) {
    } else {
        header("location: inlog.php");
    }

    $stmt = $conn->prepare("SELECT * FROM gerechten WHERE ID =:id");
    $stmt->execute(['id' => $_GET['id']]);
    $data = $stmt->fetch();
    if (isset($_POST["toevoegen"])) {
        $sql = "UPDATE gerechten SET
        naam = :naam,
        beschrijving = :beschrijving,
        prijs = :prijs, 
        img = :img
        WHERE ID =:id";

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':naam', $_POST['naam']);
        $stmt->bindParam(':beschrijving', $_POST['beschrijving']);
        $stmt->bindParam(':prijs', $_POST['prijs']);
        $stmt->bindParam(':img', $_POST['img']);
        $stmt->bindParam(':id', $data['id']);
        $stmt->execute();
        //$stmt->debugDumpParams();
        header("location: admin.php");
    }

    ?>
 <div>
     <form action="" method="post">
         <input type="text" name="naam" id="" value="<?php echo $data['naam']; ?>" placeholder="naam">
         <input type="text" name="beschrijving" id="" value="<?php echo $data['beschrijving']; ?>" placeholder="beschrijving">
         <input type="text" name="prijs" id="" value="<?php echo $data['prijs']; ?>" placeholder="prijs">
         <input type="text" name="img" id="" value="<?php echo $data['img']; ?>" placeholder="img">
         <input type="submit" value="toevoegen" name="toevoegen">

     </form>
 </div>