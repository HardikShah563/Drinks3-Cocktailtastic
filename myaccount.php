<?php include 'functions.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'header.php' ?>
    <title>My Account | Cocktailtastic</title>
</head>

<body>
    <div class="box">
        <?php include 'navbar.php' ?>

        <section class="contact" id="contact" name="contact">
            <h1>My Account</h1>
            <div class="contact-form">
                <form>
                    <p>Name: </p>
                    <input type="text" name="name" id="name" required>
                    <p>Email Id: </p>
                    <input type="email" name="email" id="email" required>
                    <div class="grouping">
                        <button class="submit-button" type="submit">Edit Details</button>
                        <button class="submit-button" type="submit">Delete Account</button>
                    </div>
                </form>
            </div>
        </section>

        <hr>

        <?php include 'footer.php' ?>
    </div>
</body>

</html> 