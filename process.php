<?php
// Establish a database connection (assuming MySQL)
$servername = "localhost";
$username = "root";
$password = "";
$dbname= "users";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form submission
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $city = $_POST['city'];
    $phone = $_POST['phone'];
    $countryCode = $_POST['country_code'];

    // Prepare and execute SQL statement to insert data into the database
    $sql = "INSERT INTO users (username, email, password, gender, city, phone, country_code)
            VALUES ('$username', '$email', '$password', '$gender', '$city', '$phone', '$countryCode')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
