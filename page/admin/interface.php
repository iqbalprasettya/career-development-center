<div class="container">
  <div class="card mt-3">
    <div class="card-header">
      Data Interface
    </div>
    <div class="card-body">
      <!-- <a class="btn btn-md btn-dark" href="admin.php?page=tambah-interface" role="button">
        Tambah
      </a> -->
      <div class="table-responsive mt-3">
        <table class="table table-striped" id="mytable">
          <thead>
            <tr>
              <th></th>
              <th>No</th>
              <th>Gambar Jumbotron</th>
              <th>Nomor Kontak 1</th>
              <th>Nomor Kontak 2</th>
              <th>Mail Kontak</th>
              <th>Alamat</th>

            </tr>
          </thead>
          <tbody>
            <?php
            // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim
            $query = "SELECT * FROM interface ORDER BY id ASC";
            $result = mysqli_query($koneksi2, $query);
            //mengecek apakah ada error ketika menjalankan query
            if (!$result) {
              die("Query Error: " . mysqli_errno($koneksi2) .
                " - " . mysqli_error($koneksi2));
            }
            $no = 1;
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
              <tr>
                <td>
                  <a class="btn btn-success btn-sm" href="admin.php?page=edit-interface&id=<?php echo $row['id']; ?>">Edit</a>
                </td>
                <td><?php echo $no; ?></td>
                <td style="text-align: center;"><img src="image/<?php echo $row['jumbotron']; ?>" style="width: 300px;"></td>
                <td><?php echo $row['number_contact1']; ?></td>
                <td><?php echo $row['number_contact2']; ?></td>
                <td><?php echo $row['mail_contact']; ?></td>
                <td><?php echo $row['address']; ?></td>
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