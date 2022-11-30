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
        <a class="btn btn-md btn-dark" href="admin.php?page=jumbotron-admin" role="button">Kembali</a>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            Tambah Gambar Jumbotron
        </div>
        <div class="card-body">
            <form method="POST" action="proses.php?aksi=tambah-interface" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group mb-2">
                            <div class="form-group mb-3">
                                <label class="mb-2">Gambar Jumbotron</label>
                                <br>
                                <input type="file" name="jumbotron" required="" />
                            </div>
                            <div class="form-group mb-3">
                                <label>Nomor Kontak</label>
                                <input class="form-control" type="text" name="number_contact" autofocus="" required="" />
                            </div>
                            <div class="form-group mb-3">
                                <label>Mail Kontak</label>
                                <input class="form-control" type="text" name="mail_contact" autofocus="" required="" />
                            </div>
                            <div class="form-group mb-2">
                                <label>Alamat</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" name="address" rows="5"></textarea>
                                
                            </div>


                            <button type="submit" class="btn btn-md btn-block btn-dark">
                                Tambah
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>