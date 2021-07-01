<?php

class authmodel{

    public function veriflogin($usename,$password){
        $sql = "SELECT * FROM customer WHERE username='$usename' && password = '$password'";
        $test =  koneksi()->query($sql);
        return $test->fetch_assoc();
    }

    public function signup($nik,$nama,$alamat,$nohp,$username,$password){
        $sql = "INSERT INTO customer values('',$nik,'$nama','$alamat','$nohp ', '$username','$password')";
        return koneksi()->query($sql);
    }
}

// $tes = new authmodel();
// var_dump($tes->veriflogin('raffi',123));
// die();
?>