<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"  />
    <title>Hotel | Data-diri</title>
  </head>
  <body>
  <section>
    <!-- form -->
    <div class="container border shadow rounded" style="width: 45%; margin-top: 8rem;  background-color: #b6e2d3">

        <div class="row">
          <div class="col">
          <div class="col-md-1"> <a href="index.php?page=user&aksi=view" class="bi bi-arrow-left-square-fill text-danger fs-2" ></a></div>
          </div>
        </div>
      
        <h1 class="col-md text-center shadow-sm rounded" style="background-color: #fae8e0; color: #b6e2d3; margin: 0rem 10rem; font-family: fantasy"> Complete Your <br />TRANSACTION</h1>

      <form action="index.php?page=user&aksi=registrasi" method="POST">
      <div class="col-md text-center mb-2 mt-5 fw-bold">
      <input type="hidden" name="id_customer" class="form-control" value="<?=$datacustomer["id_customer"]?>"/>
      </div>
        <div class="col-md text-center mb-2 mt-5 fw-bold" for="cekin">tanggal Cek-In</div>
        <div class="row justify-content-center">
          <div class="col-md-8 mb-3"> <input type="date" name="cekin" class="form-control" id="cekin"/></div>
        </div>
        <div class="col-md text-center mb-2 fw-bold" for="cekout">tanggal Cek-Out</div>
        <div class="row justify-content-center">
          <div class="col-md-8 mb-3">
            <input type="date" name="cekout" class="form-control" id="cekout"/>
          </div>
        </div>
        
        <div class="container mb-3 rounded border text-center col-md" style="margin: 0rem 16rem; width: 10rem; background-color: #fae8e0; font-family: monospace">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="layanan" id="vip" value="1" checked/>
            <label class="form-check-label fw-bold" for="vip"> VIP </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="layanan" id="regular" value="2" />
            <label class="form-check-label fw-bold" for="regular"> Regular </label>
          </div>
        </div>
        <div class="row">
          <div class="col-md mb-3 p-3 text-light text-center"><button type="submit" class="btn btn-outline-secondary" style="background-color: #fae8e0; font-family: fantasy; width: 10rem">ADD</button></div>
        </div>
       
        </form>

        
    </div>
    </section>
    <!-- end form -->

    <!-- end form -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  </body>
</html>
