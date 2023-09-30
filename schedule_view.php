
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
                <h2>Schedule Sheet</h2>
                <div class="sheet_view">
         
                    <div class="v_heading">
                        <h3>Name</h3>
                        <h3>Specialization</h3>
                        <h3>Week day</h3>
                        <h3>Start Time</h3>
                        <h3>End Time</h3>
                    </div>
                    <div class="v_table">
                    <?php
                        $sql="select * from timeschedule";
                        $res=$con->query($sql);
                           if($res->num_rows>0){
                               while($row=$res->fetch_assoc()){
                                   echo '
                        <div class="t_row">
                            <p>'.$row['Dname'].'</p>
                            <p>'.$row['spec'].'</p>
                            <p>'.$row['Wday'].'</p>
                            <p>'.$row['sTime'].'</p>
                            <p>'.$row['eTime'].'</p>
                            <div class="i_div">
                            <a href="sch_update.php?sch_updateid='.$row['t_id'].'"><ion-icon name="create-outline" style="color: green;"></ion-icon></a>
                            <a href="delete.php?tid='.$row['t_id'].'"><ion-icon name="trash-outline" style="color: rgb(131, 1, 1);"></ion-icon></a>
                            </div>
                          
                        </div>
                        ';
                    }
                 }
                 ?>
                    </div>
                  
                </div>
            </div>

        </div>
    </div>
</body>

</html>