<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap-5.0.1-dist//css/bootstrap.min.css" />
    <link rel="stylesheet" href="asset/style-login.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    <title>Hotel | Login-Customer</title>
  </head>
  <body>
    <!-- background -->
    
    <!-- background -->
    <!-- Form login -->
    <section>
     <div class="container form-login text-center text-light shadow justify-content-center border rounded-3">
<form action="index.php?page=auth&aksi=veriflogin" method="POST">
        <div class="row  md-3">
          <div class="col fw-bold text-dark mb-3 fw-bold fs-6"style="font-family:monospace;" for="username">Username</div>
        </div>
        <div class="row  justify-content-center mb-2">
          <div class="col-md-10  mb-2">
            <div class="input-group flex-nowrap">
              <span class="input-group-text" id="addon-wrapping"><i class="bi bi-person-fill"></i></i></span>
              <input type="text" name="username" class="form-control" placeholder="ID" aria-label="Username" />
            </div>
          </div>
        </div>

        <div class="row mb-3">
          <div class="col fw-bold text-dark fw-bold fs-6" style="font-family:monospace;" for="password">Password</div>
        </div>

       <div class="row justify-content-center mb-2">
          <div class="col-md-10 ">
            <div class="input-group flex-nowrap">
              <span class="input-group-text" id="addon-wrapping"><i class="bi bi-lock-fill"></i></i></i></span>
              <input type="password" name="password" class="form-control" placeholder="Password" aria-label="password"  />
            </div>
          </div>
        </div>
        <div class="row mt-3 d-grid gap-2">
          <div class="col"> <button class="btn-login btn fw-bold" type="submit" name="submit">Sign in</button></div>
        </div>
        </form>
      </div>

    </section>

    <!-- end form login -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  </body>
</html>


