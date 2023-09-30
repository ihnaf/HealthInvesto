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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                <h2>Doctor's Details</h2>
                <div class="doctor_view">
                   
                    <table width="900">
                        <tr>
                            <th>Full Name</th>
                            <th>Specialization</th>
                            <th>Address</th>
                            <th>Email</th>
                            <th>Phone No</th>
                            <th>DOB</th>
                        </tr>
                        <?php
                        $sql="select * from doctors";
                        $res=$con->query($sql);
                           if($res->num_rows>0){
                               while($row=$res->fetch_assoc()){
                                   echo '
                        <tr>
                            <td>'.$row['dFname'].'&nbsp '.$row['dLname'].'</td>
                            <td>'.$row['dspecial'].'</td>
                            <td>'.$row['dAddress'].'</td>
                            <td>'.$row['dEmail'].'</td>
                            <td>'.$row['dNumber'].'</td>
                            <td id="date">'.$row['dDOB'].'</td>
                            <td><a href="update.php?updateid='.$row['D_id'].'"><ion-icon name="create-outline" style="color: green; font-size: 25px; cursor: pointer;" name></ion-icon></a></td>
                            <td><a href="delete.php?id='.$row['D_id'].'"><ion-icon name="trash-outline" style="color: rgb(131, 1, 1);font-size: 25px; cursor: pointer;"></ion-icon></a></td>
                        </tr>
                        ';
                        }
                    }
                        ?>
                    </table>
                </div>
            </div>

        </div>
    </div>
</body>

</html>