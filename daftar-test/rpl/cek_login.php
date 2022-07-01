<?php
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include '../../koneksi.php';

// menangkap data yang dikirim dari form
// belum mengunakan MD5
$nisn = addslashes(trim($_POST['nisn']));
// $nisn = $_POST['nisn'];
$nik = addslashes(trim($_POST['nik']));

// menyeleksi data admin dengan nisn dan nik yang sesuai
$data = mysqli_query($koneksi, "select * from tb_siswa where nisn='$nisn' and nik='$nik'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
// echo $nisn;
// echo "<br>";
// echo "$nik";
if ($cek > 0) {
    $login = mysqli_fetch_assoc($data);

    if ($login['kompetensi_keahlian']=="Rekayasa Perangkat Lunak") {
        $_SESSION['nisn'] = $nisn;
        $_SESSION['status'] = "siswa";
        $_SESSION['kode_jurusan'] = "04";
        $_SESSION['kode_jur'] = "rpl";
        $_SESSION['kompetensi_keahlian'] = "Rekayasa Perangkat Lunak";

        header("location:../dashboard.php?nik=$nik");
        // $_SESSION['status'] = "Teknik Komputer Jaringan";
        // echo "cek 1";
    } else {
        // echo "gagal1";
        header("location:index.php?pesan=gagal");
    }
} else {
    // echo "gagal2";
    header("location:index.php?pesan=gagal");
}
