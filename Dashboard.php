
<?php
    include 'connect.php';
    $sql = "SELECT COUNT(*) as count FROM doctors";
    $result = $con->query($sql);
    $row = $result->fetch_assoc();

// Get the row count
$doctors = $row['count'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <script type="module" src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.esm.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Add this in your <head> section to include the ion-icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/5.4.0/css/ionicons.min.css" integrity="sha256-2CY6ZLtf2OjwCTJkCRxzLKnV+Oq3VGGrfW6T0qIEF40=" crossorigin="anonymous" />

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
                    <ion-icon name="log-out-outline" id="clickMe"></ion-icon>
                </div>
            </div>
            <div class="select-cart">
                <a href="view_doctor.php" style="text-decoration: none; color: black;"><div class="cart" >
                   <div class="icon"><i class="fa fa-user-md" style="font-size:36px;"></i></div>
                   <div class="txt">
                    <p><?php echo $doctors; ?></p>
                    <h3>Total Doctor's</h3>
                   </div>
                </div>
            </a>
                
            </div>
            <div class="message-r">
                <a href="view_doctor.php"><div class="s-cart">
                    <img src="image/doctor.png" alt="">
                    <p>Doctors details</p>
                </div></a>
                <a href="schedule_view.php"><div class="s-cart">
                    <img src="image/schedule.png" alt="">
                    <p>Doctor Schedule Time</p>
                </div></a>
            </div>
            <div class="doctor-img">
               <div class="i-c"> <img src="image/1.jpg" alt=""></div>
               <div class="i-c"> <img src="image/2.jpg" alt=""></div>
               <div class="i-c"> <img src="image/3.jpg" alt=""></div>
               <div class="i-c"> <img src="image/4.jpg" alt=""></div>
            </div>

        </div>
    </div>
</body>

</html>