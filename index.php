<!DOCTYPE html>
<html lang="en">
<?php
try {
    $database = new PDO("mysql:host=localhost;dbname=test1", "root");
} catch (PDOException $e) {
    echo "connection failed";
}
?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/menu.css">
    <title>sushi</title>
</head>

<body>

    <nav>
        <h1>Home</h1>
        <h1>Menu</h1>
        <h1>About us</h1>

        <h2><span class="material-symbols-outlined">
                account_circle
            </span>
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
        <div class="menu">

            <div class="schotel"></div>
            <div class="schotel"></div>
        </div>
    </section>
    <section id="menu2">

        <div class="menu2">
            <div class="smallmenu"><img class="singlesushi"src="img/ebi nigiri.jpg" alt="ebi"></div>
            <div class="smallmenu"><img class="singlesushi"src="img/ikura gunkan.jpg" alt=""></div>
            <div class="smallmenu"><img class="singlesushi"src="img/marguro nigiri.jpg" alt=""></div>
            <div class="smallmenu"><img class="singlesushi"src="img/nigiri.jpg" alt=""></div>
        </div>
    </section>


</body>

</html>