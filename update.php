
<?php
include 'connect.php';
$id=$_GET['updateid'];
$sql="select * from doctors";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
        $Fname=$row['dFname'];
        $Lname=$row['dLname'];
        $Address=$row['dAddress'];
        $Number=$row['dNumber'];
        $DOB=$row['dDOB'];
        $Email=$row['dEmail'];
        $Specail=$row['dspecial'];
if(isset($_POST["save"])){
    
    $Fname=$_POST["fname"];
    $Lname=$_POST["lname"];
    $Address=$_POST["address"];
    $Number=$_POST["phone"];
    $DOB=$_POST["DOB"];
    $Email=$_POST["email"];
    $Specail=$_POST["Specialization"];
    

$query="update `doctors` set D_id=$id, dFname='$Fname',`dLname`='$Lname',
`dAddress`='$Address',`dNumber`='$Number',`dDOB`='$DOB',
`dEmail`='$Email',`dspecial`=' $Specail' where D_id=$id";


    if(mysqli_query($con,$query)){
        
        header('location:view_doctor.php');
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
                    <ion-icon name="log-out-outline"></ion-icon>
                </div>
            </div>

            <div class="add-d">
                <h2>Update Doctors details</h2>
                <form action="#" method="post" class="form1">
                    <div class="row">
                        <div class="colum">
                        <h3>First Name</h3>
                        <input type="text" name="fname" placeholder="Enter the First name" Value=<?php echo $Fname; ?>>
                        </div>
                        <div class="colum">
                            <h3>Last Name</h3>
                            <input type="text" name="lname" placeholder="Enter the Last name" Value=<?php echo $Lname; ?>>
                        </div>
                    </div>
                    <div class="row">
                        <div class="colum">
                        <h3>Address</h3>
                        <input type="text" name="address" placeholder="Enter the Address" id="address" Value=<?php echo $Address; ?>>
                        </div>
                    </div>

                    <div class="row">
                        <div class="colum">
                        <h3>mobile number</h3>
                        <input type="text" name="phone" placeholder="Enter the phone number" Value=<?php echo $Number; ?>>
                        </div>
                        <div class="colum">
                            <h3>Date of birth</h3>
                            <input type="date" name="DOB" Value=<?php echo $DOB; ?>>
                        </div>
                    </div>

                    
        
                    <div class="row">
                        <div class="colum">
                        <h3>Email </h3>
                        <input type="email" name="email" placeholder="Enter the email address" Value=<?php echo $Email; ?>>
                        </div>
                        <div class="colum">
                            <h3>Specialization</h3>
                            <input type="text" name="Specialization" id="speciali" Value=<?php echo $Specail; ?>>
                            </div>
                    </div>
                    
                    <input type="submit" value="Registration" id="submit" name="save">
                    
                    
                </form>
            
            </div>
        </div>
    </div>
</body>

</html>