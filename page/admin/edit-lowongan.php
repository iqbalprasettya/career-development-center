<?php
// memanggil file koneksi.php untuk membuat koneksi
include 'koneksi.php';
// mengecek apakah di url ada nilai GET id
if (isset($_GET['id'])) {
    // ambil nilai id dari url dan disimpan dalam variabel $id
    $id = ($_GET["id"]);

    // menampilkan data dari database yang mempunyai id=$id
    $query = "SELECT * FROM lowongan WHERE id='$id'";
    $result = mysqli_query($koneksi2, $query);
    // jika data gagal diambil maka akan tampil error berikut
    if (!$result) {
        die("Query Error: " . mysqli_errno($koneksi2) .
            " - " . mysqli_error($koneksi2));
    }
    // mengambil data dari database
    $data = mysqli_fetch_assoc($result);
    // apabila data tidak ada pada database maka akan dijalankan perintah ini
    if (!count($data)) {
        echo "<script>alert('Data tidak ditemukan pada database');window.location='admin.php?page=lowongan';</script>";
    }
} else {
    // apabila tidak ada data GET id pada akan di redirect ke index.php
    echo "<script>alert('Masukkan data id.');window.location='admin.php?page=lowongan';</script>";
}

?>
<div class="container">
    <div class="card mt-5">
        <div class="card-header">
            Edit Data
        </div>
        <div class="card-body">
            <form method="POST" action="proses.php?aksi=edit" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-sm-6">
                        <input name="id" value="<?php echo $data['id']; ?>" hidden />
                        <div class="form-group mb-2">
                            <label>Nama Pekerjaan</label>
                            <input class="form-control" type="text" name="nama" value="<?php echo $data['nama']; ?>" autofocus="" required="" />
                        </div>
                        <div class="form-group mb-2">
                            <label>Nama Perusahaan</label>
                            <input class="form-control" type="text" name="perusahaan" value="<?php echo $data['perusahaan']; ?>" autofocus="" required="" />
                        </div>

                        <div class="form-group mb-2">
                            <label>Deskripsi</label>
                            <textarea class="form-control" id="editor1" name="deskripsi" rows="5"><?php echo $data['deskripsi']; ?></textarea>
                            
                        </div>
                        <div class="form-group mb-2">
                            <label>Tanggung Jawab</label>
                            <textarea class="form-control" id="editor2" name="tanggung_jawab" rows="5"><?php echo $data['tanggung_jawab']; ?></textarea>
                           
                        </div>
                        <div class="form-group mb-2">
                            <label>Lokasi </label>
                            <input class="form-control" type="text" name="lokasi" value="<?php echo $data['lokasi']; ?>" required="" rows="3" />
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="form-group mb-2 col-sm-5">
                                <label>Pendidikan</label>
                                <input class="form-control" type="text" name="pendidikan" value="<?php echo $data['pendidikan']; ?>" autofocus="" required="" />
                            </div>
                            <div class="form-group mb-2 col-sm-5">
                                <label>Pengalaman</label>
                                <select class="form-select" name="pengalaman" id="autoSizingSelect">
                                    <option value="<?php echo $data['pengalaman']; ?>" selected><?php echo $data['pengalaman']; ?></option>
                                    <option value="">-</option>
                                    <option value="1 Tahun">1 Tahun</option>
                                    <option value="2 Tahun">2 Tahun</option>
                                    <option value="3 Tahun">3 Tahun</option>
                                    <option value="4 Tahun">4 tahun</option>
                                </select>
                            </div>
                            <div class="form-group mb-2 col-sm-5">
                                <label>Jenis Kelamin</label>
                                <select class="form-select" name="kelamin" id="autoSizingSelect">
                                    <option value="<?php echo $data['kelamin']; ?>" selected><?php echo $data['kelamin']; ?></option>
                                    <option value="">-</option>
                                    <option value="Pria">Pria</option>
                                    <option value="Wanita">Wanita</option>
                                    <option value="Semua Jenis Kelamin">Semua Jenis Kelamin</option>
                                </select>
                            </div>
                            <div class="form-group mb-2 col-sm-5">
                                <label>Tipe Pekerjaan</label>
                                <select class="form-select" name="tipe" id="autoSizingSelect">
                                    <option value="<?php echo $data['tipe']; ?>" selected><?php echo $data['tipe']; ?></option>
                                    <option value="">-</option>
                                    <option value="Magang">Magang</option>
                                    <option value="Full-Time">Full-Time</option>
                                    <option value="Part-Time">Part-Time</option>
                                    <option value="Freelance">Freelance</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group mb-2">
                            <label>Kualifikasi</label>
                            <textarea class="form-control" id="editor2" name="kualifikasi" rows="5"><?php echo $data['kualifikasi']; ?></textarea>
                           
                        </div>
                        <div class="form-group mb-2">
                            <label>Tentang Perusahaan</label>
                            <textarea class="form-control" id="editor1" name="tentang" rows="5"><?php echo $data['tentang']; ?></textarea>
                        </div>
                        <div class="form-group mb-2">
                            <label>Link Informasi Lebih Lanjut</label>
                            <input class="form-control" type="text" name="link" value="<?php echo $data['link']; ?>" autofocus="" required="" />

                        </div>


                        <div class="form-group mb-3">
                            <label>Logo Perusahaan</label>
                            <br>
                            <img class="mb-2" style="width: 30%;" src="image/<?php echo $data['logo']; ?>">
                            <br>
                            <input type="file" name="logo" />
                        </div>


                        <button type="submit" class="btn btn-md btn-block btn-dark">
                            Simpan
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>