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
                    <input style="padding: 8px;" readonly type="text" name="name" required value="<?= $_SESSION["fname"]; ?> <?= $_SESSION["lname"]; ?>">
                    <p>Email Id: </p>
                    <input style="padding: 8px;" readonly type="email" name="email" required value="<?= $_SESSION["email"] ?>">
                    <div class="grouping">
                        <button class="submit-button" type="submit">Edit Details</button>
                        <button href="delete-user.php" class="submit-button">Delete</button>
                    </div>
                </form>
            </div>
        </section>

        <hr>

        <?php include 'footer.php' ?>
    </div>
</body>

</html> 