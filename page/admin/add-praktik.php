<?php
// session start
if (!empty($_SESSION)) {
} else {
    session_start();
}
require 'koneksi.php';
if (!empty($_SESSION['ADMIN'])) {
} else {
    echo '<script>alert("Maaf Login Dahulu !");window.location="login.php"</script>';
}


?>



<div class="container">
    <div class=" mt-2">
        <a class="btn btn-md btn-dark" href="admin.php?page=praktik-admin" role="button">Kembali</a>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            Tambah Data
        </div>
        <div class="card-body">
            <form method="POST" action="proses.php?aksi=tambah3" enctype="multipart/form-data">
                <div class="row">
                    <p class="text-danger fst-italic">forbidden to use ( ' )</p>
                    <div class="col-sm-6">
                        <div class="form-group mb-2">
                            <label>Judul</label>
                            <input class="form-control" type="text" name="judul" autofocus="" required="" />
                        </div>
                        <div class="form-group mb-2">
                            <label>Deskripsi</label>
                            <textarea class="form-control" id="editor3" name="deskripsi"></textarea>

                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group mb-2">
                            <label>Penjelasan Singkat</label>
                            <textarea class="form-control" id="editor1" name="penjelasan"></textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label>Gambar</label>
                            <br>
                            <input type="file" name="gambar" required="" />
                        </div>

                        <button type="submit" class="btn btn-md btn-block btn-dark">
                            Tambah
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>