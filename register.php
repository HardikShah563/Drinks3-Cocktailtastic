<?php include 'functions.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Including Style Sheet-->
    <link rel="stylesheet" href="../style/style.css">
    <!-- Including Icons -->
    <script src="https://kit.fontawesome.com/6d232ec003.js" crossorigin="anonymous"></script>
    <!-- Including Javascript File -->
    <script src="./../script/app.js" defer></script>
    <title>Register | Cocktailtastic</title>
</head>
<body>
    <div class="box login-box">
        <?php include 'navbar.php' ?>

        <section class="login-register-box">
            <h1>Register new account</h1>
            <form action="?" method="post">
                <div class="message-box success error">
                    <div class="icon">
                        <!-- icon -->
                    </div>
                    <div class="message">
                        <!-- message -->
                    </div>
                </div>
                <p>Name: </p>
                <input type="text" name="name" id="name" required>
                <p>Contact Number: </p>
                <input type="text" name="phone-num" id="phone-num" required>
                <p>Email Address/Username: </p>
                <input type="email" name="email" id="email" required>
                <p>Create Password: </p>
                <input type="password" name="password" id="password" required>
                <p>Retype Password: </p>
                <input type="password" name="password" id="password" required>
                <button class="submit-button" type="submit">Register</button>
            </form>
            <p class="register-statement">Already have an account?&nbsp;<a href="./login.html">Sign into your account</a></p>
        </section>
        
        <?php include 'footer.php' ?>
    </div>
</body>
</html>