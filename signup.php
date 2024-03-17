<?php
// Check if the POST METHOD was used
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Than make connection with your database
    $servername = "127.0.0.1";
    $username = "root";
    $password = "senha";
    $dbname = "database";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Something is wrong with the credentials in DB, check: " . $conn->connect_error);
    }

    // Retrieve user input values from a form submitted via POST method.
    $username = $_POST["username"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];
    $email = $_POST["email"];

    // Don't make changes if it is incorrect
    if ($password != $confirm_password) {
        die("Check the password.");
    }

    // Insert the new user in the 'users_table'
    $sql = "INSERT INTO users_table (login, pswd, email) VALUES ('$username', '$password', '$email')";
    if ($conn->query($sql) === TRUE) {
        echo "Usuário cadastrado com sucesso.";
    } else {
        echo "Erro ao cadastrar o usuário: " . $conn->error;
    }

    $conn->close();
}
?>
