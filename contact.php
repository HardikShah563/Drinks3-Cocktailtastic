<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'header.php' ?>
    <title>Contact | Cocktailtastic</title>
</head>

<body>
    <div class="box">
        <section class="nav">
            <nav>
                <div class="logo">
                    <p>Cocktail<label class="purple">tastic</label></p>
                </div>
                <div class="nav-lines">
                    <i class="fa-solid fa-bars-staggered"></i>
                </div>
                <div class="nav-links">
                    <li><a href="../index.html">Home</a></li>
                    <li><a href="./offerings.html">Offerings</a></li>
                    <li><a href="./contact.html">Contact</a></li>
                    <li><a href="./login.html">Login</a></li>
                </div>
            </nav>
        </section>

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

        <section class="footer">
            <footer>
                <p>All <label class="copyright-icon">&copy;</label>Copyyrights reserved | Cocktailtastic</p>
            </footer>
        </section>
    </div>
</body>

</html> 