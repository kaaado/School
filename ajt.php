<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "school";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Validate and sanitize user input to prevent SQL injection
$id = mysqli_real_escape_string($conn, $_POST["id"]);
$firstname = mysqli_real_escape_string($conn, $_POST["firstname"]);
$lastname = mysqli_real_escape_string($conn, $_POST["lastname"]);
$module = mysqli_real_escape_string($conn, $_POST["module"]);

$mysqli = "INSERT INTO teacher (id, firstname, lastname, module) VALUES (?, ?, ?, ?)";
$stmt = mysqli_prepare($conn, $mysqli);

mysqli_stmt_bind_param($stmt, "ssss", $id, $firstname, $lastname, $module);
mysqli_stmt_execute($stmt);

mysqli_stmt_close($stmt);
mysqli_close($conn);

echo "teacher added successfully";
?>
