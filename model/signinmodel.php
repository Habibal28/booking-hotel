<?php
class signinmodel{
    // function query($data){
    //     global $conn;
    //     $username = $data["username"];
    //     $password = $data["password"];
    //     $data = ("SELECT username,password FROM registrasi WHERE username = '$username' && password = '$password'")[0];
    //     $result = mysqli_query($conn,$data);
    //     $hasil = [];
        
    //     while($data = mysqli_fetch_assoc($result)){
    //         $hasil[]=$data;
    //     }
    //     return $hasil;  
    // }

    public function registrasi($tgl_pesan,$tgl_cekin,$tgl_cekout,$id_kamar,$id_customer){
        $sql = "INSERT INTO pesanan VALUES ('','$tgl_pesan','$tgl_cekin','$tgl_cekout','$id_kamar','$id_customer')";
        return koneksi()->query($sql);
    }

    function registrasikamar($kamar,$id_layanan){
        $sql="INSERT INTO kamar VALUES ('',$kamar,$id_layanan)";
        return koneksi()->query($sql);
        
    }
    function getlastdatakamar(){
        $sql = "SELECT id_kamar FROM kamar ORDER BY id_kamar DESC LIMIT 1 "; 
        $result = koneksi()->query($sql);
        return $result->fetch_assoc();
    }

    function getcustomer($id){
        $sql = "SELECT * FROM customer WHERE id_customer = $id";
        $result = koneksi()->query($sql);
        return $result->fetch_assoc();
    }


}

// $tes = new signinmodel();
// var_export($tes->coba());
// die();
?>