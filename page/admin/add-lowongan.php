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
        <a class="btn btn-md btn-dark" href="admin.php?page=lowongan-admin" role="button">Kembali</a>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            Tambah Data
        </div>
        <div class="card-body">
            <form method="POST" action="proses.php?aksi=tambah" enctype="multipart/form-data">
                <div class="row">
                    <p class="text-danger fst-italic">forbidden to use ( ' )</p>
                    <div class="col-sm-6">
                        <div class="form-group mb-2">
                            <label>Nama Pekerjaan</label>
                            <input class="form-control" type="text" name="nama" autofocus="" required="" />
                        </div>
                        <div class="form-group mb-2">
                            <label>Nama Perusahaan</label>
                            <input class="form-control" type="text" name="perusahaan" autofocus="" required="" />
                        </div>

                        <div class="form-group mb-2">
                            <label>Deskripsi</label>
                            <textarea class="form-control" id="editor1" name="deskripsi" rows="5"></textarea>
                            <!-- <input class="form-control" type="text" name="deskripsi" /> -->
                        </div>
                        <div class="form-group mb-2">
                            <label>Tanggung Jawab</label>
                            <textarea class="form-control" id="editor2" name="tanggung_jawab" rows="5"></textarea>

                        </div>
                        <div class="form-group mb-2">
                            <label>Lokasi </label>
                            <input class="form-control" type="text" name="lokasi" required="" rows="3" />
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="form-group mb-2 col-sm-5">
                                <label>Pendidikan</label>
                                <input class="form-control" type="text" name="pendidikan" autofocus="" required="" />
                            </div>
                            <div class="form-group mb-2 col-sm-5">
                                <label>Pengalaman</label>
                                <select class="form-select" name="pengalaman" id="autoSizingSelect">
                                    <option selected>Pilih</option>
                                    <option value="1 Tahun">1 Tahun</option>
                                    <option value="2 Tahun">2 Tahun</option>
                                    <option value="3 Tahun">3 Tahun</option>
                                    <option value="4 Tahun">4 tahun</option>
                                </select>
                            </div>
                            <div class="form-group mb-2 col-sm-5">
                                <label>Jenis Kelamin</label>
                                <select class="form-select" name="kelamin" id="autoSizingSelect">
                                    <option selected>Pilih</option>
                                    <option value="Pria">Pria</option>
                                    <option value="Wanita">Wanita</option>
                                    <option value="Semua Jenis Kelamin">Semua Jenis Kelamin</option>
                                </select>
                            </div>
                            <div class="form-group mb-2 col-sm-5">
                                <label>Tipe Pekerjaan</label>
                                <select class="form-select" name="tipe" id="autoSizingSelect">
                                    <option selected>Pilih</option>
                                    <option value="Magang">Magang</option>
                                    <option value="Full-Time">Full-Time</option>
                                    <option value="Part-Time">Part-Time</option>
                                    <option value="Freelance">Freelance</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group mb-2">
                            <label>Kualifikasi</label>
                            <textarea class="form-control" id="editor2" name="kualifikasi" rows="5"></textarea>

                        </div>
                        <div class="form-group mb-2">
                            <label>Tentang Perusahaan</label>
                            <textarea class="form-control" id="editor1" name="tentang" rows="5"></textarea>
                        </div>
                        <div class="form-group mb-2">
                            <label>Link Informasi Lebih Lanjut</label>
                            <input class="form-control" type="text" name="link" autofocus="" required="" />

                        </div>


                        <div class="form-group mb-3">
                            <label>Logo Perusahaan (1:1)</label>
                            <br>
                            <input type="file" name="logo" required="" />
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