<?php
include "/xampp/htdocs/desa_coba/service/database.php";
session_start();
$register_message = "";
if (isset($_SESSION["is_login"])) {
    header("location:/crud_perangkat/perangkat.php");
}
if (isset($_POST["register"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    try {
        $sql = "INSERT INTO tb_admin (username, password) VALUES ('$username', '$password')";

        if ($db->query($sql) == $username && $password > 0) {
            $register_message = "daftar akun berhasil, silahkan login";
        } else {
            $register_message = "daftar akun gagal,dilahkan daftar kembali";
        }
    } catch (mysqli_sql_exception) {
        $register_message = "username sudah ada!!,silahkan ganti";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sukamukti Vilage</title>
    <link rel="stylesheet" href="/bootsrap/css/bootstrap.min.css">
    <link rel="icon" type="image/x-icon" href="/img/abroor.png">
</head>

<body style=" background-image:url('/img/desaaa.jpg'); background-size:cover; background-repeat:no-repeat; height:100vh; ">
<div class="d-flex position-absolute top-50 start-50 translate-middle">
            <div style="height: 450px; width:350px;" class="container rounded bg-dark bg-opacity-75 d-flex justify-content-center align-items-center">
                <i class="mt-5 text-white"><?= $register_message ?></i>
                <div class="login">
                    <div class="d-flex justify-content-center">
                        <img src="/img/abroor.png" height="95px" width="95px" class="logo">
                    </div>
                    <h3 class="text-center text-white">Register</h3>
                    <form action="login.php" method="POST">
                        <input class="form-control" type="text" placeholder="username" name="username" require><br>
                        <input class="form-control" type="password" placeholder="password" name="password" require>
                        <a href="login.php" class="link"><i>Login?</i></a><br>
                        <div class="button d-flex justify-content-center">
                            <button name="login" class="btn btn-outline-success mt-5">Login</button><br>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</body>

</html>