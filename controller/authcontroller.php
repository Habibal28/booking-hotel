<?php

class authcontroller{
    private $model;

    public function __construct()
    {
        $this->model = new authmodel();
    }
    
    function index(){
        require_once("view/index.php");
    }
    function signin(){
        require_once("view/login.php");
    }

    function viewsignup(){
        require_once("view/sign-up.php");
    }
    function signup(){
        $username = $_POST["username"];
        $password = $_POST["password"];
        $nama = $_POST["nama"];
        $nik = $_POST["nik"];
        $alamat = $_POST["alamat"];
        $nohp = $_POST["nohp"];
        
        $test = $this->model->signup($nik,$nama,$alamat,$nohp,$username,$password);
        if($test){
            header("location: index.php?page=auth&aksi=view&pesan=Berhasil sign up");
        }
        else{
            header("location: index.php?page=auth&aksi=view&pesan=Gagal sign up");
        }
    }

   public function veriflogin(){
        $username = $_POST["username"];
        $password = $_POST["password"];
        $test =  $this->model->veriflogin($username,$password);
        if($test){
            $_SESSION['role'] = 'user';
            $_SESSION['data'] = $test['id_customer'];
            header("location: index.php?page=user&aksi=view&pesan=Berhasil Login");
        }
        else{
            header("location: index.php?page=auth&aksi=signin&pesan=Gagal Login");
        }
    }
    
    function logout(){
        session_destroy();
        header("location: index.php?page=auth&aksi=view");
    }

  
}
// $tes = new authcontroller();
// var_dump($tes->veriflogin)
?>