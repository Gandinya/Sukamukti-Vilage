<?php
$mesage = "";
$username = $_GET['username'];
$password = $_GET['password'];

if ($username === "admin" && $password === "123") {
    echo "berhasil mamang ah";
    header('location:/src/Admin/perangkat_admin/index.php');
} else {
    echo "aduh gagal";
}
if ($username === "user" && $password === "123") {
    echo "berhasil mamang ah";
    header('location:/src/user/index.php');
} else {
    echo "aduh gagal";
}
?>