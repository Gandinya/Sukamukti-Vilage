<?php
session_start();
if (isset($_POST['logout'])) {
    session_unset();
    session_destroy();
    header('location:/login/login.php');
}
?>

<link rel="stylesheet" href="/bootsrap/css/bootstrap.min.css">
<script src="/bootsrap/js/pooper.min.js"></script>
<script src="/bootsrap/js/bootstrap.min.js"></script>

<!-- Header -->
<nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
    <div class="container-fluid">
        <img src="/img/abroor.png" height="65px" width="65px" alt="abrawr">
        <h1 class="ms-3 fs-2 navbar-brand" href="#">Sukamukti Vilage</h1>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                <li class="nav-item">
                    <a id="nav-link" class="nav-link active" aria-current="page" aria-current="page" href="/src/User/index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a id="nav-link" class="nav-link active" aria-current="page" href="/src/User/about.php">About</a>
                </li>
                <li class="nav-item">
                    <a id="nav-link" class="nav-link active" aria-current="page" href="/src/User/perangkat.php">Apparatus</a>
                </li>
                <li class="nav-item">
                    <a id="nav-link" class="nav-link active" aria-current="page" href="/src/User/contac.php">contac</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>