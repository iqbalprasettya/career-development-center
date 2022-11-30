<?php
session_start();
require 'koneksi.php';

// proses login
if (!empty($_GET['aksi'] == 'login')) {
  // validasi text untuk filter karakter khusus dengan fungsi strip_tags()
  $user = $_POST['user'];
  $pass = $_POST['pass'];
  $sql = "SELECT * FROM user WHERE username = ? AND password = md5(?)";
  $row = $koneksi->prepare($sql);
  $row->execute(array($user, $pass));
  $count = $row->rowCount();

  if ($count > 0) {
    $result = $row->fetch();
    $_SESSION['ADMIN'] = $result;
    // status yang diberikan 
    echo "<script>window.location='admin.php';</script>";
  } else {
    echo "<script>window.location='login.php?get=failed';</script>";
  }
}

if (!empty($_GET['aksi'] == 'logout')) {
  session_destroy();
  echo "<script>window.location='login.php?signout=success';</script>";
}

// TAMBAH LOWONGAN
if (!empty($_GET['aksi'] == "tambah")) {
  $nama   = $_POST['nama'];
  $perusahaan     = $_POST['perusahaan'];
  $deskripsi     = $_POST['deskripsi'];
  $tanggung_jawab     = $_POST['tanggung_jawab'];
  $kualifikasi     = $_POST['kualifikasi'];
  $lokasi     = $_POST['lokasi'];
  $pendidikan     = $_POST['pendidikan'];
  $kelamin     = $_POST['kelamin'];
  $pengalaman     = $_POST['pengalaman'];
  $tipe     = $_POST['tipe'];
  $tentang     = $_POST['tentang'];
  $link     = $_POST['link'];
  $logo = $_FILES['logo']['name'];


  //cek dulu jika ada gambar produk jalankan coding ini
  if ($logo != "") {
    $ekstensi_diperbolehkan = array('png', 'jpg', 'webp'); //ekstensi file gambar yang bisa diupload 
    $x = explode('.', $logo); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['logo']['tmp_name'];
    $angka_acak     = rand(1, 999);
    $nama_logo_baru = $angka_acak . '-' . $logo; //menggabungkan angka acak dengan nama file sebenarnya
    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
      move_uploaded_file($file_tmp, 'image/' . $nama_logo_baru); //memindah file gambar ke folder gambar
      // jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
      $query = "INSERT INTO lowongan (nama, perusahaan, deskripsi, tanggung_jawab, kualifikasi, lokasi, pendidikan, kelamin, pengalaman, tipe, tentang, link, logo) VALUES ('$nama', '$perusahaan', '$deskripsi', '$tanggung_jawab', '$kualifikasi', '$lokasi', '$pendidikan', '$kelamin', '$pengalaman', '$tipe', '$tentang', '$link', '$nama_logo_baru')";
      $result = mysqli_query($koneksi2, $query);
      // periska query apakah ada error
      if (!$result) {
        die("Query gagal dijalankan: " . mysqli_errno($koneksi2) .
          " - " . mysqli_error($koneksi2));
      } else {
        //tampil alert dan akan redirect ke halaman index.php
        //silahkan ganti index.php sesuai halaman yang akan dituju
        echo "<script>window.location='admin.php?page=lowongan-admin';</script>";
      }
    } else {
      //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
      echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='admin.php?page=lowongan-admin';</script>";
    }
  } else {
    $query = "INSERT INTO lowongan (nama, perusahaan, deskripsi, tanggung_jawab, kualifikasi, lokasi, pendidikan, pengalaman, tipe, tentang, link, logo) VALUES ('$nama', '$perusahaan', '$deskripsi', '$tanggung_jawab', '$kualifikasi', '$lokasi', '$pendidikan', '$kelamin', '$pengalaman', '$tipe', '$tentang', '$link', null)";
    $result = mysqli_query($koneksi2, $query);
    // periska query apakah ada error
    if (!$result) {
      die("Query gagal dijalankan: " . mysqli_errno($koneksi2) .
        " - " . mysqli_error($koneksi2));
    } else {
      //tampil alert dan akan redirect ke halaman index.php
      //silahkan ganti index.php sesuai halaman yang akan dituju
      echo "<script>window.location='admin.php?page=lowongan-admin';</script>";
    }
  }
}
//  END TAMBAH LOWONGAN

