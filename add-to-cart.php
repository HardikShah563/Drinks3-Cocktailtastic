<?php include 'functions.php' ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'header.php' ?>
    <title>Popup | Cocktailtastic</title>
</head>
<body>
    <div class="box login-box">
        <?php include 'navbar.php' ?>

        <?php

        if (isset($_POST['add-to-cart'])) {
            $data = $_POST;
            $id = $_POST["d_id"];
            $quantity = (int)($_POST['quantity']);
            if($quantity == 0) {
                $quantity += 1;
            }
            if (add_to_cart($id, $quantity)) {
                $response = [
                    'type' => 'success',
                    'message' => 'Drink is added to cart successfully!',
                    'icon' => '<i class="fa-regular fa-circle-check"></i>'
                ];
            } else {
                $response = [
                    'type' => 'success',
                    'message' => 'Some Error Occured, Please try again!',
                    'icon' => '<i class="fa-regular fa-circle-xmark"></i>'
                ];
            }
        } else if (isset($_POST['update-to-cart'])) {
            $data = $_POST;
            $id = $_POST["d_id"];
            $quantity = $_POST['quantity'];
            if (update_to_cart($id, $quantity)) {
                $response = [
                    'type' => 'success',
                    'message' => 'Drink is added to cart successfully!',
                    'icon' => '<i class="fa-regular fa-circle-check"></i>'
                ];
            } else {
                $response = [
                    'type' => 'success',
                    'message' => 'Some Error Occured, Please try again!',
                    'icon' => '<i class="fa-regular fa-circle-xmark"></i>'
                ];
            }
        } else if (isset($_POST['remove-from-cart'])) {
            $id = $_POST["d_id"];
            if (remove_from_cart($id)) {
                $response = [
                'type' => 'success',
                'message' => 'Drink is removed from cart',
                'icon' => '<i class="fa-regular fa-circle-check"></i>'
                ];
            } else {
                $response = [
                'type' => 'error',
                'message' => 'Some Error Occured, Please try again!',
                'icon' => '<i class="fa-regular fa-circle-xmark"></i>'
                ];
            }
        }

        ?>

        <section class="login-register-box">
            <div class="message-announcement">
                <h1><?= $response['icon'] ?></h1>
                <h1><?= $response['message'] ?></h1>
            </div>
            
            <form action="?" method="post">
                <a style="text-align: center; padding-top: 5px;" class="submit-button" href="offerings.php">Continue Shopping</a>
            </form>
        </section>

        <br><br>

        <?php include 'footer.php' ?>
    </div>
</body>
</html>