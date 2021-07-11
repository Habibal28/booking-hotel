<?php
// Koneksi
require_once("koneksi.php");

/**Memanggil Model */
require_once("Model/historymodel.php");
require_once("Model/signinmodel.php");
require_once("Model/signupmodel.php");
require_once("Model/authmodel.php");

/**memanggil Controller */
require_once("Controller/signincontroller.php");
require_once("Controller/historycontroller.php");
require_once("Controller/authcontroller.php");



//Routing dari URL ke Obyek Class PHP
if (isset($_GET['page']) && isset($_GET['aksi'])) {

session_start();

    $page = $_GET['page']; // Berisi nama page
    $aksi = $_GET['aksi']; // Aksi Dari setiap page

    // require_once akan Dirubah Saat Modul 2
    if ($page == "auth") {
        $auth = new authcontroller();
        if ($aksi == 'view') {
            $auth->index();
        } else if ($aksi == 'signin') {
            $auth->signin();
        } else if ($aksi == 'viewsignup') {
            $auth->viewsignup();
        } else if ($aksi == 'signup') {
            $auth->signup();
        } else if ($aksi == 'veriflogin') {
            $auth->veriflogin();
        } else if ($aksi == 'logout') {
            $auth->logout();
        } else {
            echo "Method Not Found";
        }
        
    
    } else if ($page == "history") {
        if($_SESSION['role'] == 'user'){
           $history = new historycontroller(); 
        if ($aksi == 'view') {
            $history->index();
        } else if ($aksi == 'print') {
            $history->print();
        } else if ($aksi == 'delete') {
            $history->delete();
        // } else if ($aksi == 'update') {
        //     $history->update();
        // } else if ($aksi == 'delete') {
        //     $history->delete();
        } else {
            echo "Method Not Found";
        }
    } else {
            header("location: index.php?page=auth&aksi=login");
        }
    } else if ($page == "user") {
       
        if($_SESSION['role'] == 'user'){
           $user = new signincontroller(); 
        if ($aksi == 'view') {
            $user->index();
        } else if ($aksi == 'viewregistrasi') {
            $user->getviewregistrasi();
        } else if ($aksi == 'registrasi') {
            $user->registrasi();
        } else {
            echo "Method Not Found";
        }
    } else {
            header("location: index.php?page=auth&aksi=login");
        }

    // } else if ($page == "penerbit") {
    //     if($_SESSION['role'] == 'admin') {
    //        $penerbit = new penerbitcontroller();
    //     if ($aksi == 'view') {
    //         $penerbit->index();
    //     } else if ($aksi == 'viewadd') {
    //         $penerbit->getviewadd();
    //     } else if ($aksi == 'insert') {
    //         $penerbit->insert();
    //     } else if ($aksi == 'viewupdate') {
    //         $penerbit->getviewupdate();
    //     } else if ($aksi == 'update') {
    //         $penerbit->update();
    //     } else if ($aksi == 'delete') {
    //        $penerbit->delete();
    //     } else {
    //         echo "Method Not Found";
    //     }
    // } else {
    //       header("location: index.php?page=auth&aksi=login");
    // }

    // } else if ($page == 'kategori') {
    //     if($_SESSION['role'] == 'admin') {
    //         $kategori = new kategoricontroller();
    //     if ($aksi == 'view') {
    //         $kategori->index();
    //     } else if ($aksi == 'viewadd') {
    //         $kategori->getviewadd();
    //     } else if ($aksi == 'insert') {
    //         $kategori->insert();
    //     } else if ($aksi == 'viewupdate') {
    //         $kategori->getviewupdate();
    //     } else if ($aksi == 'update') {
    //         $kategori->update();
    //     }else if($aksi == 'delete'){
    //         $kategori->delete();
    //     } else {
    //         echo "Method Not Found";
    //     }
    // } else {
    //     header("location: index.php?page=auth&aksi=login");
    // }
    // } else if ($page == 'history') {
    //     if($_SESSION['role'] == 'admin') {
    //         $history = new historycontroller();
    //     if ($aksi == 'view') {
    //         $history->index();
    //     } else if ($aksi == 'insert') {
    //         $history->insert();
    //     } else if ($aksi == 'viewupdate') {
    //         $history->getviewupdate();
    //     } else if ($aksi == 'update') {
    //         $history->update();
    //     }else if($aksi == 'delete'){
    //         $history->delete();
    //     } else {
    //         echo "Method Not Found";
    //     }
    // } else {
    //     header("location: index.php?page=auth&aksi=login");
    // }
} else {
        echo "Page Not Found";
    }
} else {
    header("location: index.php?page=auth&aksi=view"); //Jangan ada spasi habis location
}