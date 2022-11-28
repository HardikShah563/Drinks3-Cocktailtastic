<?php include '../functions.php' ?>

<?php

$id = $_SESSION['u_id'];
$deleted = delete_user($id);

if ($deleted) {
    $response = [
        'type' => 'success',
        'message' => 'User Deleted Successfully!',
        'icon' => '<i class="fa-regular fa-circle-check"></i>'
    ];
} else {
    $response = [
        'type' => 'error',
        'message' => 'Some Error Occured, Please Try Again',
        'icon' => '<i class="fa-regular fa-circle-xmark"></i>'
    ];
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'header.php' ?>
    <title>Popup | Cocktailtastic</title>
</head>
<body>
    <div class="box login-box">
        <?php include 'navbar.php' ?>

        <section class="login-register-box">
        <div class="message-announcement">
                <h1><?= $response['icon'] ?></h1>
                <h1><?= $response['message'] ?></h1>
            </div>
        </section>

        <br><br>

        <?php include 'footer.php' ?>
    </div>
</body>
</html>