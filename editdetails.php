<?php include 'functions.php' ?>

<?php 

if (isset($_POST['editDetails'])) {
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

<style>
    .padding {
        padding: 8px;
    }
</style>

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

                <form action="?" method="post">
                    <p style="font-size: 12px; text-align: center; margin: 20px;">Note: If you do not wish to change any particular field, you must fill it with the existing information</p>
                    <h1>Personal Details</h1>
                    <div class="grouping" style="margin: 10px auto">
                        <input class="padding" type="text" name="fname" placeholder="First Name" required>
                        <input class="padding" type="text" name="lname" placeholder="Last Name" required>
                    </div>
                    <br>
                    <p style="font-size: 12px; text-align: center;">* This email will be used for all the communication</p>
                    <input class="padding" type="email" name="email" placeholder="Email" required>
                    <br>
                    <h1>Change Password</h1>
                    <div class="grouping" style="margin: 10px auto;">
                        <input class="padding" type="password" name="password" placeholder="Old Password" required>
                        <input class="padding" type="password" name="newpassword" placeholder="New password" required>
                    </div>
                    <button type="submit" name="editDetails" style="display: flex; justify-content: center; align-items: center; font-size: 18px; width: 200px; height: 40px; margin: 20px auto;">Edit Details &nbsp;<i class="fa-solid fa-pen-to-square"></i></button>
                </form>
            </section>

        <?php include 'footer.php' ?>
    </div>
</body>

</html>