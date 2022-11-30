

<div class="container">
    <div class="card mt-3">
        <div class="card-header">
            Data Dosen
        </div>
        <div class="card-body">
            <a  class="btn btn-md btn-dark" href="admin.php?page=tambah5" role="button">
                Tambah
            </a>
            <div class="table-responsive mt-3">
            <table class="table table-striped" id="mytable">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama Dosen</th>
          <th>Jabatan</th>
          <td></td>
        </tr>
    </thead>
    <tbody>
      <?php
      // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim
      $query = "SELECT * FROM struktural ORDER BY id ASC";
      $result = mysqli_query($koneksi2, $query);
      //mengecek apakah ada error ketika menjalankan query
      if(!$result){
        die ("Query Error: ".mysqli_errno($koneksi2).
           " - ".mysqli_error($koneksi2));
      }

      //buat perulangan untuk element tabel dari data mahasiswa
      $no = 1; //variabel untuk membuat nomor urut
      // hasil query akan disimpan dalam variabel $data dalam bentuk array
      // kemudian dicetak dengan perulangan while
      while($row = mysqli_fetch_assoc($result))
      {
      ?>
       <tr>
          <td><?php echo $no; ?></td>
          <td><?php echo $row['nama']; ?></td>
          <td><?php echo $row['jabatan']; ?></td>
          <td>
              <a class="btn btn-success btn-sm" href="admin.php?page=edit5&id=<?php echo $row['id']; ?>">Edit</a>  
              <a class="btn btn-danger btn-sm" href="proses.php?aksi=hapus4&id=<?php echo $row['id']; ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a>
          </td>
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