<?php

include_once "orang.php";
include_once "nilai.php";

class mahasiswa extends orang{
    protected string $nim;
    protected string $prodi;
    protected Nilai $nilai;

    public function setNim($nim){
        $this->nim = $nim;
    }

    public function setprodi($prodi){
        $this->prodi = $prodi;
    }

    public function setNilai($nilai){
        $this->nilai = $nilai;
    }

    public function tampilkanData(){
        echo "Nama : " . $this->nama . "<br>";
        echo "Nim : " . $this->nim . "<br>";
        echo "Prdi : " . $this->prodi . "<br>";
        echo "Nilai Tugas : " . $this->nilai->getTugas() . "<br>";
        echo "Nilai Uts : " . $this->nilai->getUts() . "<br>";
        echo "Nilai Uas : " . $this->nilai->getUas() . "<br>";
    }
}