// TAMBAH Kerjasama
if (!empty($_GET['aksi'] == "tambah2")) {
  $nama_perusahaan   = $_POST['nama_perusahaan'];
  $tujuan_kerjasama     = $_POST['tujuan_kerjasama'];
  $waktu_kerjasama     = $_POST['waktu_kerjasama'];
  $gambar = $_FILES['gambar']['name'];


  //cek dulu jika ada gambar produk jalankan coding ini
  if ($gambar != "") {
    $ekstensi_diperbolehkan = array('png', 'jpg', 'webp'); //ekstensi file gambar yang bisa diupload 
    $x = explode('.', $gambar); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['gambar']['tmp_name'];
    $angka_acak     = rand(1, 99);
    $nama_gambar_baru = $angka_acak . '-' . $gambar; //menggabungkan angka acak dengan nama file sebenarnya
    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
      move_uploaded_file($file_tmp, 'image/' . $nama_gambar_baru); //memindah file gambar ke folder gambar
      // jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
      $query = "INSERT INTO kerjasama (nama_perusahaan, tujuan_kerjasama, waktu_kerjasama, gambar) VALUES ('$nama_perusahaan', '$tujuan_kerjasama', '$waktu_kerjasama', '$nama_gambar_baru')";
      $result = mysqli_query($koneksi2, $query);
      // periska query apakah ada error
      if (!$result) {
        die("Query gagal dijalankan: " . mysqli_errno($koneksi2) .
          " - " . mysqli_error($koneksi2));
      } else {
        //tampil alert dan akan redirect ke halaman index.php
        //silahkan ganti index.php sesuai halaman yang akan dituju
        echo "<script>alert('Data Berhasil Di Tambahkan');window.location='kerjasama.php?page=add';</script>";
      }
    } else {
      //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
      echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='kerjasama.php?page=add';</script>";
    }
  } else {
    $query = "INSERT INTO lowongan (judul, penjelasan, deskripsi, tentang, gambar) VALUES ('$judul', '$penjelasan', '$deskripsi', '$tentang', NULL)";
    $result = mysqli_query($koneksi2, $query);
    // periska query apakah ada error
    if (!$result) {
      die("Query gagal dijalankan: " . mysqli_errno($koneksi2) .
        " - " . mysqli_error($koneksi2));
    } else {
      //tampil alert dan akan redirect ke halaman index.php
      //silahkan ganti index.php sesuai halaman yang akan dituju
      echo "<script>window.location='admin.php?page=kerjasama-admin';</script>";
    }
  }
}
//  END TAMBAH Kerjasama

// TAMBAH Praktik lapang
if (!empty($_GET['aksi'] == "tambah3")) {
  $judul   = $_POST['judul'];
  $penjelasan     = $_POST['penjelasan'];
  $deskripsi     = $_POST['deskripsi'];
  $gambar = $_FILES['gambar']['name'];


  //cek dulu jika ada gambar produk jalankan coding ini
  if ($gambar != "") {
    $ekstensi_diperbolehkan = array('png', 'jpg', 'webp'); //ekstensi file gambar yang bisa diupload 
    $x = explode('.', $gambar); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['gambar']['tmp_name'];
    $angka_acak     = rand(1, 99);
    $nama_gambar_baru = $angka_acak . '-' . $gambar; //menggabungkan angka acak dengan nama file sebenarnya
    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
      move_uploaded_file($file_tmp, 'image/' . $nama_gambar_baru); //memindah file gambar ke folder gambar
      // jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
      $query = "INSERT INTO praktik (judul, penjelasan, deskripsi, gambar) VALUES ('$judul', '$penjelasan', '$deskripsi', '$nama_gambar_baru')";
      $result = mysqli_query($koneksi2, $query);
      // periska query apakah ada error
      if (!$result) {
        die("Query gagal dijalankan: " . mysqli_errno($koneksi2) .
          " - " . mysqli_error($koneksi2));
      } else {
        //tampil alert dan akan redirect ke halaman index.php
        //silahkan ganti index.php sesuai halaman yang akan dituju
        echo "<script>window.location='admin.php?page=praktik-admin';</script>";
      }
    } else {
      //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
      echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='admin.php?page=praktik-admin';</script>";
    }
  } else {
    $query = "INSERT INTO praktik (judul, penjelasan, deskripsi, gambar) VALUES ('$judul', '$penjelasan', '$deskripsi', NULL)";
    $result = mysqli_query($koneksi2, $query);
    // periska query apakah ada error
    if (!$result) {
      die("Query gagal dijalankan: " . mysqli_errno($koneksi2) .
        " - " . mysqli_error($koneksi2));
    } else {
      //tampil alert dan akan redirect ke halaman index.php
      //silahkan ganti index.php sesuai halaman yang akan dituju
      echo "<script>window.location='admin.php?page=praktik-admin';</script>";
    }
  }
}
//  END TAMBAH Praktik Lapang




