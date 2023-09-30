
<?php
include 'connect.php';
  if(isset($_POST["login"])){

$name=$_POST["name"];
$pass=$_POST["password"];

if($name!="" && $pass!=""){
    $sql="SELECT  apassword ,aname FROM `admin` WHERE  apassword ='$pass' AND aname='$name'"; //sql select query
    $result= $con->query($sql);
    if ($result->num_rows >=1){
        header("location:Dashboard.php"); //open the next html file
    }
    else{
        echo '<script>alert("Invalid user name password");</script>';
    }
}
else{
  echo '<script>alert("Please Fill the Details");</script';
}
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Login Panel</title>
  <link rel="stylesheet" href="css/login.css">
</head>
<body>
  
  <div class="container">
    <div class="myform">
      <form action="" method="post">
        <h2>ADMIN LOGIN</h2>
        <input type="text" placeholder="Admin Name" name="name">
        <input type="password" placeholder="Password" name="password">
        <button type="submit" name="login">LOGIN</button>
      </form>
    </div>
    <div class="image">
      <img src="image/image.jpg">
    </div>
  </div>

</body>
</html>