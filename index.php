<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HATHOT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn">
    <style>
        .dark-mode {
            background-color: #343a40;
            color: #f8f9fa;
        }

        .dark-mode .bg-light {
            background-color: #343a40;
            color: #343a40;
        }

        .dark-mode .bg-danger-subtle {
            background-color: #495057 !important;
            color: #f8f9fa;
        }

        .dark-mode .card, .dark-mode .card-footer {
            background-color: #495057;
            color: #f8f9fa;
        }

        #dark-mode-toggle a, #light-mode-toggle a {
            margin-right: 5px;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">HATHOT</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto text-dark">
                    <li class="nav-item">
                        <a class="nav-link" href="#hero">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#product">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#article">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php" target="_blank">Login</a>
                    </li>
                </ul>
                <button id="dark-mode-toggle" class="btn btn-outline-dark ms-2">
                    <i class="bi bi-moon"></i> Dark
                </button>
                <button id="light-mode-toggle" class="btn btn-outline-dark ms-2">
                    <i class="bi bi-sun"></i> Light
                </button>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="hero" class="text-center p-5 bg-danger-subtle text-sm-start">
        <div class="container">
            <div class="d-sm-flex flex-sm-row-reverse align-items-center">
                <img src="img/tangan.jpeg" class="img-fluid" width="300" alt="Hero Image">
                <div>
                    <h1 class="fw-bold display-4">Hey, Trendsetter! Siap untuk menambah koleksi barang kerenmu? </h1>
                    <h4 class="lead display-6">
                        Come get your own hat!
                    </h4>
                    <h6>
                        <span id="tanggal"></span>
                        <span id="jam"></span>
                    </h6>
                </div>
            </div>
        </div>
    </section>
    
<!-- article begin -->
<section id="article" class="text-center p-5">
  <div class="container">
    <h1 class="fw-bold display-4 pb-3">Article</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
      <?php
      $sql = "SELECT * FROM article ORDER BY tanggal DESC";
      $hasil = $conn->query($sql); 

      while($row = $hasil->fetch_assoc()){
      ?>
        <div class="col">
          <div class="card h-100">
            <img src="img/<?= $row["gambar"]?>" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title"><?= $row["judul"]?></h5>
              <p class="card-text">
                <?= $row["isi"]?>
              </p>
            </div>
            <div class="card-footer">
              <small class="text-body-secondary">
                <?= $row["tanggal"]?>
              </small>
            </div>
          </div>
        </div>
        <?php
      }
      ?> 
    </div>
  </div>
</section>
<!-- article end -->

    <!-- gallery begin -->
<section id="gallery" class="text-center p-5">
  <div class="container">
    <h1 class="fw-bold display-4 pb-3">Gallery</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
      <?php
      $sql = "SELECT * FROM article ORDER BY tanggal DESC";
      $hasil = $conn->query($sql); 

      while($row = $hasil->fetch_assoc()){
      ?>
        <div class="col">
          <div class="card h-100">
            <img src="img/<?= $row["gambar"]?>" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title"><?= $row["judul"]?></h5>
              <p class="card-text">
                <?= $row["tanggal"]?>
              </p>
            </div>
            <div class="card-footer">
              <small class="text-body-secondary">
                <?= $row["gambar"]?>
              </small>
            </div>
          </div>
        </div>
        <?php
      }
      ?> 
    </div>
  </div>
</section>
<!-- gallery end -->

    <!-- Footer -->
    <footer class="text-center p-5 bg-light">
        <div class="container">
            <div>
                <a href="https://instagram.com" class="h2 p-2 text-dark text-decoration-none">
                    <i class="bi bi-instagram"></i>
                </a>
                <a href="https://twitter.com" class="h2 p-2 text-dark text-decoration-none">
                    <i class="bi bi-twitter"></i>
                </a>
                <a href="https://wa.me" class="h2 p-2 text-dark text-decoration-none">
                    <i class="bi bi-whatsapp"></i>
                </a>
            </div>
            <!-- Div Kedua untuk Copyright -->
            <div class="mt-3">
              Salsa D Arindina &copy; 2024
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
        window.setTimeout("tampilWaktu()", 1000);

        function tampilWaktu() {
            var waktu = new Date();
            var bulan = waktu.getMonth() + 1;

            setTimeout("tampilWaktu()", 1000);
            document.getElementById("tanggal").innerHTML =
            waktu.getDate() + "/" + bulan + "/" + waktu.getFullYear();
            document.getElementById("jam").innerHTML = 
            waktu.getHours() + ":" + waktu.getMinutes() + ":" + waktu.getSeconds();
        }

        const darkModeToggle = document.getElementById("dark-mode-toggle");
        const lightModeToggle = document.getElementById("light-mode-toggle");

        darkModeToggle.addEventListener("click", () => {
            document.body.classList.add("dark-mode");
        });

        lightModeToggle.addEventListener("click", () => {
            document.body.classList.remove("dark-mode");
        });
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">
</body>
</html>