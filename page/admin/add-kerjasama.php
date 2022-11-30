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
        <a class="btn btn-md btn-dark" href="admin.php?page=kerjasama-admin" role="button">Kembali</a>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            Tambah Data
        </div>
        <div class="card-body">
            <form method="POST" action="proses.php?aksi=tambah2" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group mb-2">
                            <label>Nama Perusahaan</label>
                            <input class="form-control" type="text" name="nama_perusahaan" autofocus="" required="" />
                        </div>
                        <div class="form-group mb-2">
                            <label>Tujuan Kerjasama</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" name="tujuan_kerjasama" rows="5"></textarea>
                        </div>

                    </div>
                    <div class="col-sm-6">
                        <div class="form-group mb-2">
                            <label>Waktu kerjasama</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" name="waktu_kerjasama" rows="2"></textarea>

                        </div>
                        <div class="form-group mb-3">
                            <label>Portofolio Perusahaan</label>
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