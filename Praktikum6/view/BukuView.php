<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    </head>
     <body>

    <div class="container">
        <div class="raw">
            <div class="col-12">
                <h1>Daftar Buku</h1>
                <div class="my-3">
                    <button data-bs-toggle="modal" data-bs-target="#tambahModal" class="btn btn-primary"><i class="bi bi-plus-circle"></i> Tambah</button>
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <?php foreach($dataModel->getKolomTabel() as $kolom):?>
                                <th scope="col"><?php echo $kolom;?></th>
                            <?php endforeach?>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 0;?>
                        <?php foreach($dataModel->getData() as $buku):?>
                            <tr>
                                <td><?php echo ++$no; ?></td>
                                <td><?php echo $buku->getJudul(); ?></td>
                                <td><?php echo $buku->getPengarang(); ?></td>
                                <td><?php echo $buku->getPenerbit(); ?></td>
                                <td><?php echo $buku->getTahun(); ?></td>
                                <td>
                                    <a href="/index.php/edit?id=1" class="btn btn-sm btn-success"><i class="bi-pencil square"></i>Edit</a> <button data-bs-toggle="modal" data-bs-target="#hapusModal" data-bs-id="1" class="btn btn-sm btn-danger"><i class= "bi-trash"></i>Hapus</button>
                                </td>
                            </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

   

    <!-- Modal -->
<div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Form Tambah Buku</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action ="/index.php/simpan" method="POST" id="formTambah">
            <div class="mb-3">
                <label for="Judul">Judul</label>
                <input type="text" name="Judul" id="Judul" class="form-control">
            </div>
            <div class="mb-3">
                <label for="Pengarang">Pengarang</label>
                <input type="text" name="Pengararng" id="Pengararng" class="form-control">
            </div>
            <div class="mb-3">
                <label for="Penerbit">Penerbit</label>
                <input type="text" name="Penerbit" id="Penerbit" class="form-control">
            </div>
            <div class="mb-3">
                <label for="Tahun">Tahun</label>
                <input type="text" name="Tahun" id="Tahun" class="form-control">
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" form="formTambah" class="btn btn-primary"><i class="bi-floppy"></i>Simpan</button>
      </div>
    </div>
  </div>
</div>



<!-- Modal Hapus -->
<div class="modal fade" id="hapusModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Konfirmasi Hapus Modal</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="/index.php/hapus" method="POST" id="formHapus">
            <input type="hidden" name="id" id="idHapus" value="">
        </form>
        <p class="">Apakah anda yakin menghapus data dengan id <span id ="textId"></span> ini?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" form="formHapus" class="btn btn-danger"><i class="bi-trash"></i>Hapus</button>
      </div>
    </div>
  </div>
</div>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
   
   <script>
    var hapusModal = document.getElementById('hapusModal') 
    hapusModal.addEventListener('show.bs.modal',event => {
     // Button that triggered the modal
    var button = event.relatedTarget
    // Extract info from data-bs-* attributes
    var recipient = button.getAttribute('data-bs-id')
    // If necessary, you could initiate an AJAX request here
    // and then do the updating in a callback.
    //
    // Update the modal's content.
     var inputHapus = hapusModal.querySelector('#idHapus')
     var tectIdt = hapusModal.querySelector('#textId')

     idHapus.value = id;
     textId.textContent = id;
  
         })
      </script>
    </body>
</html>