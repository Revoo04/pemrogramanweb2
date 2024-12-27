<DOCTYPE html>
<html'>
    <head>
    <style>
        body 
</style>
        <title>DATA MAHASISWA</title>
    </head>
    <body>
        <br>        <tr>
    <table border="1" style="width: 100%">
        <tr>
            <th style="width: 10px">NO</th>
                      <th>NISN</th>
                      <th>Nama Murid</th>
                      <th>Nilai UTS</th>
                      <th>Nilai UAS</th>
                      
        </tr>
        <?php
                    include '../koneksi.php';
                    $no = 1;
                    $data = mysqli_query($koneksi, "select * from nilai");
                    while($d = mysqli_fetch_array($data)){
                      ?>
        <tr>
            <td><?php echo $no++; ?></td>
                        <td><?php echo $d['nama_matapelajaran']; ?></td>
                        <td><?php echo $d['nama_murid']; ?></td>
                        <td><?php echo $d['nilai_UTS']; ?></td>
                        <td><?php echo $d['nilai_UAS']; ?></td>
                        
                        </tr>
        <?php 
        }
        ?>
    </table>
    </tbody>
    </table>
  </body>
</html>

    <script>window.print();</script>
        
    
    
</body>
</html>