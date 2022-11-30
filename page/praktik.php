<!-- Kerjasama -->
<section id="kerjasama">
        <div class="container">
            <div class="row text-center mb-4">
                <div class="col">
                    <h2 class="title-h2">PROGRAM PRAKTIK LAPANG</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <?php
                // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim
                $query = "SELECT * FROM praktik ORDER BY id ASC";
                $result = mysqli_query($koneksi2, $query);
                //mengecek apakah ada error ketika menjalankan query
                if (!$result) {
                    die("Query Error: " . mysqli_errno($koneksi2) .
                        " - " . mysqli_error($koneksi2));
                }

                //buat perulangan untuk element tabel dari data mahasiswa
                $no = 1; //variabel untuk membuat nomor urut
                // hasil query akan disimpan dalam variabel $data dalam bentuk array
                // kemudian dicetak dengan perulangan while
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="image/<?php echo $row['gambar']; ?>" class="card-img-top border" alt="" />
                        <div class="card-body">
                        <h5 class="card- fw-bolder"><?php echo $row['judul']; ?></h5>
                                <p class="card-text"><?php echo substr($row['penjelasan'], 0, 170); ?>...</p>
                                <a href="praktik.php?page=detail-praktik&id=<?php echo $row['id']; ?>" class="btn btn-primary btn-more">Baca</a>
                        </div>
                    </div>
                </div>
                <?php
                    $no++; //untuk nomor urut terus bertambah 1
                }
                ?>


                
            </div>
        </div>
    </section>
    <!-- end Kerjasama -->