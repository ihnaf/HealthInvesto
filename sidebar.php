<?php

echo'
<div class="sidebar">
<div class="logo">
    <h2> Hospital<span> Name</span></h2>
</div>
<div class="s-icon">

  <a href="Dashboard.php" > <div class="i-list"><ion-icon name="grid-outline"></ion-icon>
        <p>Dashboard</p>
    </div></a>
    <div class="drop">
        <div class="i-list">
          <ion-icon name="add-circle-outline"></ion-icon>
          <p>Add Doctors</p>
        </div>
        <div class="drop_down">
          <a href="Add-d.php">Add Doctors</a>
          <a href="view_doctor.php">View Doctors</a>
        </div>
      </div>
      <div class="drop">
        <div class="i-list">
            <ion-icon name="hourglass-outline"></ion-icon>
          <p>Schedule</p>
        </div>
        <div class="drop_down">
          <a href="schedule_upload.php">upload Schedule</a>
          <a href="schedule_view.php">View Schedule</a>
        </div>
      </div>
      
  
   <div class="i-list"><ion-icon name="information-circle-outline"></ion-icon>
        <p>About us</p>
    </div>
    <a href="setting.php"> <div class="i-list"><ion-icon name="settings-outline"></ion-icon>
        <p>Settings</p>
    </div></a>
    <a href="index.php"><div class="i-list" id="clickMe">
        <ion-icon name="log-out-outline"></ion-icon>
        <p>Logout</p>
    </div></a>
</div>
</div>
<script>

function showConfirmMessage() {

  var result = confirm("Do you want to proceed?");

  // Check the result (true for OK, false for Cancel)
  if (result) {
    window.location.href="user.php";
  } else {
    // If Cancel, do something else or nothing
    alert("You clicked Cancel!");
  }
}

// Attach the click event listener to the div
document.getElementById("clickMe").addEventListener("click", showConfirmMessage);
</script>
';
?>