<?php

class orang{
    //property
    private string $nama;
    private string $tglLahir;
    public string $alamat;

    //constuctornya
    public function __construct($nama)
    {
        $this->nama = $nama;
        echo "object ". $this->nama ." dibuat <br>";
        $this->tampilkanpassword();
    }

    //destruktor
    public function __destruct()
    {
        echo "object ". $this->nama ." dihapus <br>";
    }

    //method
    public function UcapkanSalam(){
        echo "<h2> Halo Perkenalkan nama saya ". $this->nama ." </h2>";
    }

    private function tampilkanpassword(){
        echo "Rahasia123";
    }

    //setter
    public function setNama($nama){
        $this->nama =$nama;
    }

     //getter
     public function getNama(){
        return $this->nama;
    }

     public function setTglLahir($tglLahir){
        $this->tglLahir = $TglLahir;
    }

    public function gettglLahir(){
        return $this->tglLahir;
    }

    public function setalamat($alamat){
        $this->alamat = $alamat;
    }

    public function getAlamat(){
        return $this->alamat;
    }
}