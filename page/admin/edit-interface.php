<?php
// memanggil file koneksi.php untuk membuat koneksi
include 'koneksi.php';
// mengecek apakah di url ada nilai GET id
if (isset($_GET['id'])) {
    // ambil nilai id dari url dan disimpan dalam variabel $id
    $id = ($_GET["id"]);

    // menampilkan data dari database yang mempunyai id=$id
    $query = "SELECT * FROM interface WHERE id='$id'";
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
        echo "<script>alert('Data tidak ditemukan pada database');window.location='admin.php?page=jumbotron-admin';</script>";
    }
} else {
    // apabila tidak ada data GET id pada akan di redirect ke index.php
    echo "<script>alert('Masukkan data id.');window.location='admin.php?page=jumbotron-admin';</script>";
}

?>

<div class="container">
    <div class="card mt-5">
        <div class="card-header">
            Edit Data
        </div>
        <div class="card-body">
            <form method="POST" action="proses.php?aksi=edit-interface" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-sm-6">
                        <input name="id" value="<?php echo $data['id']; ?>" hidden />
                        <div class="form-group mb-3">
                            <label>Gambar</label>
                            <br>
                            <img class="mb-2" style="width: 70%;" src="image/<?php echo $data['jumbotron']; ?>">
                            <br>
                            <input type="file" name="jumbotron" />
                        </div>
                        <div class="form-group mb-2">
                            <label>Alamat</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" name="address" rows="5"><?php echo $data['address']; ?></textarea>

                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group mb-3">
                            <label>Nomor Kontak 1</label>
                            <input class="form-control" type="text" name="number_contact1" value="<?php echo $data['number_contact1']; ?>" autofocus="" />
                        </div>
                        <div class="form-group mb-3">
                            <label>Nomor Kontak 2</label>
                            <input class="form-control" type="text" name="number_contact2" value="<?php echo $data['number_contact2']; ?>" autofocus="" />
                        </div>
                        <div class="form-group mb-3">
                            <label>Mail Kontak</label>
                            <input class="form-control" type="text" name="mail_contact" value="<?php echo $data['mail_contact']; ?>" autofocus="" />
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