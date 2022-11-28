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
            <h1>Cart Items</h1>

            <?php if (mysqli_num_rows($drinks)) { ?>
                <div class="inter-drink">
                <?php foreach ($drinks as $drink) { ?>
                    <div class="drink">
                        <div class="drink-img">
                            <img src="img/<?= $drink['image'] ?>" alt="" />
                        </div>
                    <div class="drink-text">
                        <div class="drink-name">
                            <p><?= $drink['name'] ?></p>
                        </div>
                        <div class="drink-cost">
                            <p class="price">£<?= $drink['price'] ?></p>
                            <input readonly form="add-to-cart-form" type="text" name="quantity" id="item-<?= $drink['d_id'] ?>" value="<?= $cart[$drink['d_id']] ?>">
                        </div>
                        
                        <div class="add-to-basket">
                        <form id="add-to-cart-form" action="add-to-cart.php" method="POST">
                            <input type="hidden" name="d_id" value="<?= $drink['d_id'] ?>">
                            <button style="width: 90%;" type="submit" name="remove-from-cart" class="add-to-cart">Remove from Cart</button>
                        </form>
                        </div>
                    </div>
                    </div>
                <?php } ?>
                </div>
            <?php } ?>
        </section>

        <h2 style="text-align: center;">Total: <?= get_total(); ?></h2>
        
        <section class="checkout-section">
            <?php if (mysqli_num_rows($drinks)) { ?>
                <a href="checkout.php">Checkout with your shopping</a>
            <?php } else { ?>
                <p>-------- Cart is Empty --------</p>
            <?php } ?>
        </section>

        <hr>

        <?php include 'footer.php' ?>
    </div>
</body>

</html>