// TAMBAH Gambar Organisasi
if (!empty($_GET['aksi'] == "tambah4")) {
  $gambar = $_FILES['gambar']['name'];


  //cek dulu jika ada gambar produk jalankan coding ini
  if ($gambar != "") {
    $ekstensi_diperbolehkan = array('png', 'jpg', 'webp'); //ekstensi file gambar yang bisa diupload 
    $x = explode('.', $gambar); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['gambar']['tmp_name'];
    $angka_acak     = rand(1, 99);
    $nama_gambar_baru = $angka_acak . '-' . $gambar; //menggabungkan angka acak dengan nama file sebenarnya
    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
      move_uploaded_file($file_tmp, 'image/' . $nama_gambar_baru); //memindah file gambar ke folder gambar
      // jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
      $query = "INSERT INTO organisasi (gambar) VALUES ('$nama_gambar_baru')";
      $result = mysqli_query($koneksi2, $query);
      // periska query apakah ada error
      if (!$result) {
        die("Query gagal dijalankan: " . mysqli_errno($koneksi2) .
          " - " . mysqli_error($koneksi2));
      } else {
        //tampil alert dan akan redirect ke halaman index.php
        //silahkan ganti index.php sesuai halaman yang akan dituju
        echo "<script>window.location='admin.php?page=organisasi-admin';</script>";
      }
    } else {
      //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
      echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='admin.php?page=organisasi-admin';</script>";
    }
  } else {
    $query = "INSERT INTO organisasi (gambar) VALUES (NULL)";
    $result = mysqli_query($koneksi2, $query);
    // periska query apakah ada error
    if (!$result) {
      die("Query gagal dijalankan: " . mysqli_errno($koneksi2) .
        " - " . mysqli_error($koneksi2));
    } else {
      //tampil alert dan akan redirect ke halaman index.php
      //silahkan ganti index.php sesuai halaman yang akan dituju
      echo "<script>window.location='admin.php?page=organisasi-admin';</script>";
    }
  }
}
//  END TAMBAH Gambar Organisasi

// TAMBAH Dosen
if (!empty($_GET['aksi'] == "tambah5")) {
  $nama   = $_POST['nama'];
  $jabatan     = $_POST['jabatan'];


  $query = "INSERT INTO struktural (nama, jabatan) VALUES ('$nama', '$jabatan')";
  $result = mysqli_query($koneksi2, $query);
  // periska query apakah ada error
  if (!$result) {
    die("Query gagal dijalankan: " . mysqli_errno($koneksi2) .
      " - " . mysqli_error($koneksi2));
  } else {
    //tampil alert dan akan redirect ke halaman index.php
    //silahkan ganti index.php sesuai halaman yang akan dituju
    echo "<script>window.location='admin.php?page=struktural-admin';</script>";
  }
}
//  END TAMBAH Dosen


