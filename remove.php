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
$mysqli = "DELETE FROM students WHERE id=?";
$stmt = mysqli_prepare($conn, $mysqli);

// Bind parameters and execute statement
mysqli_stmt_bind_param($stmt, "s", $_POST["id"]);
mysqli_stmt_execute($stmt);

// Close statement and connection
mysqli_stmt_close($stmt);
mysqli_close($conn);

echo "Student removed successfully";
?>
