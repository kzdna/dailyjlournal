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
                        <a class="nav-link" href="#about">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#product">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#jadwal">Schedule</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#saya">About Me</a>
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
    <h1 class="fw-bold display-4 pb-3">article</h1>
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

    <section id="product" class="text-center p-5 bg-danger-subtle">
        <div class="container">
            <h1 class="fw-bold display-4 pb-3">Gallery Section</h1>
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">

                    <div class="carousel-item active">
                        <img src="img/topi_1.jpeg" class="d-block w-100" alt="topi_1">
                    </div>

                    <div class="carousel-item">
                        <img src="img/topi_2.jpeg" class="d-block w-100" alt="topi_2">
                    </div>

                    <div class="carousel-item">
                        <img src="img/topi_3.jpeg" class="d-block w-100" alt="topi_3">
                    </div>
                    <div class="carousel-item">
                        <img src="img/topi_4.jpeg" class="d-block w-100" alt="topi_4">
                    </div>
                    <div class="carousel-item">
                        <img src="img/topi_5.jpeg" class="d-block w-100" alt="topi_5">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

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