<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="bootstrap-5.0.1-dist/css/bootstrap.min.css"rel="stylesheet"integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"crossorigin="anonymous" /> 
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"  />
    <title>History</title>
  </head>
  <body>
    <!-- Navbar -->
    <section>
      <nav
        class="navbar navbar-expand-lg navbar-dark"
        style="background-color: #ff0bac"
      >
        <div class="container fs-5 fw-bold">
          <a class="navbar-brand" href="#">
          
            History
          </a>
        </div>
      </nav>
    </section>
    <!-- Navbar End -->
    <!-- Tabel -->
    <section>
      <div class="container border mt-5 rounded shadow">
        <div class="row text-center mt-3 mb-3">
          <div class="col-md-1"> <a href="index.php?page=user&aksi=view" class="bi bi-arrow-left-square-fill text-danger fs-2" ></a></div>
          <div class="col-md-10 fw-bold fs-3">ORDER HISTORY</div>
        </div>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col-md">No Pesanan</th>
              <th scope="col-md">Nama Pelanggan</th>
              <th scope="col-md">No Kamar</th>
              <th scope="col-md">Layanan</th>
              <th scope="col-md">Tanggal Cek In</th>
              <th scope="col-md">Tanggal Cek Out</th>
              <th scope="col-md">Aksi</th>
            </tr>
          </thead>
          <tbody>
          <?php $i=1;
          foreach ($data as $row ) :?>
            <tr>
              <th scope="row"><?=$i?></th>
              <td><?=$row["nama"]?></td>
              <td><?=$row["nokamar"]?></td>
              <td><?=$row["layanan"]?></td>
              <td><?=$row["tglcekin"]?></td>
              <td><?=$row["tglcekout"]?></td>
              <td>
                <div class="btn-group" role="group" aria-label="Basic example">
                  <a href="index.php?page=history&aksi=print&id=<?=$row["id_pesanan"] ?>"  class="btn btn-outline-warning"> <i class="bi bi-printer-fill"></i>Cetak</a>
                   <a href="index.php?page=history&aksi=delete&id=<?=$row["id_pesanan"] ?> " class="btn btn-outline-danger"> <i class="bi bi-trash-fill"></i>Delete</a>
                  
                </div>
              </td>
            </tr>
            <?php $i++;
            endforeach; ?>
          </tbody>
        </table>
      </div>
    </section>
    <!-- Tabel End -->

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
