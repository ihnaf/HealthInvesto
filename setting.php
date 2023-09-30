<?php
include 'connect.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <script type="module" src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.esm.js"></script>
    <script src="js/script.js"></script>
</head>

<body>
    <div class="containor">
    <?php
            include 'sidebar.php';
        ?>
        <div class="view">
            <div class="actionbar">
                <div class="admin-name">
                    <p>Admin name</p>
                </div>
                <div class="admin-i">
                    <ion-icon name="person-circle-outline"></ion-icon>
                    <ion-icon name="log-out-outline"></ion-icon>
                </div>
            </div>

            <div class="containor_2">
            <div class="Pchange">
        <h2 style="text-align: center;">Change Password</h2>
        <form action="change-password.php" method="post">
            <div class="c-2">
                <p>Old Password</p>
                <input type="password" name="old_password" placeholder="Type Password..." class="in">
            </div>
            <div class="c-2">
                <p>New Password</p>
                <input type="password" name="new_password" placeholder="Type new Password..." class="in">
            </div>
            <div class="c-2">
                <p>Confirm Password</p>
                <input type="password" name="confirm_password" placeholder="Type new Password..." class="in">
            </div>
            <input type="submit" class="updatebtn" value="Update">
        </form>
    </div>
            </div>
           
        </div>
    </div>
</body>

</html>