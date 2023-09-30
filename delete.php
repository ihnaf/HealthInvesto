<?php
 include 'connect.php';

 if(isset($_GET['id'])){
    
$id=$_GET['id'];
$query="delete from doctors where D_id= $id";

$result=mysqli_query($con,$query);

    if($result){
        header ('location:view_doctor.php');
    }
    else{
    echo 'error';
    }
}



 if(isset($_GET['tid'])){
    
$id=$_GET['tid'];
$query="delete from timeschedule where t_id= $id";

$result=mysqli_query($con,$query);

    if($result){
        header ('location:schedule_view.php');
    }
    else{
    echo 'error';
    }
}
?>