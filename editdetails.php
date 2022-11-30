<?php include 'functions.php' ?>

<?php 

if (isset($_POST['edit'])) {
    $editDetails = $_POST;

    $editDetails['fname'] = $_POST["fname"];
    $editDetails['lname'] = $_POST["lname"];
    $editDetails['email'] = $_POST["email"];
    $editDetails['password'] = $_POST["newpassword"];
    $edit = edit_user($editDetails);
    
    if(!$edit) {
        $response = [
            'type' => 'error',
            'message' => 'Edit Failed'
            ];
    } else {
        $response = [
            'type' => 'success',
            'message' => 'Successfully Edited details'
            ];
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'header.php' ?>
    <title>My Account-Edit | Cocktailtastic</title>
</head>

<body>
    <div class="box login-page">
        <?php include 'navbar.php' ?>

        <section class="contact">
            <h1>Edit Details</h1>
        </section>

            <section class="contact-form" style="width: 500px;">
                <?php if (isset($response)) { ?>
                    <div class="message-box <?= $response['type'] ?>">
                        <p style="color: #000; font-size: 16px;"><?= $response['message'] ?></p>
                    </div>
                <?php } ?>

                <form action="?" method="post" class="checkout-form">
                    <p>Note: If you do not wish to update any particular field, type the original ones</p>
                    <input style="margin: 10px 0; padding: 8px;" type="text" name="fname" placeholder="First Name">
                    <input style="margin: 10px 0; padding: 8px;" type="text" name="lname" placeholder="Last Name">
                    <input style="margin: 10px 0; padding: 8px;" type="email" name="email" placeholder="Email Address">
                    <input style="margin: 10px 0; padding: 8px;" type="password" name="password" placeholder="Old password">
                    <input style="margin: 10px 0; padding: 8px;" type="password" name="newpassword" placeholder="New password">
                    <button type="submit" name="edit" style="display: flex; justify-content: center; align-items: center; font-size: 18px; width: 200px; height: 40px; margin: 20px auto;">Edit Details &nbsp;<i class="fa-solid fa-pen-to-square"></i></button>
                </form>
            </section>

        <?php include 'footer.php' ?>
    </div>
</body>

</html>