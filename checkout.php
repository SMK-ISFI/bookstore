<?php
require 'data.php';
/**
 * $_GET untuk mendapatkan nilai yang dikirim dari url
 * contoh
 * http://localhost:3000/checkout.php?id=6
 * untuk mendapatkan nilai id yang dikirim dari url
 * $_GET['id']
 * 
 * untuk mempermudah penulisan $_GET['id'] ketika digunakan
 * maka $_GET['id'] disimpan ke dalam variabel $id
 */
$id = $_GET['id'];
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
      <h1>Checkout</h1>

      <form>
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" id="title" class="form-control" value="<?= $books[$id]['title'] ?>" readonly>
        </div>
        <div class="mb-3">
          <label for="price" class="form-label">Price</label>
          <input type="number" id="price" class="form-control" value="<?= $books[$id]['price'] ?>" readonly>
        </div>
        <div class="mb-3">
          <label for="jumlah" class="form-label">Jumlah Di beli</label>
          <input type="number" id="jumlah" class="form-control">
        </div>
        <div class="mb-3">
          <label for="total" class="form-label">Total Bayar</label>
          <input type="number" id="total" class="form-control" readonly>
        </div>
        <button type="button" id="proses" class="btn btn-primary">Proses</button>
      </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
      /**
       * document.getElementById() untuk mendapatkan element 
       * html dari sebuah id yang di document atau file ini
       * contoh
       * 
       * <div id="box" class="kotak"></div>
       * document.getElementById('box')
       * document.querySelector('#box')
       * 
       * document.getElementByClassName('kotak')
       * document.querySelector('.kotak')
       * 
       * cara bacanya
       * javascript carikan di document ini sebuah element html
       * yang ber id box
       */

       /**
        * variabel di js
        * diawali const dan let lalu di ikuti nama variabel
        * contoh
        * const harga = 1000
        * let nama = "Fadil"
        * 
        * penjelasan const
        * const harga = 1000
        * mau diubah nilai
        * harga = 2000
        * ketik isi variabel diubah akan terjadi error 
        * 
        * penjelasan let
        * let nama = "Fadil"
        * mau diubah nilai
        * nama = "Arya"
        * let ini nilainya bisa diganti dan tidak terjadi error
        */
      const price = document.getElementById('price');
      const jumlah = document.getElementById('jumlah');
      const total = document.getElementById('total');

      /**
       * event
       * untuk menggunakan event di js dengan function addEventListener
       * function addEventListener diawali dengan element HTML yang akan
       * dilakukan event
       * di dalam parameter function addEventListener lalu kita tuliskan
       * event yang kita inginkan contoh event input 
       */
      jumlah.addEventListener('input', function () {
        if (jumlah.value < 1) {
          total.value = "";
        } else {
          let hasil = price.value * jumlah.value;

          total.value = hasil;
        }
      });

      const proses = document.getElementById('proses');

      proses.addEventListener('click', function() {
        if (jumlah.value === "" && total.value === "") {
          alert('Jumlah atau total bayar harus diisi');
        } else {
          window.location = "index.php";
        }
      });
    </script>
  </body>
</html>