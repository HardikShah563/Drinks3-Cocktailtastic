<?php include 'functions.php' ?>

<?php

if (isset($_POST['register'])) {
    $data = $_POST;
    $user_exists = email_exists($data['email']);
    if ($user_exists) {
        $response = [
            'type' => 'error',
            'message' => 'Email is Already Taken!',
            'icon' => '<i class="fa-solid fa-circle-xmark"></i>',
        ];
    } else {
    if ($data["password"] == $data["cpassword"]) {
        $data["type"] = 'user';
        $user = signup($data);
        if ($user) {
            $response = [
                'type' => 'success',
                'message' => 'User Registered Successfully!',
                'icon' => '<i class="fa-solid fa-circle-check"></i>',
            ];
        } else {
            $response = [
                'type' => 'error',
                'message' => 'Some Error Occured!',
                'icon' => '<i class="fa-solid fa-circle-xmark"></i>',
            ];
        }
        } else {
            $response = [
                'type' => 'error',
                'message' => 'Passwords should match!',
                'icon' => '<i class="fa-solid fa-circle-xmark"></i>',
            ];
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'header.php' ?>
    <title>Register | Cocktailtastic</title>
</head>
<body>
    <div class="box login-box">
        <?php include 'navbar.php' ?>

        <section class="login-register-box">
            <h1>Register new account</h1>
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
                <p>First Name: </p>
                <input type="text" name="fname" required>
                <p>Last Name: </p>
                <input type="text" name="lname" required>
                <p>Email Address: </p>
                <input type="email" name="email" required>
                <p>Create Password: </p>
                <input type="password" name="password" id="password" required>
                <p>Retype Password: </p>
                <input type="password" name="cpassword" required>
                <button class="submit-button" type="submit" name="register">Register</button>
            </form>
            <p class="register-statement">Already have an account?&nbsp;<a href="login.php">Sign into your account</a></p>
        </section>
        
        <?php include 'footer.php' ?>
    </div>
</body>
</html>