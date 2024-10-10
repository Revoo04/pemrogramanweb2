<?php

require_once "buku.php";

class DaftarBukuModel{

    public function getData(){
        $daftar_buku = array(
            new Buku('Belajar Pemrograman web', 'Robert T.', 'Informatika', '2024'),
            new Buku('Matematika Diskrit', 'Rinaldi M.', 'Andi Publisher', '2017'),
            new Buku('Kalkulus', 'Emely S.', 'Airlangga', '2024'),
            new Buku('Metodologi penelitian', 'James W.', 'Uin Publisher', '2018'),
        );

        return $daftar_buku;
    }

    public function getKolomTabel(){
        $kolom_tabel = array(
            'No', 'Judul', 'pengarang', 'Penerbit', 'Tahun'
        );

        return $kolom_tabel;
    }
    
}