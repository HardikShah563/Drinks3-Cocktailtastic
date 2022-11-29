<?php include 'functions.php' ?>

<?php
if (!isset($_SESSION['u_id'])) {
    header('Location: ./index.php');
}
if (isset($_POST['checkout'])) {
    $checkout = $_POST;
    $cart = get_cart();
    if (!empty($cart)) {
        $checkout['u_id'] = $_SESSION["u_id"];
        $checkout["total"] = get_total();
        $checkout["drinks"] = json_encode($cart, true);
        $checkout = checkout($checkout);
        if (!$checkout) {
            $response = [
                'type' => 'error',
                'message' => 'Checkout Failed!',
                'icon' => '<i class="fa-solid fa-circle-xmark"></i>',
            ];
        } else {
            $response = [
                'type' => 'success',
                'message' => 'Checkout Successful',
                'icon' => '<i class="fa-solid fa-circle-check"></i>',
            ];
            empty_cart();
        }
    } else {
        header('Location: offerings.php');
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'header.php' ?>
    <title>Checkout | Cocktailtastic</title>
</head>

<body>
    <div class="box checkout-page">
        <?php include 'navbar.php' ?>

        <section class="checkout-form">
            <h1>Checkout</h1>
            <form action="?" method="post">
                <!-- Message response box -->
                <?php if (isset($response)) { ?>
                    <div class="message-box <?= $response['type'] ?>">
                        <div class="icon">
                            <?= $response['icon'] ?>
                        </div>
                        <div class="message">
                            <?= $response['message'] ?>
                        </div>
                    </div>
                <?php } ?>
                <h3>Personal Information: </h3>
                <div class="form personal-details">
                    <div class="grouping">
                        <input type="text" name="fname" placeholder="First Name">
                        <input type="text" name="lname" placeholder="Last Name">
                    </div>
                    <div class="grouping">
                        <input type="number" name="phoneno" placeholder="Phone Number">
                        <input type="email" name="email" placeholder="Email Address">
                    </div>
                </div>
                <hr>
                <h3>Address: </h3>
                <div class="form address-details">
                    <input type="text" placeholder="Address Line 1" required>
                    <div class="grouping">
                        <input type="text" placeholder="Pincode" required>
                        <input type="text" placeholder="City" required>
                        <input type="text" placeholder="State" required>
                    </div>
                </div>
                <hr>
                <h3>Mode of Payment: </h3>
                <div class="form payment-details">
                    <input type="text" placeholder="Mode of Payment" required>
                </div>
                <div class="form">
                    <button name="checkout" class="submit-button" type="submit">Submit</button>
                </div>
            </form>
        </section>

        <hr>

        <?php include 'footer.php' ?>
    </div>
</body>

</html>