<!-- @format -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <title>Form Print</title>
  </head>
  <body>
    <!-- <div class="container" style="border: 3px solid yellow; margin-top: 2rem; width: 60%">
      <nav class="bg-warning mt-5 p-3 rounded-1" style="width: 50rem; height: 5rem; margin-left: 3rem">
        <div class="container">
          </div>
        </nav> -->
        
        <div class="container" style="border: 3px solid yellow; margin-top: 7rem; width: 60% ;padding: 3rem 1rem">
          <h3 class="text-center fw-bold ">Formulir Pendaftaran</h3>
          <p class="mt-5">
          <h5 class="fw-bold">Data Diri</h5>
          <pre class="t4">
    Nama Pelanggan      :<?=$dataprint["nama"]?>

    NIK                 :<?=$dataprint["nik"]?> 
    Alamat              :<?=$dataprint["alamat"]?>

    No. Telephone       :<?=$dataprint["nohp"]?> 
          </pre>  
          
        </p>
        <p>
          <h5 class="fw-bold">Transaksi</h5>
          <pre class="t2">
    Tanggal Transaksi   :<?=$dataprint["tglpesan"]?>

    Tanggal Cek IN      :<?=$dataprint["tglcekin"]?> 
    Tanggal Cek OUT     :<?=$dataprint["tglcekout"]?>

    No. Kamar           :<?=$dataprint["nokamar"]?>

    Jenis Layanan       :<?=$dataprint["layanan"]?>  
    Total Pembayaran    :Rp.<?=$dataprint["harga"]?>  
          </pre>  
          
        </p>
      </div>

    </div>
    <script>window.print();</script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
