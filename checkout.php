<?php include 'functions.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'header.php' ?>
    <title>Checkout | Cocktailtastic</title>
</head>

<body>
    <div class="box checkout-page">
        <?php include 'navbar.php' ?>

        <section class="checkout-form">
            <h1>Checkout</h1>
            <form>
                <h3>Personal Information: </h3>
                <div class="form personal-details">
                    <div class="grouping">
                        <input type="text" name="firstName" id="firstName" placeholder="First Name">
                        <input type="text" name="lastName" id="lastName" placeholder="Last Name">
                    </div>
                    <div class="grouping">
                        <input type="number" name="phoneno" id="phoneno" placeholder="Phone Number">
                        <input type="email" name="emailId" id="emailId" placeholder="Email Address">
                    </div>
                </div>
                <hr>
                <h3>Address: </h3>
                <div class="form address-details">
                    <input type="text" placeholder="House no. / Building Name" required>
                    <input type="text" placeholder="Road Name / Area / Colony" required>
                    <div class="grouping">
                        <input type="text" placeholder="Pincode" required>
                        <input type="text" placeholder="City" required>
                        <input type="text" placeholder="State" required>
                    </div>
                    <input type="text" placeholder="Nearby Location (optional)">
                </div>
                <hr>
                <h3>Mode of Payment: </h3>
                <div class="form payment-details">
                    <input type="text" placeholder="Mode of Payment" required>
                </div>
                <div class="form">
                    <button class="submit-button" type="submit">Submit</button>
                </div>
            </form>
        </section>

        <hr>

        <?php include 'footer.php' ?>
    </div>
</body>

</html>