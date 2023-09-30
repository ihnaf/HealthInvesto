<!DOCTYPE html>
<html>
<head>
    <title>Doctor Search Result</title>
</head>
<body>
    <div class="result">
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
                    echo "Name: " . $row["Dname"] . " | Specialization: " . $row["spec"] . "<br>";
                }
            } else {
                echo "Not available.";
            }

            $conn->close();
        } else {
            echo "No data submitted.";
        }
        ?>
    </div>
</body>
</html>
