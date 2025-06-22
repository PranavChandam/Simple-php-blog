<?php
$host = "localhost";
$user = "root";
$pass = "pranav2050";
$dbname = "blog_db";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
