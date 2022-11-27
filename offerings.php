<?php include 'functions.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Including Style Sheet-->
    <link rel="stylesheet" href="./../style/style.css">
    <!-- Including Icons -->
    <script src="https://kit.fontawesome.com/6d232ec003.js" crossorigin="anonymous"></script>
    <!-- Including Javascript File -->
    <script src="./../script/app.js" defer></script>
    <title>Offerings | Cocktailtastic</title>
</head>

<body>
    <div class="box offerings-page">
        <section class="nav">
            <nav>
                <div class="logo">
                    <p>Cocktail<label class="purple">tastic</label></p>
                </div>
                <div class="nav-lines">
                    <i class="fa-solid fa-bars-staggered"></i>
                </div>
                <div class="nav-links">
                    <li><a href="../index.html">Home</a></li>
                    <li><a href="./offerings.html">Offerings</a></li>
                    <li><a href="./contact.html">Contact</a></li>
                    <li><a href="./cart.html">Cart</a></li>
                    <li><a href="./login.html">Login</a></li>
                </div>
            </nav>
        </section>

        <section class="alcoholic drinks-container" id="alcoholic">
            <h1>Find your taste</h1>
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
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>

                <div class="drink">
                    <div class="drink-img">
                        <img src="../img/moctail2.png" alt="Moctail1">
                    </div>
                    <div class="drink-text">
                        <div class="drink-name">
                            <p>Moctail 2</p>
                        </div>
                        <div class="drink-cost">
                            <p>€100</p>
                            <input type="number" name="quantity" id="quantity" placeholder="1">
                        </div>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>

                <div class="drink">
                    <div class="drink-img">
                        <img src="../img/moctail3.png" alt="Moctail1">
                    </div>
                    <div class="drink-text">
                        <div class="drink-name">
                            <p>Moctail 3</p>
                        </div>
                        <div class="drink-cost">
                            <p>€100</p>
                            <input type="number" name="quantity" id="quantity" placeholder="1">
                        </div>
                        <button class="add-to-cart">Add to Cart</button>
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
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>

                <div class="drink">
                    <div class="drink-img">
                        <img src="../img/moctail5.png" alt="Moctail1">
                    </div>
                    <div class="drink-text">
                        <div class="drink-name">
                            <p>Moctail 5</p>
                        </div>
                        <div class="drink-cost">
                            <p>€100</p>
                            <input type="number" name="quantity" id="quantity" placeholder="1">
                        </div>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>
            </div>

            <!-- --------- Tonic Drinks Section --------- -->
            <div class="inter-drink">
                <div class="drink">
                    <div class="drink-img">
                        <img src="../img/tonic1.png" alt="Moctail1">
                    </div>
                    <div class="drink-text">
                        <div class="drink-name">
                            <p>Tonic 1</p>
                        </div>
                        <div class="drink-cost">
                            <p>€100</p>
                            <input type="number" name="quantity" id="quantity" placeholder="1">
                        </div>
                        <button class="add-to-cart">Add to Cart</button>
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
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>

                <div class="drink">
                    <div class="drink-img">
                        <img src="../img/tonic3.png" alt="Moctail1">
                    </div>
                    <div class="drink-text">
                        <div class="drink-name">
                            <p>Tonic 3</p>
                        </div>
                        <div class="drink-cost">
                            <p>€100</p>
                            <input type="number" name="quantity" id="quantity" placeholder="1">
                        </div>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>

                <div class="drink">
                    <div class="drink-img">
                        <img src="../img/tonic2.png" alt="Moctail1">
                    </div>
                    <div class="drink-text">
                        <div class="drink-name">
                            <p>Tonic 4</p>
                        </div>
                        <div class="drink-cost">
                            <p>€100</p>
                            <input type="number" name="quantity" id="quantity" placeholder="1">
                        </div>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>
            </div>

            <!-- --------- Beers Drinks Section --------- -->
            <div class="inter-drink">
                <div class="drink">
                    <div class="drink-img">
                        <img src="../img/beer1.png" alt="Moctail1">
                    </div>
                    <div class="drink-text">
                        <div class="drink-name">
                            <p>Beer 1</p>
                        </div>
                        <div class="drink-cost">
                            <p>€100</p>
                            <input type="number" name="quantity" id="quantity" placeholder="1">
                        </div>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>

                <div class="drink">
                    <div class="drink-img">
                        <img src="../img/beer2.png" alt="Moctail1">
                    </div>
                    <div class="drink-text">
                        <div class="drink-name">
                            <p>Beer 2</p>
                        </div>
                        <div class="drink-cost">
                            <p>€100</p>
                            <input type="number" name="quantity" id="quantity" placeholder="1">
                        </div>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>

            </div>

            <!-- --------- Ciders Drinks Section --------- -->
            <div class="inter-drink">
                <div class="drink">
                    <div class="drink-img">
                        <img src="../img/cider1.png" alt="Moctail1">
                    </div>
                    <div class="drink-text">
                        <div class="drink-name">
                            <p>Tonic 1</p>
                        </div>
                        <div class="drink-cost">
                            <p>€100</p>
                            <input type="number" name="quantity" id="quantity" placeholder="1">
                        </div>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>

                <div class="drink">
                    <div class="drink-img">
                        <img src="../img/cider2.png" alt="Moctail1">
                    </div>
                    <div class="drink-text">
                        <div class="drink-name">
                            <p>Tonic 2</p>
                        </div>
                        <div class="drink-cost">
                            <p>€100</p>
                            <input type="number" name="quantity" id="quantity" placeholder="1">
                        </div>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>

                <div class="drink">
                    <div class="drink-img">
                        <img src="../img/cider3.png" alt="Moctail1">
                    </div>
                    <div class="drink-text">
                        <div class="drink-name">
                            <p>Tonic 3</p>
                        </div>
                        <div class="drink-cost">
                            <p>€100</p>
                            <input type="number" name="quantity" id="quantity" placeholder="1">
                        </div>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>

                <div class="drink">
                    <div class="drink-img">
                        <img src="../img/cider4.png" alt="Moctail1">
                    </div>
                    <div class="drink-text">
                        <div class="drink-name">
                            <p>Tonic 4</p>
                        </div>
                        <div class="drink-cost">
                            <p>€100</p>
                            <input type="number" name="quantity" id="quantity" placeholder="1">
                        </div>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>
            </div>
            <!-- All Intermediate Drinks Section Complete -->
        </section>
        
        <!-- -------- Alcoholic Drinks Section Concludes here -->

        <section class="go-to-cart-section">
            <a href="./cart.html">Go to Cart</a>
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