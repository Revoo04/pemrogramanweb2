<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 3</title>
</head>
<body>
    <h1>Konsep Pewarisan</h1>
    <div class="" style="font-size: 45px;">
        <?php
            include "orangbiasa.php";
            include "oranginggris.php";
            include "mahasiswa.php";

            $james = new orangbiasa("james");
            $james->ucapSalam();
            echo "<br>";

            $parno = new oranginggris('parno');
            $parno->ucapSalam();
            echo "<br>";

            $revo = new mahasiswa("Revo");
            $revo->ucapSalam();
            echo "<br>";
            $revo->setNim("701230002");
            $revo->setprodi("Sistem Informasi");

            $nilaiRevo =new Nilai();
            $nilaiRevo->setTugas(90);
            $nilaiRevo->setUts(88);
            $nilaiRevo->setUas(90);

            $revo->setNilai($nilaiRevo);
            $revo->tampilkanData();
        ?>    
    </div>
</body>
</html>