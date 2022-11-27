<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'header.php' ?>
    <title>Contact | Cocktailtastic</title>
</head>

<body>
    <div class="box">
        <?php include 'navbar.php' ?>

        <section class="contact" id="contact" name="contact">
            <h1>Have a query? Contact Us</h1>
            <div class="contact-form">
                <form>
                    <p>Name: </p>
                    <input type="text" name="name" id="name" required>
                    <p>Email Id: </p>
                    <input type="email" name="email" id="email" required>
                    <p>Leave your query down here: </p>
                    <textarea name="message" id="message" cols="20" rows=5"></textarea>
                    <button class="submit-button" type="submit"><a href="">Submit</a></button>
                </form>
            </div>
        </section>

        <hr>

        <?php include 'footer.php' ?>
    </div>
</body>

</html> 