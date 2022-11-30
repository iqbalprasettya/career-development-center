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
        <a class="btn btn-md btn-dark" href="admin.php?page=organisasi-admin" role="button">Kembali</a>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            Tambah Struktur Organisasi
        </div>
        <div class="card-body">
            <form method="POST" action="proses.php?aksi=tambah4" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group mb-2">
                        <div class="form-group mb-3">
                            <label class="mb-2">Gambar Struktur Organisasi</label>
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