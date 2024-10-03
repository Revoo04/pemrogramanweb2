<?php
    include "orang.php";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> hallo ini adalah Praktikum 2 saya</h1>
    <div>
        <?php
            //proses instansiasi
            $mahasiswa = new orang('Revo Maulana Saputra');

            //menggunakan setter dan getter
            $mahasiswa->setNama('Revo Maulana Saputra');
            $mahasiswa->settglLahir ('2004-05-05');
            $mahasiswa->setalamat ('desa pematang gajah, muaro jambi');

            echo "<br>";
            echo "Data Mahasiswa ". $mahasiswa->getNama() . "<br>";
            echo "Nama : " . $mahasiswa->getNama() . "<br>";
            echo "Tgl lahir : " . $mahasiswa->gettglLahir() . "<br>";
            echo "Alamat : " . $mahasiswa->getAlamat() . "<br>";

            // memanggil method
            $mahasiswa->UcapkanSalam();

            echo "<Br>";

            $mahasiswa2 = new Orang('paterpan');                                         
        

            $mahasiswa2->UcapkanSalam();
        ?>
    </div>

</body>
</html>