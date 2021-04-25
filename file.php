<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="file.css">
  <title>Kalkulator</title>
</head>

<body>
  <?php
    // buat class Kalkulator
    class Kalkulator
    {
      // deklarasi variable
      var $add;
      var $subtr;
      var $multiply;
      var $div;

      // buat method untuk class kalkulator
      function jumlah($n1, $n2)
      {
        echo $this->add = $n1 + $n2;
      }
      function kurang($n1, $n2)
      {
        echo $this->subtr = $n1 - $n2;
      }
      function kali($n1, $n2)
      {
        echo $this->multiply = $n1 * $n2;
      }
      function bagi($n1, $n2)
      {
        echo $this->div = $n1 / $n2;
      }
    }
    error_reporting(E_ERROR);
    $hasil = new Kalkulator(); //membuat objek hasil dari klas kalkulator
    $num1 = $_POST['number1']; //untuk menangkap inputan dan masukan ke variable
    $num2 = $_POST['number2'];
  ?>
  <center>
    <div class="card m-4 p-4" style="max-width: 25rem;">
      <div class="col">
        <h1 class="text-center" style="font-weight: 700;">Kalkulator</h1>
        <hr>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
          <div class="txt_field">
            <input type="text" name="number1" size="10" autocomplete="off" required>
            <span></span>
            <label>Angka 1</label>
          </div>
          <div class="txt_field">
            <input type="text" name="number2" size="10" autocomplete="off" required>
            <span></span>
            <label>Angka 2</label>
          </div>
          <input type="submit" name="submit" value="Hitung">
        </form><hr>
      </div>
      
      <div class="col">
        <h5 class="text-start mt-1 mb-3 fw-bold">Hasil :</h5>
        <div class="row">
          <div class="col-6">
            <p class="text-start text-success">Penjumlahan</p>
          </div>
          <div class="col-6 text-end">
            <p class="text-end"><?php $hasil->jumlah($num1, $num2); ?></p>
          </div>
        </div>
        <div class="row">
          <div class="col-6">
            <p class="text-start text-danger">Pengurangan</p>
          </div>
          <div class="col-6 text-end">
            <p class="text-end"><?php $hasil->kurang($num1, $num2); ?></p>
          </div>
        </div>
        <div class="row">
          <div class="col-6">
            <p class="text-start text-info">Perkalian</p>
          </div>
          <div class="col-6 text-end">
            <p class="text-end"><?php $hasil->kali($num1, $num2); ?></p>
          </div>
        </div>
        <div class="row">
          <div class="col-6">
            <p class="text-start text-warning">Pembagian</p>
          </div>
          <div class="col-6 text-end">
            <p class="text-end"><?php $hasil->bagi($num1, $num2);?></p>
          </div>
        </div>
      </div>
    </div>
  </center>
</body>
</html>