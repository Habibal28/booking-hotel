<?php
class historymodel{
    function get($idcustomer){
        $hari = "SELECT p.tglcekout-p.tglcekin as selisih FROM pesanan p 
        JOIN customer c ON c.id_customer = p.id_customer
        WHERE c.id_customer = $idcustomer";
        $sql1 = koneksi()->query($hari);
        $selisihhari=[];
        while($data = $sql1->fetch_assoc()){
        $selisihhari[] = $data;
        }
      
        $sql = "SELECT p.id_pesanan ,c.nama ,k.nokamar,l.layanan, l.harga , p.tglcekin, p.tglcekout FROM pesanan p
        JOIN customer c ON p.id_customer = c.id_customer
        JOIN kamar k ON p.id_kamar = k.id_kamar
        JOIN layanan l ON k.id_layanan = l.id_layanan 
        WHERE c.id_customer = $idcustomer";
        $result = koneksi()->query($sql);
        $hasil=[];
        $i=0;
        while($data = mysqli_fetch_assoc($result)){
            $hasil[] = $data;
            $hasil[$i]["harga"] = $hasil[$i]["harga"] * $selisihhari[$i]["selisih"];
            $i++;
        }
        return $hasil;
    }
    
    function getprint($id){
        $sql = "SELECT p.id_pesanan, c.nama, c.nik, c.alamat, c.nohp, p.tglpesan,p.tglcekin,p.tglcekout,k.nokamar,l.layanan,l.harga
        FROM pesanan p 
        JOIN customer c ON p.id_customer = c.id_customer
        JOIN kamar k ON p.id_kamar = k.id_kamar
        JOIN layanan l ON k.id_layanan = l.id_layanan
        WHERE p.id_pesanan = $id";
        $result =  koneksi()->query($sql);
        return $result->fetch_assoc();

    }

    function delete($id){
        $sql = "DELETE p, k FROM pesanan p 
        JOIN customer c ON p.id_customer = c.id_customer
        JOIN kamar k ON p.id_kamar = k.id_kamar
        JOIN layanan l ON k.id_layanan = l.id_layanan
        WHERE p.id_pesanan = $id";
        return koneksi()->query($sql);
    }
}

// $tes = new historymodel();
// var_dump($tes->get(1));
// die();