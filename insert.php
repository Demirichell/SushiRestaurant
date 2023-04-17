  <?php
    include_once('includes/connect.php');
    //var_dump($_SESSION);
    if (isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in'] == true) {
    } else {
        header("location: inlog.php");
    }
    if (isset($_POST["submit"])) {
        $sql = "INSERT INTO gerechten
        ( naam, prijs,beschrijving, img)
        VALUES
        (:naam, :prijs, :beschrijving, :img)";

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':naam', $_POST['naam']);
        $stmt->bindParam(':prijs', $_POST['prijs']);
        $stmt->bindParam(':beschrijving', $_POST['beschrijving']);
        $stmt->bindParam(':img', $_POST['img']);
        $stmt->execute();
    }
    ?>
  <div>
      <form action="" method=" post">
          <input type="text" name="naam" id="" placeholder="naam gerecht"><br>
          <input type="text" name="beschrijving" id="" placeholder="beschrijving"><br>
          <input type="text" name="prijs" id="" placeholder="prijs"><br>
          <input type="text" name="img" id="" placeholder="img url"><br>
          <input type="submit" value="toevoegen" name="submit">
      </form>
  </div>