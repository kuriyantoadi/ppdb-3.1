<?php
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include '../koneksi.php';

// menangkap data yang dikirim dari form
// belum mengunakan MD5
$nisn_siswa = addslashes(trim($_POST['nisn_siswa']));
// $nisn = $_POST['nisn'];
$nik = addslashes(trim($_POST['nik']));

// menyeleksi data admin dengan nisn dan nik yang sesuai
$data = mysqli_query($koneksi, "select * from f_pengumuman where nisn_siswa='$nisn_siswa' and nik='$nik'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
// echo $nisn;
// echo "<br>";
// echo "$nik";
if ($cek > 0) {
    $login = mysqli_fetch_assoc($data);

    if ($login['kompetensi_keahlian']=="Akuntansi dan Keuangan Lembaga") {
        $_SESSION['nisn_siswa'] = $nisn_siswa;
        $_SESSION['status'] = "siswa";
        $_SESSION['kode_jur'] = "akl";
        header("location:dashboard.php?nik=$nik");
        // echo "cek 1";
    } elseif ($login['kompetensi_keahlian']=="Otomatisasi dan Tata Kelola Perkantoran") {
      $_SESSION['nisn_siswa'] = $nisn_siswa;
      $_SESSION['status'] = "siswa";
      $_SESSION['kode_jur'] = "otkp";
      header("location:dashboard.php?nik=$nik");

    } elseif ($login['kompetensi_keahlian']=="Teknik Komputer dan Jaringan") {
      $_SESSION['nisn_siswa'] = $nisn_siswa;
      $_SESSION['status'] = "siswa";
      $_SESSION['kode_jur'] = "tkj";
      header("location:dashboard.php?nik=$nik");

    } elseif ($login['kompetensi_keahlian']=="Rekayasa Perangkat Lunak") {
      $_SESSION['nisn_siswa'] = $nisn_siswa;
      $_SESSION['status'] = "siswa";
      $_SESSION['kode_jur'] = "rpl";
      header("location:dashboard.php?nik=$nik");

    } elseif ($login['kompetensi_keahlian']=="Teknik Pemesinan") {
      $_SESSION['nisn_siswa'] = $nisn_siswa;
      $_SESSION['status'] = "siswa";
      $_SESSION['kode_jur'] = "tpm";
      header("location:dashboard.php?nik=$nik");
      // echo "cek 1";
    } elseif ($login['kompetensi_keahlian']=="Teknik Kendaraan Ringan Otomotif") {
      $_SESSION['nisn_siswa'] = $nisn_siswa;
      $_SESSION['status'] = "siswa";
      $_SESSION['kode_jur'] = "tkr";
      header("location:dashboard.php?nik=$nik");

    } else {
        // echo "gagal1";
        header("location:index.php?pesan=gagal1");
    }
} else {
    // echo "gagal2";
    header("location:index.php?pesan=gagal");
}
