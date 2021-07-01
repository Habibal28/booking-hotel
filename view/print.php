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
          </pre>  
          
        </p>
      </div>

      <!-- <footer class="fixed-bottom">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="fixed-bottom">
          <path
            fill="#ffd700"
            fill-opacity="0.8"
            d="M0,96L18.5,128C36.9,160,74,224,111,224C147.7,224,185,160,222,117.3C258.5,75,295,53,332,74.7C369.2,96,406,160,443,197.3C480,235,517,245,554,224C590.8,203,628,149,665,112C701.5,75,738,53,775,69.3C812.3,85,849,139,886,149.3C923.1,160,960,128,997,144C1033.8,160,1071,224,1108,208C1144.6,192,1182,96,1218,74.7C1255.4,53,1292,107,1329,133.3C1366.2,160,1403,160,1422,160L1440,160L1440,320L1421.5,320C1403.1,320,1366,320,1329,320C1292.3,320,1255,320,1218,320C1181.5,320,1145,320,1108,320C1070.8,320,1034,320,997,320C960,320,923,320,886,320C849.2,320,812,320,775,320C738.5,320,702,320,665,320C627.7,320,591,320,554,320C516.9,320,480,320,443,320C406.2,320,369,320,332,320C295.4,320,258,320,222,320C184.6,320,148,320,111,320C73.8,320,37,320,18,320L0,320Z"
          ></path>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="fixed-bottom">
          <path
            fill="#ffd700"
            fill-opacity="1"
            d="M0,0L18.5,26.7C36.9,53,74,107,111,122.7C147.7,139,185,117,222,138.7C258.5,160,295,224,332,256C369.2,288,406,288,443,245.3C480,203,517,117,554,74.7C590.8,32,628,32,665,64C701.5,96,738,160,775,176C812.3,192,849,160,886,170.7C923.1,181,960,235,997,224C1033.8,213,1071,139,1108,112C1144.6,85,1182,107,1218,117.3C1255.4,128,1292,128,1329,112C1366.2,96,1403,64,1422,48L1440,32L1440,320L1421.5,320C1403.1,320,1366,320,1329,320C1292.3,320,1255,320,1218,320C1181.5,320,1145,320,1108,320C1070.8,320,1034,320,997,320C960,320,923,320,886,320C849.2,320,812,320,775,320C738.5,320,702,320,665,320C627.7,320,591,320,554,320C516.9,320,480,320,443,320C406.2,320,369,320,332,320C295.4,320,258,320,222,320C184.6,320,148,320,111,320C73.8,320,37,320,18,320L0,320Z"
          ></path>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="fixed-bottom">
          <path
            fill="#ffd700"
            fill-opacity="0.4"
            d="M0,256L11.4,224C22.9,192,46,128,69,133.3C91.4,139,114,213,137,213.3C160,213,183,139,206,122.7C228.6,107,251,149,274,165.3C297.1,181,320,171,343,160C365.7,149,389,139,411,160C434.3,181,457,235,480,261.3C502.9,288,526,288,549,266.7C571.4,245,594,203,617,176C640,149,663,139,686,138.7C708.6,139,731,149,754,138.7C777.1,128,800,96,823,101.3C845.7,107,869,149,891,160C914.3,171,937,149,960,170.7C982.9,192,1006,256,1029,266.7C1051.4,277,1074,235,1097,202.7C1120,171,1143,149,1166,154.7C1188.6,160,1211,192,1234,181.3C1257.1,171,1280,117,1303,90.7C1325.7,64,1349,64,1371,96C1394.3,128,1417,192,1429,224L1440,256L1440,320L1428.6,320C1417.1,320,1394,320,1371,320C1348.6,320,1326,320,1303,320C1280,320,1257,320,1234,320C1211.4,320,1189,320,1166,320C1142.9,320,1120,320,1097,320C1074.3,320,1051,320,1029,320C1005.7,320,983,320,960,320C937.1,320,914,320,891,320C868.6,320,846,320,823,320C800,320,777,320,754,320C731.4,320,709,320,686,320C662.9,320,640,320,617,320C594.3,320,571,320,549,320C525.7,320,503,320,480,320C457.1,320,434,320,411,320C388.6,320,366,320,343,320C320,320,297,320,274,320C251.4,320,229,320,206,320C182.9,320,160,320,137,320C114.3,320,91,320,69,320C45.7,320,23,320,11,320L0,320Z"
          ></path>
        </svg>
      </footer> -->
    </div>
    <script>window.print();</script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
