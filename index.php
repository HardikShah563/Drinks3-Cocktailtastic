<?php include 'functions.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Cocktailtastic</title>
    <?php include 'header.php' ?>
</head>

<body>
    <div class="box">
        <?php include 'navbar.php' ?>

        <section class="main">
            <div class="main-text">
                <h1>Cocktail<label class="purple">tastic</label></h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi laborum veniam ipsam nostrum minima
                    ratione, tempora libero facilis quaerat! Dolore?</p>
            </div>
            <div class="main-img">
                <img src="./img/main-img.png" alt="main-img">
            </div>
        </section>

        <hr class="main-margin">

        <section class="offerings">
            <h1>Our Offerings</h1>
            <div class="offerings-list">
                <h3 class="title">Alcoholic Drinks: </h3>
                <div class="alcoholic category">
                    <li><a href="./pages/offerings.html#moctails">Mocktails</a></li>
                    <li><a href="./pages/offerings.html#tonics">Tonics</a></li>
                    <li><a href="./pages/offerings.html#beers">Beers</a></li>
                    <li><a href="./pages/offerings.html#ciders">Ciders</a></li>
                </div>
                <h3 class="title">Non-Alcoholic Drinks: </h3>
                <div class="non-alcoholic category">
                    <li><a href="./pages/offerings.html#cocktails">Cocktails</a></li>
                    <li><a href="./pages/offerings.html#energy-drinks">Energy Drinks</a></li>
                    <li><a href="./pages/offerings.html#shakes">Shakes</a></li>
                    <li><a href="./pages/offerings.html#juices">Juices</a></li>
                </div>
            </div>
            <div class="offerings-button">
                <a href="./pages/offerings.html">View All Offerings</a>
            </div>
        </section>

        <hr>

        <?php include 'footer.php' ?>
    </div>
</body>

</html>