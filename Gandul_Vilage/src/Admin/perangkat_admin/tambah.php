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
    <div class="container">
        <h2 class="mt-5 mb-3 text-center">Tambah Perangkat Desa</h2>
        <a href="perangkat.php">Kembali</a>
        <form action="proses_tambah.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="foto">Foto :</label>
                <input type="file" class="form-control" id="foto" name="foto">
            </div>
            <div class="form-group">
                <label for="nama">Nama :</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="form-group">
                <label for="nama">NIPD :</label>
                <input type="text" class="form-control" id="nama" name="NIPD">
            </div>
            <div class="form-group">
                <label for="nama">Jenis Kelamin :</label>
                <select class="form-select" name="jenis_kelamin">
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label for="nama">Jabatan :</label>
                <select class="form-select" name="jabatan">
                    <option value="pjs.Kepala Desa">pjs.Kepala Desa</option>
                    <option value="Sekertaris Desa">Sekertaris Desa</option>
                    <option value="Kaur Tatausaha Umum">Kaur Tatausaha Umum</option>
                    <option value="Kaur Keuangan">Kaur Keuangan</option>
                    <option value="Staf Kaur Keuangan">Staf Kaur Keuangan</option>
                    <option value="Kaur Perencanaan">Kaur Perencanaan</option>
                    <option value="Kasi Pemerintahan">Kasi Pemerintahan</option>
                    <option value="Kasi Kesejahteraan">Kasi Kesejahteraan</option>
                    <option value="Kasi Pelayanan">Kasi Pelayanan</option>
                    <option value="Kawil">Kawil</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary" name="tambah">tambah</button>
        </form>
    </div>
</body>

</html>