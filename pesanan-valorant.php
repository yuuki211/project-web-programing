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
            aria-label="Toggle navigation"
          >
            <!--toogle icon-->
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link active" aria-current="page" href="home.php"
                >Beranda</a>
              <a
                class="nav-link disabled"
                href="#"
                tabindex="-1"
                aria-disabled="true"
              ></a>
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
      <h1 class="mb-2">Valorant</h1>
      <p>Customer Service 24/7</p>
      <img src="valorant-header.jpg" class="img-fluid rounded" alt="Zenless Zone Zero">
    </section>

    <!-- Pilih Nominal Top Up -->
    <section class="my-4">
      <h2 class="h5">Pilih Nominal Top Up</h2>
      <div class="row g-3">
        <div class="col-md-4">
        <input type="radio" class="btn-check" name="options" id="option1" autocomplete="off" checked>
        <label class="btn btn-outline-primary w-100 h-100" for="option1">Checked</label>
        </div>
        <div class="col-md-4">
        <input type="radio" class="btn-check" name="options" id="option2" autocomplete="off">
        <label class="btn btn-outline-primary w-100 h-100" for="option2">Radio</label>
        </div>
        <div class="col-md-4">
        <input type="radio" class="btn-check" name="options" id="option3" autocomplete="off">
        <label class="btn btn-outline-primary w-100 h-100" for="option3">Disabled</label>
        </div>
        <!-- Tambahkan item sesuai kebutuhan -->
      </div>
    </section>

    <!-- Form User ID -->
    <section class="my-4">
      <h2 class="h5">Masukkan Riot ID</h2>
      <form action="process.php" method="POST" class="row g-3">
        <div class="col-md-6">
          <label for="user_id" class="form-label">Riot ID</label>
          <input type="text" id="user_id" name="user_id" class="form-control" required>
        </div>
        <div class="col-md-6">
          <label for="no-wa" class="form-label">Nomer Whatsapp</label>
          <input type="text" id="whatsapp" name="whatsapp" class="form-control" required>
      </form>
    </section>

    <!-- Metode Pembayaran -->
    <section class="my-4">
      <h2 class="h5">Pilih Metode Pembayaran</h2>
      <div class="row g-3">
        <div class="col-md-4">
        <input type="radio" class="btn-check" name="options" id="BCA" autocomplete="off" checked>
        <label class="btn btn-outline-primary w-100 h-100" for="BCA">Bank Transfer - BCA</label>
        </div>
        <div class="col-md-4">
        <input type="radio" class="btn-check" name="options" id="BRI" autocomplete="off">
        <label class="btn btn-outline-primary w-100 h-100" for="BRI">Bank Transfer - BRI</label>
        </div>
        <div class="col-md-4">
        <input type="radio" class="btn-check" name="options" id="QRIS" autocomplete="off">
        <label class="btn btn-outline-primary w-100 h-100" for="QRIS">QRIs</label>
        </div>
      </div>
    </section>
  </main>

  <footer class="bg-light py-3 text-center">
    <button class="btn btn-success">Konfirmasi Pesanan</button>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
