<!-- @format -->

<!DOCTYPE html>
<html lang="en">
  <head >
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />
    <link rel="stylesheet" href="asset/style.css" />
    <title>Hotel | Home</title>
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark shadow text-end fixed-top" >
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Luxury Hotel</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ms-auto start">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#galery">Galery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#footer">Slogans</a>
            </li>
            <li class="ps-3 pe-3">
              <a href="index.php?page=auth&aksi=signin"type="button" class="btn btn-outline-light fw-bold">Sign in</a>
             <a href="index.php?page=auth&aksi=viewsignup" type="button" class="sign-up btn btn-light fw-bold">Sign up</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- end navbar -->
    <!-- judul -->
    <section class="judul ">
      <h1 class="text-center text-light fw-bold">BOOKING HOTEL</h1>
      <p class="lead text-center text-light fw-italic">Luxury || International</p>
    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path
        fill="#fc8bc0"
        fill-opacity="1"
        d="M0,96L48,90.7C96,85,192,75,288,64C384,53,480,43,576,74.7C672,107,768,181,864,224C960,267,1056,277,1152,272C1248,267,1344,245,1392,234.7L1440,224L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"
      ></path>
    </svg>
    <!-- end judul -->
    <!-- container gambar -->
    <section id="galery">
      <div class="container" >
        <div class="row">
          <div class="col text-center">
            <h2>Galery</h2>
          </div>
        </div>
        <div class="row justify-content-center table-light" >
          <div class="col-md-4">
            <div class="card">
              <img src="img/bilding1.jpg" class="card-img-top shadow-sm" style="height: 30rem;" />
              <div class="card-body">
                <p class="card-text text-center">Building</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <img src="img/lobby.jpg" class="card-img-top shadow-sm"style="height: 30rem;" />
              <div class="card-body">
                <p class="card-text text-center">Lobby</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <img src="img/pool.jpg" class="card-img-top shadow-sm" style="height: 30rem;" />
              <div class="card-body">
                <p class="card-text text-center">Pool</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#ffffff"
          fill-opacity="1"
          d="M0,128L48,117.3C96,107,192,85,288,117.3C384,149,480,235,576,250.7C672,267,768,213,864,213.3C960,213,1056,267,1152,282.7C1248,299,1344,277,1392,266.7L1440,256L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"
        ></path>
      </svg>
    </section>
    <!-- end container gambar -->

    <!-- tes overlaping -->

    <!-- tes overlaping end -->

    <!-- footer -->
    <footer class="text-dark text-center text-lg-start shadow-lg" id="footer">
      <div class="footer-capt text-center p-3"><h6 class="fw-bold text-light">Kami tidak pernah menyia-nyiakan tamu meskipun permintaannya aneh-aneh</h6></div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  </body>
</html>
