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
        <a class="btn btn-md btn-dark" href="admin.php?page=struktural-admin" role="button">Kembali</a>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            Tambah Data
        </div>
        <div class="card-body">
            <form method="POST" action="proses.php?aksi=tambah5" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group mb-2">
                            <label>Nama Dosen</label>
                            <input class="form-control" type="text" name="nama" autofocus="" required="" />
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group mb-2">
                            <label>Jabatan Dosen</label>
                            <input class="form-control" type="text" name="jabatan" autofocus="" required="" />
                        </div>
                    </div>
                        <button type="submit" class="btn btn-md btn-block btn-dark mt-3">
                            Tambah
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>