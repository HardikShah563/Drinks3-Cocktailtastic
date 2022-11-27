<?php include 'functions.php' ?>

<?php

$cart = get_cart();
if (isset($cart)) {
  $drinks = get_drinks_by_ids($cart);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'header.php' ?>
    <title>Cart | Cocktailtastic</title>
</head>

<body>
    <div class="box cart-page">
        <?php include 'navbar.php' ?>

        <section class="alcoholic drinks-container" id="alcoholic">
            <h1>Cart</h1>
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
                            <form action="add-to-cart.php" method="post">
                                <div class="drink-cost">
                                    <p>£<?= $drink['price'] ?></p>
                                    <input type="hidden" name="d_id" value="<?= $drink['d_id'] ?>">
                                    <input type="number" name="quantity" id="item-<?= $drink['d_id'] ?>" placeholder="1">
                                </div>
                                <button style="width: 90%;" class="add-to-cart">Add to Cart</button>
                            </form>
                        </div>
                    </div>
                <?php } ?>
            <?php } ?>
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