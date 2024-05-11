<?php
include "/xampp/htdocs/Gandul_Vilage/service/koneksi.php";

$id = $_GET['id'];
$query = "DELETE FROM perangkat_desa WHERE id='$id'";
$conn->query($query);

header("location:perangkat.php");
?>
