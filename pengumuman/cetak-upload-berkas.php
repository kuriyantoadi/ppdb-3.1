<?php
session_start();
if ($_SESSION['status']!="admin" && $_SESSION['status']!="siswa" && $_SESSION['status']!="op") {
    header("location:index.php?pesan=belum_login");
}

$nik = $_GET['nik'];


include '../koneksi.php';
$cek_id = mysqli_query($koneksi, "SELECT * from f_pengumuman where nik='$nik' ");
while ($d_id = mysqli_fetch_array($cek_id)) {
  $nama_jurusan =  $d_id['kompetensi_keahlian'];
  $nisn_siswa =  $d_id['nisn_siswa'];

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>PPDB SMKN 1 Kragilan - <?= $nisn_siswa ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
  <!-- <script src="../../assets/js/bootstrap.min.js"></script> -->
</head>
<body>

<div class="container">

  <div class="container-fluid">
    <table>
      <tr>
        <td>
          <center><img style="margin-bottom: 0px; margin-top:  0px; margin-right: 70px" src="../assets/images/logo-banten-cetak.png" />
        </td>
        <td>
          <center><h5><b>SMK Negeri 1 Kragilan</b></h5></center>
          <center><h6><b>Bukti Upload Berkas Calon Peserta Didik Baru</b></h6></center>
          <center><h6><b>Tahun Pelajaran 2021/2022</b></h6></center>
          <center><h6><b>Program Studi <?= $nama_jurusan ?></b></h6></center><br>
        </td>
        <td>
          <center><img style="margin-bottom: 0px; margin-top:  0px; margin-left: 70px" src="../assets/images/logo-smkn1-cetak.png" />
        </td>
      </tr>
    </table>

  <table class="table table-bordered">

    <?php
      include '../koneksi.php';
      // $nisn = isset($_GET['nisn']) ? abs((int) $_GET['nisn']) : 0;

      $nik = isset($_GET['nik']) ? abs((int) $_GET['nik']) : 0;
      $data = mysqli_query($koneksi, "select * from f_pengumuman where nik='$nik'");
      while ($d = mysqli_fetch_array($data)) {
          ?>

    <table class="table table-bordered">
      <tr>
        <td>Tanggal Daftar Ulang</td>
        <td><?php echo $d['tgl_daftarulang']; ?></td>
      </tr>
      <tr>
        <td>Nomor Pendaftaran</td>
        <td><?php echo $d['no_p']; ?></td>
      </tr>
      <tr>
        <td>Nama Siswa</td>
        <td><?php echo $d['nama_siswa']; ?></td>
      </tr>
      <tr>
        <td>Kompetensi Keahlian</td>
        <td><?php echo $d['kompetensi_keahlian']; ?></td>
      </tr>
      <tr>
        <td>Asal Sekolah</td>
        <td><?php echo $d['asal_sekolah']; ?></td>
      </tr>
      <tr>
        <td>NPSN Sekolah SMP</td>
        <td><?php echo $d['npsn_sekolah']; ?></td>
      </tr>
      <tr>
        <td>Alamat</td>
        <td><?php echo $d['alamat']; ?></td>
      </tr>
      <tr>
        <td>RT</td>
        <td><?php echo $d['rt']; ?></td>
      </tr>
      <tr>
        <td>RW</td>
        <td><?php echo $d['rw']; ?></td>
      </tr>
      <tr>
        <td>Kelurahan</td>
        <td><?php echo $d['kelurahan']; ?></td>
      </tr>
      <tr>
        <td>Kecamatan</td>
        <td><?php echo $d['kecamatan']; ?></td>
      </tr>
      <tr>
        <td>Kota</td>
        <td><?php echo $d['kota']; ?></td>
      </tr>
      <tr>
        <td>NIK</td>
        <td><?php echo $d['nik']; ?></td>
      </tr>


      <tr>
        <td colspan="2">
          <p>
            <b>Informasi :</b>
            <ol>
              <li>Bukti upload Berkas agar dicetak, minimal 1 lembar, sebagai bukti sudah upload berkas.</li>
              <li>Siswa memberikan bukti upload dan berkas ke panitia untuk mendapatkan bukti daftar ulang.</li>
              <li>Siswa ke sekolah wajib membawa Bukti Diterima di SMK Negeri 1 Kragilan, Pakta Integritas, Formulir Dapodik dan Bukti Upload Berkas.</li>
              <li>Apabila ditemukan data calon peserta didik baru tidak memelakukan daftar ulang sampai tanggal 9 Juli maka sekolah berhak untuk membatalkan hasil seleksi pendaftaran.</li>
            </ol>
          </p>
        </td>
      </tr>
    </table>
    <img height="100px" align="right" src="../assets/images/stampel.png" style="margin-right:  80px;"/>
    <center>
  <?php
      } ?>
<br><br><br>

      </div>
    </div>
</div>
</div>

<script>
    window.print();
  </script>


  </body>
</html>
