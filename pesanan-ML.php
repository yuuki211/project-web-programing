<?php
$produk = [
  ['1', '1.500', '5 Diamonds (5+0 Bonus) | Rp1.500', 'diamond'],
  ['2', '3.500', '12 Diamonds (11+1 Bonus) | Rp3.500', 'diamond'],
  ['3', '5.500', '19 Diamonds (17+2 Bonus) | Rp5.500', 'diamond'],
  ['4', '8.000', '28 Diamonds (25+3 Bonus) | Rp8.000', 'diamond'],
  ['5', '11.900', '44 Diamonds (40+4 Bonus) | Rp11.900', 'diamond'],
  ['6', '15.900', '59 Diamonds (53+6 Bonus) | Rp15.900', 'diamond'],
  ['7', '22.800', '85 Diamonds (77+8 Bonus) | Rp22.800', 'diamond'],
  ['8', '45.600', '170 Diamonds (154+16 Bonus) | Rp45.600', 'diamond'],
  ['9', '64.600', '240 Diamonds (217+23 Bonus) | Rp64.600', 'diamond'],
  ['10', '79.500', '296 Diamonds (256+40 Bonus) | Rp79.500', 'diamond'],
  ['11', '108.800', '408 Diamonds (367+41 Bonus) | Rp108.800', 'diamond'],
  ['12', '148.400', '568 Diamonds (503+65 Bonus) | Rp148.400', 'diamond'],
  ['13', '227.500', '875 Diamonds (774+101 Bonus) | Rp227.500', 'diamond'],
  ['14', '494.500', '2010 Diamonds (1708+302 Bonus) | Rp494.500', 'diamond'],
  ['15', '1.186.500', '4830 Diamonds (4003+827 Bonus) | Rp1.186.500', 'diamond'],
  ['16', '27.700', ' weekly Diamond Pass | Rp27.700', 'weekly'],
  ['17', '59.300', ' weekly Diamond Pass 2x | Rp59.300', 'weekly'],
  ['18', '84.200', ' weekly Diamond Pass 3x | Rp84.200', 'weekly'],
  ['19', '112.300', ' weekly Diamond Pass 4x | Rp112.300', 'weekly'],
  ['20', '140.300', ' weekly Diamond Pass 5x | Rp140.300', 'weekly'],
  ['21', '149.000', ' Twilight Pass | Rp149.000', 'twilight'],
]
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lawak Store</title>
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
    crossorigin="anonymous" />
  <link rel="stylesheet" href="styles.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="container-fluid">
        <a class="navbar-brand" href="home.php">Lawak Store</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup"
          aria-expanded="false"
          aria-label="Toggle navigation">
          <!--toogle icon-->
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="home.php">Beranda</a>
            <a
              class="nav-link disabled"
              href="#"
              tabindex="-1"
              aria-disabled="true"></a>
            <div class="Login-link">
              <a class="nav-link" href="registrasi.php">Daftar/Masuk</a>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </header>

  <main class="container my-4">
    <!-- Banner -->
    <section class="banner bg-dark text-white text-center p-4 rounded">
      <h1 class="mb-2">Mobile Legends: Bang Bang</h1>
      <p>Customer Service 24/7</p>
      <img src="ML-header.jpg" class="img-fluid rounded" alt="MLBB">
    </section>
    <br>
    <section>
      <h2 class="h5">Pilih Nominal Top Up</h2>
      <div class="container-fluid justify-content-around" id="ItemFilter">
        <button type="button" class="btn btn-outline-primary" id="diamond" onclick="filterProduk(this)">Diamonds</button>
        <button type="button" class="btn btn-outline-primary" id="weekly" onclick="filterProduk(this)">Weekly Diamond Pass</button>
        <button type="button" class="btn btn-outline-primary" id="twilight" onclick="filterProduk(this)">Twilight Pass</button>
      </div>
    </section>
    <br>
    <!-- Pilih Nominal Top Up -->
    <form action="process.php" method="POST" class="row g-3">
      <section class="my-4">

        <div class="row g-3">
          <?php foreach ($produk as $i) { ?>
            <div class="col-md-3 filter-item <?= $i[3] ?>">
              <input type="radio" class="btn-check" name="options" id="option<?= $i[0] ?>" value="<?= $i[1] ?>" autocomplete="off">
              <label class="btn btn-outline-primary w-100 h-100" name="pilihan<?= $i[0] ?>" for="option<?= $i[0] ?>"><?= $i[2] ?></label>
            </div>
          <?php } ?>
          <!-- Tambahkan item sesuai kebutuhan -->
        </div>

      </section>

      <!-- Form User ID -->
      <section class="my-4">
        <div class="row g-3">
          <h2 class="h5">Masukkan User ID</h2>
          <div class="col-md-4">
            <label for="user_id" class="form-label">Masukkan User ID</label>
            <input type="text" id="user_id" name="user_id" class="form-control" required>
          </div>
          <div class="col-md-4">
          <label for="server_id" class="form-label">Masukkan Server</label>
            <input type="text" id="server_id" name="server_id" class="form-control" required>
          </div>
          <div class="col-md-4">
            <label for="whatsapp" class="form-label">Nomer Whatsapp</label>
            <input type="text" onkeypress="return restrictAlphabets(event)" id="whatsapp" name="whatsapp" class="form-control" required>
          </div>

      </section>

      <!-- Metode Pembayaran -->
      <section class="my-4">
        <h2 class="h5">Pilih Metode Pembayaran</h2>
        <div class="row g-3">
          <div class="col-md-4">
            <select class="form-select" id="server" aria-label="Default select example">
              <option value="bank">Silakan Pilih</option>
              <option value="bca">Bank Transfer | BCA</option>
              <option value="bri">Bank Transfer | BRI</option>
              <option value="bni">Bank Transfer | BNI</option>
              <option value="dana">Digital Wallet | DANA</option>
              <option value="gopay">Digital Wallet | GoPay</option>
              <option value="qris">QRIS</option>
            </select>
          </div>
        </div>
      </section>
      <section class="my-4">
        <h2 class="h5"></h2>
        <div class="row g-3">
          <div class="col-md-4">
            <button type="submit" class="btn btn-success">Konfirmasi Pesanan</button>
          </div>
        </div>
      </section>
    </form>
  </main>

  <footer class="bg-primary text-center text-lg-start">
    <div class="text-center p-3 text-light">
      © 2024 Copyright Lawak Store
    </div>
  </footer>
  <script>
    function filterProduk(e) {
      console.log(e.id);
      $('.filter-item').removeClass('d-none')
      if (e.id != "All") $('.filter-item:not(.' + e.id + ')').addClass('d-none');
      $('#ItemFilter button').removeClass('active');
      e.classList.add('active')
    }
  </script>

  <script type="text/javascript">
    function restrictAlphabets(e) {
      var x = e.which || e.keycode;
      if ((x >= 48 && x <= 57))
        return true;
      else
        return false;
    }
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>