<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "school";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Prepare SQL statement
$mysqli = "UPDATE teacher SET   firstname=?, lastname=?, module=? WHERE id=?";
$stmt = mysqli_prepare($conn, $mysqli);

// Bind parameters and execute statement
mysqli_stmt_bind_param($stmt, "ssss", $_POST["firstname"], $_POST["lastname"], $_POST["module"], $_POST["id"]);
mysqli_stmt_execute($stmt);

mysqli_stmt_close($stmt);
mysqli_close($conn);

echo "teacher modified successfully";
?>