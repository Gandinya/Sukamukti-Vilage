<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database_name = "desa_sukamukti";

$db = mysqli_connect($hostname, $username, $password, $database_name);

if($db->connect_error) {
    echo "koneksi rusak";
    die("eror woy");
}

?>