// EDIT LOWONGAN
if (!empty($_GET['aksi'] == "edit")) {
  $id = $_POST['id'];
  $nama   = $_POST['nama'];
  $perusahaan     = $_POST['perusahaan'];
  $deskripsi     = $_POST['deskripsi'];
  $tanggung_jawab     = $_POST['tanggung_jawab'];
  $kualifikasi     = $_POST['kualifikasi'];
  $lokasi     = $_POST['lokasi'];
  $pendidikan     = $_POST['pendidikan'];
  $pengalaman     = $_POST['pengalaman'];
  $kelamin     = $_POST['kelamin'];
  $tipe     = $_POST['tipe'];
  $tentang     = $_POST['tentang'];
  $link     = $_POST['link'];
  $logo = $_FILES['logo']['name'];



  //cek dulu jika merubah gambar produk jalankan coding ini
  if ($logo != "") {
    $ekstensi_diperbolehkan = array('png', 'jpg', 'webp'); //ekstensi file gambar yang bisa diupload 
    $x = explode('.', $logo); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['logo']['tmp_name'];
    $angka_acak     = rand(1, 999);
    $nama_logo_baru = $angka_acak . '-' . $logo; //menggabungkan angka acak dengan nama file sebenarnya
    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
      move_uploaded_file($file_tmp, 'image/' . $nama_logo_baru); //memindah file gambar ke folder gambar

      // jalankan query UPDATE berdasarkan ID yang produknya kita edit
      $query  = "UPDATE lowongan SET nama = '$nama', perusahaan = '$perusahaan', deskripsi = '$deskripsi', tanggung_jawab ='$tanggung_jawab', kualifikasi = '$kualifikasi', lokasi = '$lokasi', pendidikan = '$pendidikan', pengalaman = '$pengalaman', kelamin = '$kelamin', tipe = '$tipe', tentang = '$tentang', link = '$link', logo = '$nama_logo_baru'";
      $query .= "WHERE id = '$id'";
      $result = mysqli_query($koneksi2, $query);
      // periska query apakah ada error
      if (!$result) {
        die("Query gagal dijalankan: " . mysqli_errno($koneksi2) .
          " - " . mysqli_error($koneksi2));
      } else {
        //tampil alert dan akan redirect ke halaman index.php
        //silahkan ganti index.php sesuai halaman yang akan dituju
        echo "<script>window.location='admin.php?page=lowongan-admin';</script>";
      }
    } else {
      //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
      echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='admin,php?page=lowongan-admin';</script>";
    }
  } else {
    // jalankan query UPDATE berdasarkan ID yang produknya kita edit
    $query  = "UPDATE lowongan SET nama = '$nama', perusahaan = '$perusahaan', deskripsi = '$deskripsi', tanggung_jawab ='$tanggung_jawab', kualifikasi = '$kualifikasi', lokasi = '$lokasi', pendidikan = '$pendidikan', pengalaman = '$pengalaman', kelamin = '$kelamin', tipe = '$tipe', tentang = '$tentang', link = '$link'";
    $query .= "WHERE id = '$id'";
    $result = mysqli_query($koneksi2, $query);
    // periska query apakah ada error
    if (!$result) {
      die("Query gagal dijalankan: " . mysqli_errno($koneksi2) .
        " - " . mysqli_error($koneksi2));
    } else {
      //tampil alert dan akan redirect ke halaman index.php
      //silahkan ganti index.php sesuai halaman yang akan dituju
      echo "<script>window.location='admin.php?page=lowongan-admin';</script>";
    }
  }
}
// END EDIT LOWONGAN


