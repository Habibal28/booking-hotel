<!-- @format -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap-5.0.1-dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="asset/style-laman-signin.css">

    <title>Hotel | Laman-SignIn</title>
  </head>
  <body>
    <section>
      <nav class="navbar navbar-dark fixed-top" style="background-color: #ff0bac;">
        <div class="container fs-5 fw-bold">
          <a class="navbar-brand" href="#">
            
            Luxury
          </a>
          <a href="index.php?page=auth&aksi=logout" type="button" class=" btn   btn-outline-danger fw-bold text-pink" style=" border-radius :1.5rem;"><i class="bi bi-box-arrow-right"></i> Logout</a> 
        </div>
      </nav>
    </section>

    <section>
      <div class="container container-layar d-md-flex justify-content-center shadow ">
        <div class="row">
          <div class="col left border-start rounded text-center ">
            <div class="row">
              <div class="col fw-bolder rounded shadow-sm fs-2 mb-5" style="background-color: #b6e2d3; color:#fae8e0;">Start Your Regitration Now</div>
            </div>
            <div class="row">
              <div class="col"> <a href="index.php?page=user&aksi=viewregistrasi" type="button" class="btn btn-outline-dark fw-bolder w-75 text-dark" style="background-color:#b6e2d3 ; color: #fae8e0;">Registration</a> </div>
            </div>
            <div class="row mt-3">
              <div class="col"> <a href="index.php?page=history&aksi=view" type="button" class="btn btn-outline-dark fw-bolder w-75 text-dark" style="background-color:#b6e2d3 ; color: #fae8e0;">History</a> </div>
            </div>
          </div>

          <div class="col right rounded-end">
            <div class="row">
              <div class="col fw-bold fs-3 text-center">Service & Facility</div>
            </div>
            <div class="row">
              <div class="col text-center rounded  shadow-sm fw-bold fs-3 mb-5 " style="background-color: #FAE8E0;color: #B6E2D3 ;">
               All in One 
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 text-center mb-5"><i class="bi bi-envelope fw-bold fs-4 "></i><h6>Email</h6></div>
              <div class="col-md-4 text-center"><i class="bi bi-people fw-bold fs-4"></i> <br> one milion people</div>
              <div class="col-md-4 text-center "><i class="bi bi-bar-chart fs-4"></i>Marketing</div>
              <div class="col-md-4 text-center "><i class="bi bi-wifi fs-4"></i> <br> Free Wifi</div>
              <div class="col-md-4 text-center "><i class="bi bi-lightning fs-4"></i><br>express service</div>
              <div class="col-md-4 text-center "><i class="bi bi-speaker fs-4"></i> <br>Full of Music</div>
              
            </div>
           
          </div>
          </div>
        </div>
      </div>
    </section>

    <footer class="text-light text-center text-lg-start shadow-lg">
      <div class="footer-capt text-center p-3"><h6 class="fw-bold"> </h6></div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  </body>
</html>
