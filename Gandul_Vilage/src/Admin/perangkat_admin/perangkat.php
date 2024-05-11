<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sukamukti Vilage</title>
    <!-- bootsrap -->
    <link rel="stylesheet" href="/bootsrap/css/bootstrap.min.css">
    <script src="/bootsrap/js/pooper.min.js"></script>
    <script src="/bootsrap/js/bootstrap.min.js"></script>
    <!-- logo Desa Sukamukti -->
    <link rel="icon" type="image/x-icon" href="/img/abroor.png">
</head>
<body>
<?php include "/xampp/htdocs/Gandul_Vilage/layout/header_nav_admin.php"; ?>
    <div class="container-xl mt-5">
    <h1 class="text-center fst-italic">Perangkat <b>Desa Sukamukti</b></h1>
    <a href="tambah.php">Tambah Perangkat</a>
        <table class="table border mt-5 bg bg-dark">
            <thead class="bg bg-dark text-center">
                <tr>
                    <th>NO</th>
                    <th>Foto</th>
                    <th>Nama</th>
                    <th>NIPD</th>
                    <th>Jenis Kelamin</th>
                    <th>Jabatan</th>
                    <th>Action</th>
                </tr>
            </thead>
            <?php
                // Koneksi ke database
                include "/xampp/htdocs/Gandul_Vilage/service/koneksi.php";
                
                // Menampilkan semua data perangkat desa
                $query = "SELECT * FROM perangkat_desa";
                $result = $conn->query($query);
                $no = 1;
                
                
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tbody>";
                        echo "<tr>";
                        echo "<td>" . $no++ . "</td>";
                        echo "<td><img src='/img/uploads/" . $row['foto'] . "' width='100'></td>";
                        echo "<td>" . $row['nama'] . "</td>";
                        echo "<td>" . $row['NIPD'] . "</td>";
                        echo "<td>" . $row['jenis_kelamin'] . "</td>";
                        echo "<td>" . $row['jabatan'] . "</td>";
                        echo "<td><a href='edit.php?id=" . $row['id'] . "' class='btn btn-primary'>Edit</a>
                            <a href='delete.php?id=" . $row['id'] . "' class='btn btn-danger'>Delete</a></td>";
                        echo "</tr>";
                        echo "</tbody>";   
                    }
                }

                ?>
        </table>
    </div>
    <?php include "/xampp/htdocs/Gandul_Vilage/layout/footer.html"; ?>
</body>
</html>
