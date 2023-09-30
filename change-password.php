<?php
// Database connection credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hospital_m";

// Establishing a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $old_password = $_POST["old_password"];
    $new_password = $_POST["new_password"];
    $confirm_password = $_POST["confirm_password"];

    // You should perform additional validation here (e.g., checking if the new password matches the confirmation).

    // Assuming the "admin" table has columns "username" and "password" for the user credentials
    // Retrieve the password for the user with a specific username (you may adjust the query accordingly based on your database schema)
    $username = "admin"; // Change this to the appropriate username

    $sql = "SELECT apassword FROM admin WHERE aname = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $stored_password = $row["apassword"];

        // Compare the provided old password with the stored password in the database (assuming passwords are not encrypted)
        if ($old_password === $stored_password) {
            // Update the password in the database with the new password (assuming passwords are not encrypted)
            $update_sql = "UPDATE admin SET apassword = '$new_password' WHERE aname = '$username'";

            if ($conn->query($update_sql) === TRUE) {
                // Password updated successfully
                echo '<script>alert("Password updated successfully.");
                window.location.href="Dashboard.php";</script>';
            } else {
                // Error updating password
                echo '<script>alert("Error updating password: ");
                window.location.href="setting.php";
                 </script>';
            }
        } else {
            // Old password provided by the user is incorrect
            echo '<script>alert("Incorrect old password.");window.location.href="setting.php"; </script>';
        }
    } else {
        // User not found in the database
        echo '<script>alert("User not found.");window.location.href="setting.php";</script>';
    }
}

// Close the database connection
$conn->close();
?>
