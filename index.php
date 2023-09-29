<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Page</title>
    <link rel="stylesheet" href="css/user.css">
</head>
<body>
    <div class="navigation">
        <h2>Welcome To HMS</h2>
        <div class="address">
            <span><ion-icon name="location-outline" style="font-size: 30px;"></ion-icon></span>
            <button onclick="Admin()" class="btn" >Admin Login</button>
        </div>
    </div>
    <div class="image_slider">
        <img src="image/5.jpg" alt="">
        <img src="image/6.jpg" alt="">
        <img src="image/7.jpg" alt="">
        <img src="image/9.jpg" alt="">
    </div>
    
    <div class="filter_bar">
      
        <form action="" method="post">
          <div class="bar">
              <select name="search_option">
                  <option value="doctors">Doctors</option>
                  <option value="specialization">Specialization</option>
              </select>
              <input type="text" name="search_term" class="txt" placeholder="Doctor Name Here">   
              <input type="text" name="Hospital" class="txt" placeholder="Hospital Name Here" >    
              <input type="submit" value="Search" class="searchbtn">
             

          </div>
      </form>
      <div class="result_view">
        <table>
          <tr>
            <th>Name</th>
            <th>Specialization</th>
            <th>Week Day</th>
            <th>Start Time</th>
            <th>End Time</th>
          </tr>
          <?php
          if ($_SERVER["REQUEST_METHOD"] === "POST") {
              $search_option = $_POST["search_option"];
              $search_term = $_POST["search_term"];
  
              // Assuming you have a database connection established using mysqli
              $host = "localhost";
              $username = "root";
              $password = "";
              $database = "hospital_m";
  
              $conn = new mysqli($host, $username, $password, $database);
  
              if ($conn->connect_error) {
                  die("Connection failed: " . $conn->connect_error);
              }
  
              if ($search_option === "doctors") {
                  // Search by doctor's name
                  $sql = "SELECT * FROM timeschedule WHERE Dname = '$search_term'";
              } elseif ($search_option === "specialization") {
                  // Search by specialization
                  $sql = "SELECT * FROM timeschedule WHERE spec = '$search_term'";
              } else {
                  // Invalid search option
                  die("Invalid search option");
              }
  
              $result = $conn->query($sql);
  
              if ($result->num_rows > 0) {
                  // Display the results
                  while ($row = $result->fetch_assoc()) {
                      echo '
                      <tr>
                      <td>'.$row['Dname'].'</td>
                      <td>'.$row['spec'].'</td>
                      <td>'.$row['Wday'].'</td>
                      <td>'.$row['sTime'].'</td>
                      <td>'.$row['eTime'].'</td>
                    </tr>
                      ';
                  }
              } else {
                  echo '<script> alert("Not available.");</script>';
              }
  
              $conn->close();
          } else {
            echo '<script> alert("No data submitted.");</script>';
          }
          ?>
          </table>
      </div>
    </div>
    
    <footer>
      <div class="log"><h2>HMS</h2></div>
      <div class="social">
        <ion-icon name="logo-instagram" class="so-icon"></ion-icon>
        <ion-icon name="logo-google" class="so-icon"></ion-icon>
        <ion-icon name="logo-facebook" class="so-icon"></ion-icon>
        <ion-icon name="logo-twitter" class="so-icon"></ion-icon>
      </div>
      <div class="contact">
        <h3>contact</h3>
        <ion-icon name="call"></ion-icon> +011-965 4101<br/>
        <ion-icon name="mail"></ion-icon> hms@gmail.com<br/>
      
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

        function Admin() {
          var url = 'Admin.php';
          window.location.href = url;
        }


      
        // Change image every 3 seconds (adjust the interval as needed)
        setInterval(nextImage, 3000);
      </script>
      
</body>
</html>