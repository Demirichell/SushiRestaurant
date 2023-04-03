<!DOCTYPE html>
<html lang="en">


<head>
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
        <h2><span class="material-symbols-outlined">
                shopping_cart
            </span></h2>


    </nav>
    <section id="landingpage">
        <img class="sushibig" src="img/sushilandingpage.jpg" alt="sushi">
        <div class="aboutus">1</div>
        <img class="sushirigt" src="img/sushiright.jpg" alt="">
    </section>
    <section id="menu">
        <div class="searchmenu">
            <div class="search-container">
                <form action="/action_page.php">
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit"><span class="material-symbols-outlined">
                            search
                        </span><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>
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
                        <?php echo $value['beschrijving']; ?> </p>

                </div>
            <?php endforeach; ?>

        </div>
    </section>
    <section id="menu2">


    </section>


</body>

</html>