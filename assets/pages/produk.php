<?php
$produk = [
   [
      "produk" => "birth day t-shirt shani indira natio",
      "terjual" => 15000,
      "harga" => 205000,
      "deskripsi" => "last birth day t-shirt shani indira natio - black",
   ],
   [
      "produk" => "birth day t-shirt flora syafiqa riyadi",
      "terjual" => 3000,
      "harga" => 169000,
      "deskripsi" => "birth day t-shirt flora syafiqa batch 3 - white",
   ],
   [
      "produk" => "birth day t-shirt gabriella abigael",
      "terjual" => 2200,
      "harga" => 169000,
      "deskripsi" => "birth day t-shirt gabriella abigael - black",
   ],
   [
      "produk" => "JKT48 neckstrap - kebun binatang saat hujan",
      "terjual" => 500,
      "harga" => 40000,
      "deskripsi" => "Neckstrap terbaru dalam rangka rilisnya JKT48 New Era Special Performance Video - Kebun Binatang Saat Hujan kini sudah bisa kamu dapatkan di Tokopedia Official JKT48!",
   ],
   [
      "produk" => "JKT48 2024 Calendar “Flowerful",
      "terjual" => 500,
      "harga" => 180000,
      "deskripsi" => "Blossoming through the months with the beauty of JKT48 members. JKT48 Flowerful Calendar 2024 sudah bisa kamu dapatkan di JKT48 Official Store Tokopedia!",
   ],
   [
      "produk" => "JKT48 High Tension (CD+DVD)",
      "terjual" => 500,
      "harga" => 80000,
      "deskripsi" => "REGULAR/CD-DVD VERSION",
   ],
   [
      "produk" => "JKT48 Summer Festival Headband - Member & Trainee",
      "terjual" => 500,
      "harga" => 30000,
      "deskripsi" => "Merchandise terbaru dari JKT48 Summer Festival sudah bisa kamu dapatkan di Tokopedia! Lengkapi atribut untuk mendukung oshi kamu dengan JKT48 Summer Festival Headband.",
   ],
   [
      "produk" => "JKT48 Summer Festival Totebag",
      "terjual" => 500,
      "harga" => 150000,
      "deskripsi" => "Merchandise terbaru dari JKT48 Summer Festival sudah bisa kamu dapatkan di Tokopedia! JKT48 Summer Festival Totebag dengan warna biru yang keren dan cerah!",
   ],
   [
      "produk" => "Lightstick JKT48 Newera",
      "terjual" => 750,
      "harga" => 280000,
      "deskripsi" => "Lightstick JKT48 Newera - Terdiri dari 15 warna",
   ],
   [
      "produk" => "JKT48 10th Anniversary Baseball Cap Black",
      "terjual" => 60,
      "harga" => 150000,
      "deskripsi" => "JKT48 10th Anniversary Baseball Cap hadir dengan dua warna pilihan, yaitu hitam dan maroon.",
   ],
]

?>
<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Produk PHP</title>
      <link rel="shortcut icon" href="../img/JKT48.png" type="image/x-icon">
      <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
      <!-- DataTable -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://cdn.datatables.net/2.0.3/css/dataTables.bootstrap5.css">
      <link rel="stylesheet" href="../css/style.css">
   </head>
   <body>
      <!-- NAV -->
      <nav class="navbar navbar-expand-lg bg-body-tertiary">
         <div class="container">
            <a class="navbar-brand fw-bolder" href="#">
               <img src="../img/JKT48.png" alt="Logo" height="30" class="d-inline-block align-text-top">
               JKT48
            </a>
            <div class="collapse navbar-collapse" id="navbarNav">
               <ul class="navbar-nav ms-auto">
                  <li class="nav-item">
                     <a class="nav-link active" aria-current="page" href="../../login.php">Login</a>
                  </li>
               </ul>
            </div>
         </div>
      </nav>
      <!-- NAV -->
      <main class="">
         <div class="container my-3">
            <h2>Table Produk JKT48</h2>
            <div class="table-responsive">
               <table class="table table-striped table-bordered" id="tabelProduk">
                  <thead>
                     <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Produk</th>
                        <th scope="col">Item Terjual</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Deskripsi</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php
                     $nomor = 0;
                     foreach ($produk as $p) {
                     $nomor++
                     ?>
                     <tr>
                        <th scope="row"><?= $nomor ?></th>
                        <td class="text-capitalize"><?= $p["produk"] ?></td>
                        <td class="text-capitalize"><?= $p["terjual"] ?></td>
                        <td class="text-capitalize"><?= $p["harga"] ?></td>
                        <td class="text-capitalize"><?= $p["deskripsi"] ?></td>
                     </tr>
                     <?php } ?>
                  </tbody>
               </table>
   
            </div>
         </div>
         
      </main>
      <footer class="footer container">
      <p>&copy; Anandhari Alfitho Deanova</p>
      <p>Created at : 28 March 2024</p>
      </footer>
      <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> -->
      <!-- DataTable -->
      <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
      <script src="https://cdn.datatables.net/2.0.3/js/dataTables.js"></script>
      <script src="https://cdn.datatables.net/2.0.3/js/dataTables.bootstrap5.js"></script>
      <script src="../js/script.js"></script>
   </body>
</html>