<div class="container">
  <div class="card mt-3">
    <div class="card-header">
      Data Lowongan
    </div>
    <div class="card-body">
      <a class="btn btn-md btn-dark" href="admin.php?page=tambah" role="button">
        Tambah
      </a>
      <div class="table-responsive mt-3">
        <table class="table table-striped" id="mytable">
          <thead>
            <tr>
              <th>Opsi</th>
              <th>No</th>
              <th>Logo</th>
              <th>Nama Pekerjaan</th>
              <th>Nama Perusahaan</th>
              <th>Deskripsi</th>
              <th>Tanggung Jawab</th>
              <th>Kualifikasi</th>
              <th>Lokasi</th>
              <th>Pendidikan</th>
              <th>Pengalaman</th>
              <th>Kelamin</th>
              <th>Tipe</th>
              <th>Tentang</th>
              <th>Link</th>
              

            </tr>
          </thead>
          <tbody>
            <?php
            // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim
            $query = "SELECT * FROM lowongan ORDER BY id ASC";
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
              <tr>
                <td>
                  <a class="btn btn-success btn-sm m-1" href="admin.php?page=edit&id=<?php echo $row['id']; ?>">Edit</a>
                  <a class="btn btn-danger btn-sm m-1" href="proses.php?aksi=hapus&id=<?php echo $row['id']; ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a>
                </td>
                <td><?php echo $no; ?></td>
                <td style="text-align: center;"><img src="image/<?php echo $row['logo']; ?>" style="width: 120px;"></td>
                <td><?php echo $row['nama']; ?></td>
                <td><?php echo $row['perusahaan']; ?></td>
                <td><?php echo $row['deskripsi']; ?></td>
                <td><?php echo $row['tanggung_jawab']; ?></td>
                <td><?php echo $row['kualifikasi']; ?></td>
                <td><?php echo $row['lokasi']; ?></td>
                <td><?php echo $row['pendidikan']; ?></td>
                <td><?php echo $row['pengalaman']; ?></td>
                <td><?php echo $row['kelamin']; ?></td>
                <td><?php echo $row['tipe']; ?></td>
                <td><?php echo substr($row['tentang'], 0, 100); ?>...</td>
                <td><?php echo substr($row['link'], 0, 30); ?>...</td>
                

              </tr>

            <?php
              $no++; //untuk nomor urut terus bertambah 1
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>