<?php
/**
 * Untuk memasukkan file data.php
 * agar isi dari data.php dapat digunakan di dalam file
 */
require 'data.php';
// include 'data.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Toko Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
      <h1>Toko Buku</h1>

      <div class="row gx-5">
        <?php 
        /**
         * perulangan foreach digunakan untuk menampilkan data array
         * variabel $books didapat dari file data.php
         * variabel $index untuk mendaptkan index dari array multidimensi
         * variabel $value untuk mendapatkan isi dari array asosiatif
         */
        foreach($books as $index => $value): 
        ?>
        <div class="col-3 mb-5">
          <div class="card h-100" style="width: 18rem;">
            <img src="image/<?= $value['image'] ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><?= $value['title'] ?></h5>
              <p class="card-text">Category: <?= $value['category'] ?></p>
              <p class="card-text">Rating: <?= $value['rating'] ?></p>
              <p class="card-text">Rp. <?= $value['price'] ?></p>
              <a href="checkout.php?id=<?= $index ?>" class="btn btn-primary">Checkout</a>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>