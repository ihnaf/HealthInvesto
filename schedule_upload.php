<?php
include 'connect.php';

if(isset($_POST["save"])){
    
    $Name=$_POST["name"];
    $Specail=$_POST["spec"];
    $Day=$_POST["week"];
    $STime=$_POST["stime"];
    $ETime=$_POST["etime"];
    

$query="INSERT INTO timeschedule
(Dname,spec,Wday,sTime,eTime) 
values('$Name','$Specail','$Day','$STime','$ETime')";

    if(mysqli_query($con,$query)){
        header('location:schedule_view.php');
    }

    else{
    echo 'Sql error';
    }
}

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
                <div class="schedule_f">
                    <h2>Add Schedule</h2>
                    <form action="" method="post">
                        <div class="colom">
                            <p>Select Doctor name</p>
                            <input type="text" placeholder="search for name..." name="name">
                            </div>

                        <div class="colom">
                            <p>Specialization</p>
                            <input type="text" placeholder="search for Specialization..." name="spec">
                        </div>

                        <div class="colom">
                            <p>Week day</p>
                            <select name="week" id="day" class="select-f">
                                    <option value="Monday">Monday</option>
                                    <option value="Tuesday">Tuesday</option>
                                    <option value="Wednesday">Wednesday</option>
                                    <option value="Thursday">Thursday</option>
                                    <option value="Friday">Friday</option>
                                    <option value="Saturday">Saturday</option>
                                    <option value="Sunday">Sunday</option>
                                </select>
                        </div>

                        <div class="colom">
                            <p>Start Time</p>
                            <input type="time" name="stime" class="time">
                        </div>

                        <div class="colom">
                            <p>End Time</p>
                            <input type="time" name="etime" class="time">
                        </div>

                    <div class="btnrow">
                        <input type="submit" value="Upload" name="save" class="btnf" style="background-color: green; color: white;">
                        <input type="reset" value="Clear" class="btnf" style="background-color: brown; color: white;">
                    </div>
                    </form>
                </div>
            </div>
           
        </div>
    </div>
</body>

</html>