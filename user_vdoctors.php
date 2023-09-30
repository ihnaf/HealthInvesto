<?php
  include 'connect.php';
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Page</title>
    <link rel="stylesheet" href="css/user.css">
    <script type="module" src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.esm.js"></script>
</head>
<body>
    <div class="navigation">
        <h2>Hospital Name</h2>
        <div class="address">
            <span><ion-icon name="location-outline" style="font-size: 30px;"></ion-icon></span>
            <p>No.21 Pandukabaya Mawatha,<br/> Ampara 32000</p>
        </div>
    </div>
    <h1 class="head">Doctors details</h1>
    <div class="containor">
    <div class="view">
     <table>
      <tr>
        <th>Name</th>
        <th>Specialization</th>
      </tr>
      <?php
                        $sql="select * from doctors";
                        $res=$con->query($sql);
                           if($res->num_rows>0){
                               while($row=$res->fetch_assoc()){
                                   echo '
                          <tr>
                            <td>'.$row['dFname'].' '.$row['dLname'].'</td>
                            <td>'.$row['dspecial'].'</td>
                          </tr>
                          ';
                               }
                              }
                              ?>
     </table>
    </div>
    </div>
    
    <footer>
      <div class="log"><h2>Hospital logo</h2></div>
      <div class="social">
        <ion-icon name="logo-instagram" class="so-icon"></ion-icon>
        <ion-icon name="logo-google" class="so-icon"></ion-icon>
        <ion-icon name="logo-facebook" class="so-icon"></ion-icon>
        <ion-icon name="logo-twitter" class="so-icon"></ion-icon>
      </div>
      <div class="contact">
        <h3>contact</h3>
        <ion-icon name="call"></ion-icon> +011-965 4101<br/>
        <ion-icon name="mail"></ion-icon> heysqa@gmail.com<br/>
        <ion-icon name="location"></ion-icon> No.21 Pandukabaya Mawatha, Ampara 32000
      </div>
    </footer>

    <script>
        const images = document.querySelectorAll('.image_slider img');
        let currentIndex = 0;
      
        function showImage(index) {
          images.forEach((img, i) => {
            if (i === index) {
              img.style.opacity = 1;
            } else {
              img.style.opacity = 0;
            }
          });
        }
      
        function nextImage() {
          currentIndex = (currentIndex + 1) % images.length;
          showImage(currentIndex);
        }
      
        // Change image every 3 seconds (adjust the interval as needed)
        setInterval(nextImage, 3000);
      </script>
      
</body>
</html>