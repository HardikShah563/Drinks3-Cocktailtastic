<?php include 'functions.php' ?>

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
                <div class="message-box success error">
                    <div class="icon">
                        <!-- icon -->
                    </div>
                    <div class="message">
                        <!-- message -->
                    </div>
                </div>
                <p>Email Address/Username: </p>
                <input type="email" name="email" id="email">
                <p>Password: </p>
                <input type="password" name="password" id="password">
                <button class="submit-button" type="submit">Log In</button>
            </form>
            <p class="register-statement">Don't have an account?&nbsp;<a href="./register.html">Create New Account here</a></p>
        </section>

        <hr>

        <?php include 'footer.php' ?>
    </div>
</body>
</html>