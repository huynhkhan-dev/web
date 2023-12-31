<?php
// Replace with your actual database credentials
$servername = "40.76.248.23";
$username = "root";
$password = "";
$dbname = "nrohock";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    // Perform input validation and other necessary checks

    // Hash the password (you should use a proper password hashing library)
    // For example, using password_hash():
    // $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $hashed_password = 'hashed_password'; // Replace with the actual hashed password

    // Insert data into the database
    $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hashed_password')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>
