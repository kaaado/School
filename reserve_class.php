<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "school";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}




$name = $_POST['name'];
$date = $_POST['date'];
$time = $_POST['time'];
$mysqli = "INSERT INTO class (name, date,time) VALUES (?, ?, ?)";
$stmt = mysqli_prepare($conn, $mysqli);

mysqli_stmt_bind_param($stmt, "sss", $_POST["name"], $_POST["date"], $_POST["time"]);
mysqli_stmt_execute($stmt);


mysqli_stmt_close($stmt);
mysqli_close($conn);

echo "Reservation created successfully!";


$hour ="SELECT sum(hours) from class,teacher where class.idteach = teacher.id";


$date= "SELECT date from class where class.idteach = teacher.id";


?>

