<?php include 'functions.php' ?>

<?php

$drinks = get_drinks();

// if (isset($_POST['add-to-cart'])) {
//     header("Location: add-to-cart.php");
// }

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
                            
                        </div>
                        
                        <div class="add-to-basket">
                        <form id="add-to-cart-form" action="add-to-cart.php" method="POST">
                            <div class="drink-cost">
                                <p class="price">£<?= $drink['price'] ?></p>
                                <input style="width: 60%; margin: auto auto; padding: 8px;" type="number" name="quantity" id="item-<?= $drink['d_id'] ?>" min="1" placeholder="1">
                            </div>
                            <input type="hidden" name="d_id" value="<?= $drink['d_id'] ?>">
                            <button style="width: 90%;" type="submit" name="add-to-cart" class="add-to-cart">Add To Cart</button>
                        </form>
                        </div>
                    </div>
                    </div>
                <?php } ?>
                </div>
            <?php } ?>
        </section>

        <section class="go-to-cart-section">
            <a href="cart.php">Go to Cart</a>
        </section>

        <hr>

        <?php include 'footer.php' ?>
    </div>
</body>

</html>