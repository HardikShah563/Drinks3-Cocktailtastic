<?php include 'functions.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'header.php' ?>
    <title>Cart | Cocktailtastic</title>
</head>

<body>
    <div class="box cart-page">
        <?php include 'navbar.php' ?>

        <section class="drinks-container">
            <h1>Cart</h1>
            <!-- --------- Moctail Drinks Section --------- -->
            <div class="inter-drink" id="mocktails">
                <div class="drink">
                    <div class="drink-img">
                        <img src="../img/moctail1.png" alt="Moctail1">
                    </div>
                    <div class="drink-text">
                        <div class="drink-name">
                            <p>Moctail 1</p>
                        </div>
                        <div class="drink-cost">
                            <p>€100</p>
                            <input type="number" name="quantity" id="quantity" placeholder="1">
                        </div>
                        <button class="remove-from-cart">Remove to Cart</button>
                    </div>
                </div>

                <div class="drink">
                    <div class="drink-img">
                        <img src="../img/tonic2.png" alt="Moctail1">
                    </div>
                    <div class="drink-text">
                        <div class="drink-name">
                            <p>Tonic 2</p>
                        </div>
                        <div class="drink-cost">
                            <p>€100</p>
                            <input type="number" name="quantity" id="quantity" placeholder="1">
                        </div>
                        <button class="remove-from-cart">Remove to Cart</button>
                    </div>
                </div>

                <div class="drink">
                    <div class="drink-img">
                        <img src="../img/beer1.png" alt="Moctail1">
                    </div>
                    <div class="drink-text">
                        <div class="drink-name">
                            <p>Beer 3</p>
                        </div>
                        <div class="drink-cost">
                            <p>€100</p>
                            <input type="number" name="quantity" id="quantity" placeholder="1">
                        </div>
                        <button class="remove-from-cart">Remove to Cart</button>
                    </div>
                </div>

                <div class="drink">
                    <div class="drink-img">
                        <img src="../img/moctail4.png" alt="Moctail1">
                    </div>
                    <div class="drink-text">
                        <div class="drink-name">
                            <p>Moctail 4</p>
                        </div>
                        <div class="drink-cost">
                            <p>€100</p>
                            <input type="number" name="quantity" id="quantity" placeholder="1">
                        </div>
                        <button class="remove-from-cart">Remove to Cart</button>
                    </div>
                </div>

                <div class="drink">
                    <div class="drink-img">
                        <img src="../img/cider2.png" alt="Moctail1">
                    </div>
                    <div class="drink-text">
                        <div class="drink-name">
                            <p>Cider 5</p>
                        </div>
                        <div class="drink-cost">
                            <p>€100</p>
                            <input type="number" name="quantity" id="quantity" placeholder="1">
                        </div>
                        <button class="remove-from-cart">Remove to Cart</button>
                    </div>
                </div>
            </div>
        </section>

        <section class="checkout-section">
            <a href="./checkout.html">Checkout with your shopping</a>
        </section>

        <hr>

        <?php include 'footer.php' ?>
    </div>
</body>

</html>