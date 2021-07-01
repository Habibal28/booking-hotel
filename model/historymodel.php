<?php
class historymodel{
    function get($id){
        $sql = "SELECT p.id_pesanan ,c.nama ,k.nokamar,l.layanan, p.tglcekin, p.tglcekout FROM pesanan p
        JOIN customer c ON p.id_customer = c.id_customer
        JOIN kamar k ON p.id_kamar = k.id_kamar
        JOIN layanan l ON k.id_layanan = l.id_layanan 
        WHERE c.id_customer = $id";
    
        $result = koneksi()->query($sql);
        $hasil=[];
        while($data = mysqli_fetch_assoc($result)){
            $hasil[] = $data;
        }
        return $hasil;
    }
    
    function getprint($id){
        $sql = "SELECT p.id_pesanan, c.nama, c.nik, c.alamat, c.nohp, p.tglpesan,p.tglcekin,p.tglcekout,k.nokamar,l.layanan
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
?>