// EDIT Kerjasama
if (!empty($_GET['aksi'] == "edit2")) {
  $id = $_POST['id'];
  $judul   = $_POST['judul'];
  $penjelasan     = $_POST['penjelasan'];
  $deskripsi     = $_POST['deskripsi'];
  $gambar = $_FILES['gambar']['name'];



  //cek dulu jika merubah gambar produk jalankan coding ini
  if ($gambar != "") {
    $ekstensi_diperbolehkan = array('png', 'jpg', 'webp'); //ekstensi file gambar yang bisa diupload 
    $x = explode('.', $gambar); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['gambar']['tmp_name'];
    $angka_acak     = rand(1, 99);
    $nama_gambar_baru = $angka_acak . '-' . $gambar; //menggabungkan angka acak dengan nama file sebenarnya
    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
      move_uploaded_file($file_tmp, 'image/' . $nama_gambar_baru); //memindah file gambar ke folder gambar

      // jalankan query UPDATE berdasarkan ID yang produknya kita edit
      $query  = "UPDATE kerjasama SET judul = '$judul', penjelasan = '$penjelasan', deskripsi = '$deskripsi', gambar = '$nama_gambar_baru'";
      $query .= "WHERE id = '$id'";
      $result = mysqli_query($koneksi2, $query);
      // periska query apakah ada error
      if (!$result) {
        die("Query gagal dijalankan: " . mysqli_errno($koneksi2) .
          " - " . mysqli_error($koneksi2));
      } else {
        //tampil alert dan akan redirect ke halaman index.php
        //silahkan ganti index.php sesuai halaman yang akan dituju
        echo "<script>window.location='admin.php?page=kerjasama-admin';</script>";
      }
    } else {
      //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
      echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='admin.php?page=kerjasama-admin';</script>";
    }
  } else {
    // jalankan query UPDATE berdasarkan ID yang produknya kita edit
    $query  = "UPDATE kerjasama SET judul = '$judul', penjelasan = '$penjelasan', deskripsi = '$deskripsi'";
    $query .= "WHERE id = '$id'";
    $result = mysqli_query($koneksi2, $query);
    // periska query apakah ada error
    if (!$result) {
      die("Query gagal dijalankan: " . mysqli_errno($koneksi2) .
        " - " . mysqli_error($koneksi2));
    } else {
      //tampil alert dan akan redirect ke halaman index.php
      //silahkan ganti index.php sesuai halaman yang akan dituju
      echo "<script>window.location='admin.php?page=kerjasama-admin';</script>";
    }
  }
}
// END EDIT Kerjasama

// EDIT Praktik Lapang
if (!empty($_GET['aksi'] == "edit3")) {
  $id = $_POST['id'];
  $judul   = $_POST['judul'];
  $penjelasan     = $_POST['penjelasan'];
  $deskripsi     = $_POST['deskripsi'];
  $gambar = $_FILES['gambar']['name'];



  //cek dulu jika merubah gambar produk jalankan coding ini
  if ($gambar != "") {
    $ekstensi_diperbolehkan = array('png', 'jpg', 'webp'); //ekstensi file gambar yang bisa diupload 
    $x = explode('.', $gambar); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['gambar']['tmp_name'];
    $angka_acak     = rand(1, 99);
    $nama_gambar_baru = $angka_acak . '-' . $gambar; //menggabungkan angka acak dengan nama file sebenarnya
    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
      move_uploaded_file($file_tmp, 'image/' . $nama_gambar_baru); //memindah file gambar ke folder gambar

      // jalankan query UPDATE berdasarkan ID yang produknya kita edit
      $query  = "UPDATE praktik SET judul = '$judul', penjelasan = '$penjelasan', deskripsi = '$deskripsi', gambar = '$nama_gambar_baru'";
      $query .= "WHERE id = '$id'";
      $result = mysqli_query($koneksi2, $query);
      // periska query apakah ada error
      if (!$result) {
        die("Query gagal dijalankan: " . mysqli_errno($koneksi2) .
          " - " . mysqli_error($koneksi2));
      } else {
        //tampil alert dan akan redirect ke halaman index.php
        //silahkan ganti index.php sesuai halaman yang akan dituju
        echo "<script>window.location='admin.php?page=praktik-admin';</script>";
      }
    } else {
      //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
      echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='admin.php?page=praktik-admin';</script>";
    }
  } else {
    // jalankan query UPDATE berdasarkan ID yang produknya kita edit
    $query  = "UPDATE praktik SET judul = '$judul', penjelasan = '$penjelasan', deskripsi = '$deskripsi'";
    $query .= "WHERE id = '$id'";
    $result = mysqli_query($koneksi2, $query);
    // periska query apakah ada error
    if (!$result) {
      die("Query gagal dijalankan: " . mysqli_errno($koneksi2) .
        " - " . mysqli_error($koneksi2));
    } else {
      //tampil alert dan akan redirect ke halaman index.php
      //silahkan ganti index.php sesuai halaman yang akan dituju
      echo "<script>window.location='admin.php?page=praktik-admin';</script>";
    }
  }
}
// END EDIT Praktik lapang

