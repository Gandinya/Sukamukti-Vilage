<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "desa_sukamukti";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
