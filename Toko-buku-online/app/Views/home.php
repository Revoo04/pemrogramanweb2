<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Toko Buku Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">
        <div class="row bg-primary-subtle">
            <div class="col-6 p-5">
                <h1> Selamat Datang Di Toko Buku Online </h1>
                <p>Kami menyediakan berbagai jenis buku dari berbagai penerbit terkemuka.</p>
                <button class="btn btn-warning">Lihat Produk</button>
            </div>
            <div class="col-6 p-5">
                <h1>Temukan Buku Favorit Anda</h1>
                <form action="">
                    <div class="mb-3">
                        <input type="text" name = "judul" id = "judul" class= "form-control" placeholder="Judul Buku">
                    </div>
                    <div class="mb-3">
                        <select name="kategori" id="kategori">
                            class="form-control">
                            <option value="">-- Pilih kategori --</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="pengarang" id="pengarang" placeholder="Pengarang" class="form-control">
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-primary">Cari</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-12">
                <h2 class="mb-3">Buku Best Seller</h2>
                <div class="row">
                    <div class="col-4">
                    <div class="card">
                         <img src="<?= base_url() ?>/images/1.jpg" class="card-img-top" alt="...">
                            <div class="card-body" style="width: 16rem;">
                                <h5 class="card-title">Sagaras</h5>
                                 <p class="card-text">Rp. 95.000</p>
                                  <a href="#" class="btn btn-primary">Add to chart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                    <div class="card">
                         <img src="<?= base_url() ?>/images/2.jpg" class="card-img-top" alt="...">
                            <div class="card-body" style="width: 16rem;">
                                <h5 class="card-title">Black Showman</h5>
                                 <p class="card-text">Rp. 119.000</p>
                                  <a href="#" class="btn btn-primary">Add to chart</a>
                            </div> 
                        </div>
                    </div>
                    <div class="col-4">
                    <div class="card">
                         <img src="<?= base_url() ?>/images/3.jpg" class="card-img-top" alt="...">
                            <div class="card-body" style="width: 16rem;">
                                <h5 class="card-title">Layangan Putus</h5>
                                 <p class="card-text">Rp. 75.000</p>
                                  <a href="#" class="btn btn-primary">Add to chart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                    <div class="card">
                         <img src="<?= base_url() ?>/images/4.jpg" class="card-img-top" alt="...">
                            <div class="card-body" style="width: 16rem;">
                                <h5 class="card-title">Pachinko</h5>
                                 <p class="card-text">Rp. 86.000</p>
                                  <a href="#" class="btn btn-primary">Add to chart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                    <div class="card">
                         <img src="<?= base_url() ?>/images/5.jpg" class="card-img-top" alt="...">
                            <div class="card-body" style="width: 16rem;">
                                <h5 class="card-title">The Good Son</h5>
                                 <p class="card-text">Rp. 78.000</p>
                                  <a href="#" class="btn btn-primary">Add to chart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                    <div class="card">
                         <img src="<?= base_url() ?>/images/6.jpg" class="card-img-top" alt="...">
                            <div class="card-body" style="width: 16rem;">
                                <h5 class="card-title">Please Love After Mom</h5>
                                 <p class="card-text">Rp. 99.000</p>
                                  <a href="#" class="btn btn-primary">Add to chart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="p-5 bg-danger-subtle mt-5">
        &copy; 2024. Kelas A Pem Web 2. All rights reserved.
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>