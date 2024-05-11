<?php
include "/xampp/htdocs/Gandul_Vilage/service/koneksi.php";

$path = "/img/uploads/".$foto;
$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];
$nama = $_POST['nama'];
$NIPD = $_POST['NIPD'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$jabatan = $_POST['jabatan'];

move_uploaded_file($tmp, $path);

$query = "INSERT INTO perangkat_desa (foto, nama, NIPD, jenis_kelamin, jabatan) VALUES ('$foto', '$nama', '$NIPD','$jenis_kelamin', '$jabatan')";
if ($conn->query($query)) {
    header("location:perangkat.php");
}else {
    echo "gagal";
    header('location:tambah.php');
}

?>