// EDIT Interface
if (!empty($_GET['aksi'] == "edit-interface")) {
  $id = $_POST['id'];
  $number_contact1   = $_POST['number_contact1'];
  $number_contact2   = $_POST['number_contact2'];
  $mail_contact     = $_POST['mail_contact'];
  $address  = $_POST['address'];
  $jumbotron = $_FILES['jumbotron']['name'];



  //cek dulu jika merubah gambar produk jalankan coding ini
  if ($jumbotron != "") {
    $ekstensi_diperbolehkan = array('png', 'jpg', 'webp'); //ekstensi file gambar yang bisa diupload 
    $x = explode('.', $jumbotron); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['jumbotron']['tmp_name'];
    $angka_acak     = rand(1, 999);
    $nama_jumbotron_baru = $angka_acak . '-' . $jumbotron; //menggabungkan angka acak dengan nama file sebenarnya
    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
      move_uploaded_file($file_tmp, 'image/' . $nama_jumbotron_baru); //memindah file gambar ke folder gambar

      // jalankan query UPDATE berdasarkan ID yang produknya kita edit
      $query  = "UPDATE interface SET number_contact1 = '$number_contact1', number_contact2 = '$number_contact2', mail_contact = '$mail_contact', address = '$address', jumbotron = '$jumbotron'";
      $query .= "WHERE id = '$id'";
      $result = mysqli_query($koneksi2, $query);
      // periska query apakah ada error
      if (!$result) {
        die("Query gagal dijalankan: " . mysqli_errno($koneksi2) .
          " - " . mysqli_error($koneksi2));
      } else {
        //tampil alert dan akan redirect ke halaman index.php
        //silahkan ganti index.php sesuai halaman yang akan dituju
        echo "<script>window.location='admin.php?page=interface-admin';</script>";
      }
    } else {
      //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
      echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='admin,php?page=interface-admin';</script>";
    }
  } else {
    // jalankan query UPDATE berdasarkan ID yang produknya kita edit
    $query  = "UPDATE interface SET number_contact1 = '$number_contact1', number_contact2 = '$number_contact2', mail_contact = '$mail_contact', address = '$address'";
    $query .= "WHERE id = '$id'";
    $result = mysqli_query($koneksi2, $query);
    // periska query apakah ada error
    if (!$result) {
      die("Query gagal dijalankan: " . mysqli_errno($koneksi2) .
        " - " . mysqli_error($koneksi2));
    } else {
      //tampil alert dan akan redirect ke halaman index.php
      //silahkan ganti index.php sesuai halaman yang akan dituju
      echo "<script>window.location='admin.php?page=interface-admin';</script>";
    }
  }
}
// END EDIT Interface

// EDIT Struktur Organisasi
if (!empty($_GET['aksi'] == "edit4")) {
  $id = $_POST['id'];
  $gambar = $_FILES['gambar']['name'];



  //cek dulu jika merubah gambar produk jalankan coding ini
  if ($gambar != "") {
    $ekstensi_diperbolehkan = array('png', 'jpg', 'webp'); //ekstensi file gambar yang bisa diupload 
    $x = explode('.', $gambar); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['gambar']['tmp_name'];
    $angka_acak     = rand(1, 99);
    $nama_gambar_baru = $angka_acak . '-' . $gambar; //menggabungkan angka acak dengan nama file sebenarnya
    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
      move_uploaded_file($file_tmp, 'image/' . $nama_gambar_baru); //memindah file gambar ke folder gambar

      // jalankan query UPDATE berdasarkan ID yang produknya kita edit
      $query  = "UPDATE organisasi SET gambar = '$nama_gambar_baru'";
      $query .= "WHERE id = '$id'";
      $result = mysqli_query($koneksi2, $query);
      // periska query apakah ada error
      if (!$result) {
        die("Query gagal dijalankan: " . mysqli_errno($koneksi2) .
          " - " . mysqli_error($koneksi2));
      } else {
        //tampil alert dan akan redirect ke halaman index.php
        //silahkan ganti index.php sesuai halaman yang akan dituju
        echo "<script>window.location='admin.php?page=organisasi-admin';</script>";
      }
    } else {
      //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
      echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='admin.php?page=organisasi-admin';</script>";
    }
  }
}
// END EDIT Struktur Organisasi

