<?php

require_once "Buku.php";
require_once "Database/Database.php";

class DaftarBukuModel{

    public function getData(){
       $db = new Database();
       $koneksi = $db->getKoneksi();

       $sql =" SELECT * FROM buku";

       $query = $koneksi->query($sql);

       $daftar_buku = [];

       if ($query->num_rows > 0) {
        while($row = $query-> fetch_assoc()){
            $buku = new Buku ($row['Judul'], $row['Pengarang'], $row['Penerbit'], $row['Tahun']);
            array_push($daftar_buku, $buku);
        }
       }
        return $daftar_buku;
    }
    


    // database: perpustakaan
    // table: buku
    //          id int (11) primary key auto_increment,
    //          judul varchar (150),
    //          pengarang varchar (150),
    //          penerbit varchar (150),
    //          tahun int (5)


 public function getKolomTabel(){
    $kolom_tabel = array(
        'No', 'Judul', 'Pengarang', 'Penerbit', 'Tahun'
    );

    return $kolom_tabel;
}

}