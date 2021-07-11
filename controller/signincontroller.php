<?php

class signincontroller{
    private $model;

    
    public function __construct()
    {
        $this->model = new signinmodel();
    }

    function index(){
        require_once("view/view-sign-in.php");
    }

    function getviewregistrasi(){
        $id = $_SESSION['data'];
        $datacustomer = $this->model->getcustomer($id);
        extract($datacustomer);
        require_once("view/transaksi.php"); 
    }

    function registrasi(){
       $tgl_cekin = $_POST["cekin"];
       $tgl_cekout = $_POST["cekout"];
       $id_layanan = $_POST["layanan"];
       $id_customer = $_POST["id_customer"];
       $tgl_pesan = date("Y-m-d");
       
         $kamar = rand(1,200); 
         $this->model->registrasikamar($kamar,$id_layanan);
        
         $id_kamar= $this->model->getlastdatakamar();
       $test = $this->model->registrasi($tgl_pesan,$tgl_cekin,$tgl_cekout,$id_kamar['id_kamar'],$id_customer);

       if($test){
        header("location: index.php?page=user&aksi=view&pesan=Berhasil registrasi");
    }
    else{
        header("location: index.php?page=user&aksi=view&pesan=Gagal registrasi");
    }
}

    function history(){
        require_once("view/history.php");
    }

  
}
// $test = new signincontroller();
// var_dump($test->registrasi());
// die();

?>