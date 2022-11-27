<?php include 'functions.php' ?>

<?php

$drinks = get_drinks();

if (isset($_POST['add-to-cart'])) {
    header("Location: add-to-cart.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'header.php' ?>
    <title>Offerings | Cocktailtastic</title>
</head>

<body>
    <div class="box offerings-page">
        <?php include 'navbar.php' ?>

        <section class="alcoholic drinks-container" id="alcoholic">
            <h1>Find Your Taste</h1>

            <div class="inter-drink">
                <?php if (mysqli_num_rows($drinks)) { ?>
                    <?php foreach ($drinks as $drink) { ?>
                        <div class="drink">
                            <div class="drink-img">
                                <img src="img/<?= $drink['image'] ?>" alt="drink-image">
                            </div>
                            <div class="drink-text">
                                <div class="drink-name">
                                    <p><?= $drink['name'] ?></p>
                                </div>
                                <div class="drink-cost">
                                    <p>£<?= $drink['price'] ?></p>
                                    <input type="number" name="quantity" id="quantity" placeholder="1">
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                <?php } ?>
            </div>
        </section>

        <section class="go-to-cart-section">
            <a href="cart.php">Go to Cart</a>
        </section>

        <hr>

        <?php include 'footer.php' ?>
    </div>
</body>

</html>