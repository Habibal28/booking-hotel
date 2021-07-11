<?php

class historycontroller{
    private $model;

    public function __construct()
    {
        $this->model = new historymodel();
    }

    public function index(){
        $id = $_SESSION['data'];
        $data = $this->model->get($id,$id);
        extract($data);
        require_once("view/history.php");
    }
 
    function print(){
        $id = $_GET['id'];
        $dataprint = $this->model->getprint($id);
        extract($dataprint);
        require_once("view/print.php");
    }

    function delete(){
        $id = $_GET['id'];
        $test = $this->model->delete($id);
        if($test){
            header("location: index.php?page=history&aksi=view&pesan=Berhasil Delete");
        }else{
            header("location: index.php?page=history&aksi=view&pesan=Gagal Delete");
        }
    }
    

}

?>