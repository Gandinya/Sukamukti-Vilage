<?php

if (isset($_POST['logout'])) {
  session_unset();
  session_destroy();
  header('location:/login/login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sukamukti Vilage</title>
  <link href="/bootsrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <link rel="icon" type="image/x-icon" href="/img/abroor.png">
</head>

<body>
  <?php include "/xampp/htdocs/Gandul_Vilage/layout/header_nav_admin.php"; ?>

  <!-- Main Content -->
  <header style="background-image:url('/img/gunung.jpg');background-repeat:no-repeat;background-size:cover;" class="d-flex align-items-center justify-content-center">
    <h1 class="text-center p-5">Welcome Sukamukti Village</h1>
  </header>
  <div class="container-xl mt-5">
    <main class="py-5">
      <div class="container">
      <form action="index.php" method="POST">
        <button class="back" type="submit" name="logout">logout</button>
    </form>
        <div class="row">
          <div class="col-md-6">
            <h2 class="text-center">Tentang Desa Sukamukti</h2>
            <p>Sejarah merupakan suatu hal yang tidak boleh kita lupakan, karena dengan sejarah suatu pengalaman yang telah terjadi di masa lalu dapat menjadi pelajaran yang berharga untuk menyongsong masa depan.

              Berdasarkan hasil informasi baik dari sesepuh warga.
            </p>
            <h3><li>Sejara</li></h3>  
            <p> Desa Sukamukti sudah ada pada tahun 1980 saat pemerintahan Bupati Adang Rosman .Nama Desa Sukamukti berasal dari sebuah nama, yaitu tadinya Desa Cigorowong. Selama berdirinya Desa Sukamukti, adapun sampai saat ini telah dipimpin oleh 6 orang Kepala Desa. Dan di priode 2019-2023 sekarang di pimpin oleh Bapak O.HASANUDIN sebagai Kepala Desa.

              Desa Sukamukti berdiri pada Tahun 1980,yang merupakan hasil Pemekaran dari Desa Cigorowong yang terbagi menjadi dua Desa yaitu Desa Sukamukti dan Desa Sukasetia.</p>
          </div>
          <div class="col-md-6">
            <img src="/img/gunung.jpg" alt="Desa Indah" class="img-fluid">
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-md-6" id="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.0521457004447!2d108.12364967411159!3d-7.2348927710529445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f4d94b69d545d%3A0xd90d5cf45fefad1d!2sKantor%20Desa%20Sukamukti!5e0!3m2!1sid!2sid!4v1715051791814!5m2!1sid!2sid" width="500" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
          <div class="col-md-6">
            <h2 class="text-center">Letak wilayah Desa Sukamukti</h2>
            <p>Desa Sukamukti memiliki luas wilayah 525,862 Ha. Terdiri dari 15,500 Ha lahan perumahan dan pekarangan, 125,862 Ha tanah sawah produktif, 1,500 Ha lahan empangkolam, 380,000 Ha ladang dan kebun, dan 3,000 Ha tanah umum.

              Menurut data pada bulan Januari 2022 , jumlah total penduduk Desa Sukamukti sebanyak 3.855 orang. Dengan jumlah laki-laki 1.920 dan 1.935 perempuan.
            </p>
            <p>Dan terdapat 1.402 KK.

              Penyebaran penduduk di Desa Sukamukti sendiri terdapat pada 4 kedusunan. Dusun-dusun tersebut diantaranya Cigorowong, Tejakalapa, Sukamaju, Cipeuteuy.

              Berdasarkan agama di Desa Sukamukti seluruh penduduknya beragama Islam.Hal ini dibuktikan dengan adanya masjid masjid, pesantren,madrasah dan aktivitas keagamaan lainnya. Dan berkewarganegaraan WNI.</p>
            <a href="https://maps.app.goo.gl/oF9brMb7vMB9oZoZ6" class="btn btn-success">Lihat Wilayah Desa</a>
          </div>
        </div>
      </div>
    </main>
  </div>
  <?php include "/xampp/htdocs/Gandul_Vilage/layout/footer.html"; ?>

  <!-- Bootstrap JS (optional) -->
  <script src="/bootsrap/js/pooper.min.js"></script>
  <script src="/bootsrap/js/bootstrap.min.js"></script>
</body>

</html>