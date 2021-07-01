<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />

    <title>Hotel | Data-diri</title>
  </head>
  <body> 
    
    <!-- form -->
    <div class="container border shadow rounded" style="width: 45%; margin-top: 3rem;padding-top: 2rem; background-color: #fae8e0;">

        <h1 class="col-md text-center shadow-sm rounded" style="background-color:#b6e2d3; color : #fae8e0;margin: 0rem 10rem;font-family:fantasy;">Enter Your <br> Personal Data</h1>

<form action="index.php?page=auth&aksi=signup" method="POST">
      <div class="col-md text-center  mt-5 fw-bold" for="username">Username</div>
      <div class="row justify-content-center">
        <div class="col-md-8 mb-1">
          <input type="text" name="username" class="form-control" id="username"  />
        </div>
      </div>
      <div class="col-md text-center fw-bold" for="password">Password</div>
      <div class="row justify-content-center">
        <div class="col-md-8 mb-1">
          <input type="password" name="password" class="form-control" id="password"  />
        </div>
      </div>
      <div class="col-md text-center   fw-bold" for="nama">Nama</div>
      <div class="row justify-content-center">
        <div class="col-md-8 mb-1">
          <input type="text" name="nama" class="form-control" id="nama"  />
        </div>
      </div>
      <div class="col-md text-center  fw-bold" for="nik">NIK</div>
      <div class="row justify-content-center">
        <div class="col-md-8 mb-1">
          <input type="text" name="nik" class="form-control" id="nik"  />
        </div>
      </div>
      <div class="col-md text-center  fw-bold" for="alamat">Alamat</div>
      <div class="row justify-content-center">
        <div class="col-md-8 mb-1">
          <input type="text" name="alamat" class="form-control" id="alamat"  />
        </div>
      </div>
      <div class="col-md text-center  fw-bold" for="nohp">No Telephone</div>
      <div class="row justify-content-center">
        <div class="col-md-8 mb-1">
          <input type="text" name="nohp" class="form-control" id="nohp"  />
        </div>
      </div>
      
      <div class="row">
        <div class="col-md mb-3 p-3 text-light text-center ">
          <button type="submit" name="submit" class="btn btn-outline-secondary" style="background-color: #b6e2d3;"> ADD </button>
        </div>
      </div>
      </form>
    </div>
    </div>
    <!-- end form -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  </body>
</html>
