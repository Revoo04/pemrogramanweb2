<?php

require_once "Model/daftarBukuModel.php";

class BukuController{

    public function jalankan(){

        // menggunakan model
        $dataModel = new DaftarBukuModel();

        // mengirimkan datamodel ke bukuView dan menampilkannya
        include "View/BukuView.php";

    }
    
}