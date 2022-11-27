<?php include 'functions.php' ?>

<?php

if (isset($_POST['login'])) {
    $data = $_POST;
    $user = login($data);
    if (!$user) {
        $response = [
            'type' => 'error',
            'message' => 'Login Failed!',
            'icon' => '<i class="fa-solid fa-circle-xmark"></i>',
        ];
    } else {
        $response = [
            'type' => 'success',
            'message' => 'Login Successful!',
            'icon' => '<i class="fa-solid fa-circle-xmark"></i>',
        ];
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'header.php' ?>
    <title>Login | Cocktailtastic</title>
</head>
<body>
    <div class="box login-box">
        <?php include 'navbar.php' ?>

        <section class="login-register-box">
            <h1>Log into an existing account</h1>
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
                <p>Email Address/Username: </p>
                <input type="email" name="email" required>
                <p>Password: </p>
                <input type="password" name="password" required>
                <button class="submit-button" type="submit" name="login">Log In</button>
            </form>
            <p class="register-statement">Don't have an account?&nbsp;<a href="register.php">Create New Account here</a></p>
        </section>

        <hr>

        <?php include 'footer.php' ?>
    </div>
</body>
</html>