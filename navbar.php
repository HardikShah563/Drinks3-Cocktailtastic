<section class="nav">
    <nav>
        <div class="logo">
            <p>Cocktail<label class="purple">tastic</label></p>
        </div>
        <div class="nav-lines">
            <i class="fa-solid fa-bars-staggered"></i>
        </div>
        <div class="nav-links">
            <li><a href="index.php">Home</a></li>
            <li><a href="offerings.php">Offerings</a></li>
            <li><a href="contact.php">Contact</a></li>

            <?php if (isset($_SESSION['u_id'])) { ?>
                <?php if ($_SESSION['type'] == 'admin') { ?>
                    <li><a href="admin.php">Admin</a></li>
                <?php } ?>

                <li><a href="myaccount.php">My Account</a></li>
                <li><a href="logout.php">Logout</a></li>

            <?php } else { ?>
                <li><a href="login.php">Login</a></li>
            <?php } ?>
        </div>
    </nav>
</section>