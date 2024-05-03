<?php
session_start();

$conn = mysqli_connect('localhost', 'root','', 'school');

if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

$firstname = $_POST['firstname'];
$lastname= $_POST['lastname'];


$mysqli = "SELECT * FROM admin WHERE firstname='$firstname' AND lastname='$lastname';";
$result = mysqli_query($conn, $mysqli);

if (mysqli_num_rows($result) > 0) {
	
	$_SESSION['firstname'] = $firstname;
	header('Location: index2.html');
	exit();
} 


$mysqli = "SELECT * FROM students WHERE firstname='$firstname' AND lastname='$lastname'";
$result = mysqli_query($conn, $mysqli);

if (mysqli_num_rows($result) > 0) {
    
    header('Location: stud.html');
    exit;
}

$mysqli = "SELECT * FROM teacher WHERE firstname='$firstname' AND lastname='$lastname'";
$result = mysqli_query($conn, $mysqli);

if (mysqli_num_rows($result) > 0) {
    header('Location: teach.html');
    exit;
}

echo "Invalid username or password";

if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: index.html'); 
    exit;}
?>

