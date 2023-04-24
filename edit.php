<?php include_once('includes/connect.php');
//var_dump($_SESSION);
if (isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in'] == true) {
} else {
    header("location: inlog.php");
}

$stmt = $conn->prepare("SELECT * FROM gerechten WHERE ID =:id");
$stmt->execute(['id' => $_GET['id']]);
$data = $stmt->fetch();
if (isset($_POST["veranderen"])) {
    $sql = "UPDATE gerechten SET
        naam = :naam,
        beschrijving = :beschrijving,
        prijs = :prijs, 
        img = :img
        WHERE ID =:id";
    if (isset($_POST["submit"])) {
        if (!isset($_POST["naam"]) || empty($_POST["naam"])) {
            $message = "geef een naam op";
        }
        if (!isset($_POST["prijs"]) || empty($_POST["prijs"])) {
            $message1 = "geef een prijs op";
        }
        if (!isset($_POST["beschrijving"]) || empty($_POST["beschrijving"])) {
            $message2 = "geef een beschrijving op";
        }
        if (!isset($_POST["img"]) || empty($_POST["img"])) {
            $message3 = "geef een img op";
        }
    }
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
<!DOCTYPE html>
<html lang="en">


<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/edit.css">
    <title>sushi</title>
</head>

<body>

    <div class="editform">
        <div class="itemtoevoegen">
            <?php if (isset($message) && !empty($message)) {
                echo $message;
            }

            ?>
            <?php if (isset($message1) && !empty($message1)) {
                echo $message1;
            }

            ?>
            <?php if (isset($message2) && !empty($message2)) {
                echo $message2;
            }

            ?>
            <?php if (isset($message3) && !empty($message3)) {
                echo $message3;
            }
            ?>
            <form action="" method="post">
                <input type="text" name="naam" id="" value="<?php echo $data['naam']; ?>" placeholder="naam">
                <input type="text" name="beschrijving" id="" value="<?php echo $data['beschrijving']; ?>" placeholder="beschrijving">
                <input type="text" name="prijs" id="" value="<?php echo $data['prijs']; ?>" placeholder="prijs">
                <input type="text" name="img" id="" value="<?php echo $data['img']; ?>" placeholder="img">
                <input type="submit" value="veranderen" name="veranderen">
            </form>
        </div>
</body>

</html>