<?php
// Make connection with database
$servername = "127.0.0.1";
$username = "root";
$password = "senha";
$dbname = "database";
$conn = new mysqli($servername, $username, $password, $dbname);

// Check if it was a good connection
if ($conn->connect_error) {
    die("Failed to connect in the database: " . $conn->connect_error);
}

// Take values of username and password
$username = $_POST['username'];
$password = $_POST['password'];

// Check the SQL database with the given name and password
$sql = "SELECT * FROM users_table WHERE login='$username' AND pswd='$password'";
$result = $conn->query($sql);
// Make sure to put the right name of the table in SQL database. 

// Check if it was a good connection in database
if ($result->num_rows > 0) {
    // This its what happen when the login succeed.
    echo "Welcome!";
    header("Location: http://localhost/Login-BusCompany/homepage.html");

} else {
    // Error message if not pass
    echo '<script>
    alert("Check your username or password!, something is wrong!");
    </script>';
}

// End the connection in database
$conn->close();
?>