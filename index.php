<?php include 'functions.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Cocktailtastic</title>
    <!-- Including Style Sheet-->
    <link rel="stylesheet" href="./style/style.css">
    <!-- Including Icons -->
    <script src="https://kit.fontawesome.com/6d232ec003.js" crossorigin="anonymous"></script>
    <!-- Including Javascript File -->
    <script src="./script/app.js" defer></script>
</head>

<body>
    <div class="box">
        <section class="nav">
            <nav>
                <div class="logo">
                    <p>Cocktail<label class="purple">tastic</label></p>
                </div>
                <div class="nav-lines">
                    <i class="fa-solid fa-bars-staggered"></i>
                </div>
                <div class="nav-links">
                    <li><a href="#home">Home</a></li>
                    <li><a href="./pages/offerings.html">Offerings</a></li>
                    <li><a href="./pages/contact.html">Contact</a></li>
                    <li><a href="./pages/login.html">Login</a></li>
                    <li><a href="./pages/myaccount.html">My Account</a></li>
                </div>
            </nav>
        </section>

        <section class="main" id="home">
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

        <section class="footer">
            <footer>
                <p>All <label class="copyright-icon">&copy;</label>Copyyrights reserved | Cocktailtastic</p>
            </footer>
        </section>
    </div>
</body>

</html>