<!DOCTYPE html>
<html lang="en">


<head>
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/menu.css">
    <title>sushi</title>
</head>

<body>

    <nav>
        <a href="#landingpage">
            <h1>Home</h1>
        </a>
        <a href="#menu">
            <h1>Menu</h1>
        </a>
        <h1>About us</h1>
        <h2><a href="inlog.php"><span class="material-symbols-outlined">
                    account_circle
                </span></a>
        </h2>

        <form action="search.php" method="post">
            <input type="search" name="search">
            <input type="submit" name="submit">
        </form>

    </nav>
    <section id="landingpage">
        <img class="sushibig" src="img/sushilandingpage.jpg" alt="sushi">
        <div class="aboutus">
            <h4>Sushi by Demi</h4>
            <p>"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."
                "There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain..."
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum pulvinar ligula ac nunc varius rutrum. Vivamus volutpat pharetra ipsum, id scelerisque augue volutpat in. Quisque vestibulum lectus in nisi efficitur aliquet. Donec nunc justo, eleifend eget vehicula id </p>
        </div>
        <img class="sushirigt" src="img/sushiright.jpg" alt="">
    </section>
    <section id="menu">

        <?php
        include_once "./includes/connect.php";

        $stmt = $conn->prepare("SELECT * FROM gerechten;");
        $stmt->execute();
        $data = $stmt->fetchAll();
        //var_dump($data);
        ?>
        <div class="searchmenu"></div>
        <div class="menu">
            <?php
            foreach ($data as $key => $value) :
            ?>
                <div class="smallmenu">
                    <img class="sushi" src="<?php echo $value['img']; ?> " alt="gerechten">
                    <p> <?php echo $value['naam']; ?> <br>
                        € <?php echo $value['prijs']; ?> <br>
                        <?php echo $value['beschrijving']; ?> </p>

                </div>
            <?php endforeach; ?>

        </div>
    </section>
    <section id="contact">
        <h4> coming soon.......</h4>


    </section>


</body>

</html>