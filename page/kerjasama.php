<!-- Kerjasama -->
<section id="kerjasama">
    <div class="container">
        <div class="row text-center mb-4">
            <div class="col">
                <h2 class="title-h2">KERJASAMA</h2>
            </div>
        </div>

        <div class="card mt-3">
            <div class="card-header table-dark bg-dark">
                Tambah Data
            </div>
            <div class="card-body border border-secondary mb-5">
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
</section>
<!-- end Kerjasama -->