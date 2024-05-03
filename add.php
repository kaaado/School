<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "school";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


$mysqli = "INSERT INTO students (id, firstname,lastname) VALUES (?, ?, ?)";
$stmt = mysqli_prepare($conn, $mysqli);

mysqli_stmt_bind_param($stmt, "sss", $_POST["id"], $_POST["firstname"], $_POST["lastname"]);
mysqli_stmt_execute($stmt);


mysqli_stmt_close($stmt);
mysqli_close($conn);

echo "Student added successfully";
?>