// EDIT Dosen
if (!empty($_GET['aksi'] == "edit5")) {
  $id = $_POST['id'];
  $nama   = $_POST['nama'];
  $jabatan     = $_POST['jabatan'];



  // jalankan query UPDATE berdasarkan ID yang produknya kita edit
  $query  = "UPDATE struktural SET nama = '$nama', jabatan = '$jabatan'";
  $query .= "WHERE id = '$id'";
  $result = mysqli_query($koneksi2, $query);
  // periska query apakah ada error
  if (!$result) {
    die("Query gagal dijalankan: " . mysqli_errno($koneksi2) .
      " - " . mysqli_error($koneksi2));
  } else {
    //tampil alert dan akan redirect ke halaman index.php
    //silahkan ganti index.php sesuai halaman yang akan dituju
    echo "<script>window.location='admin.php?page=struktural-admin';</script>";
  }
}
// EDIT Dosen






// HAPUS LOWONGAN

if (!empty($_GET['aksi'] == "hapus")) {

  $id = $_GET["id"];

  //jalankan query DELETE untuk menghapus data
  $query = "DELETE FROM lowongan WHERE id='$id' ";
  $hasil_query = mysqli_query($koneksi2, $query);

  //periksa query, apakah ada kesalahan
  if (!$hasil_query) {
    die("Gagal menghapus data: " . mysqli_errno($koneksi2) .
      " - " . mysqli_error($koneksi2));
  } else {
    echo "<script>window.location='admin.php?page=lowongan-admin';</script>";
  }
}
// END HAPUS LOWONGAN

// HAPUS KERJASAMA
if (!empty($_GET['aksi'] == "hapus2")) {

  $id = $_GET["id"];

  //jalankan query DELETE untuk menghapus data
  $query = "DELETE FROM kerjasama WHERE id='$id' ";
  $hasil_query = mysqli_query($koneksi2, $query);

  //periksa query, apakah ada kesalahan
  if (!$hasil_query) {
    die("Gagal menghapus data: " . mysqli_errno($koneksi2) .
      " - " . mysqli_error($koneksi2));
  } else {
    echo "<script>window.location='admin.php?page=kerjasama-admin';</script>";
  }
}
// END HAPUS KERJASAMA

// HAPUS PRAKTIK
if (!empty($_GET['aksi'] == "hapus3")) {

  $id = $_GET["id"];

  //jalankan query DELETE untuk menghapus data
  $query = "DELETE FROM praktik WHERE id='$id' ";
  $hasil_query = mysqli_query($koneksi2, $query);

  //periksa query, apakah ada kesalahan
  if (!$hasil_query) {
    die("Gagal menghapus data: " . mysqli_errno($koneksi2) .
      " - " . mysqli_error($koneksi2));
  } else {
    echo "<script>window.location='admin.php?page=praktik-admin';</script>";
  }
}
// END HAPUS PRAKTIK

// HAPUS Dosen

if (!empty($_GET['aksi'] == "hapus4")) {

  $id = $_GET["id"];

  //jalankan query DELETE untuk menghapus data
  $query = "DELETE FROM struktural WHERE id='$id' ";
  $hasil_query = mysqli_query($koneksi2, $query);

  //periksa query, apakah ada kesalahan
  if (!$hasil_query) {
    die("Gagal menghapus data: " . mysqli_errno($koneksi2) .
      " - " . mysqli_error($koneksi2));
  } else {
    echo "<script>window.location='admin.php?page=struktural-admin';</script>";
  }
}
// END HAPUS Dosen
