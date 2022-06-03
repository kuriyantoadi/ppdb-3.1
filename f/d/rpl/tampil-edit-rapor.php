<?php
session_start();
if ($_SESSION['status']!="admin" && $_SESSION['status']!="rpl") {
    header("location:index.php?pesan=belum_login");
}

include '../header.php';
?>

  <div class="container">

    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3">
          <center><img style="margin-top: 25px;" src="../../../assets/images/logo-banten.png" />
        </div>
        <div class="col-md-6">
          <center>
            <h2 style="margin-top:  25px;"><b>SMK Negeri 1 Kragilan</b></h2>
          </center>
          <center>
            <h4><b>Form Edit Pendaftaran</b></h4>
          </center>
          <center>
            <h4><b>Calon Peserta Didik Baru</b></h4>
          </center>
          <center>
            <h5><b>Tahun Pelajaran 2021/2022</b></h4>
          </center>
          <center>
            <h4><b>Program Studi Rekayasa Perangkat Lunak</b></h4>
          </center><br>
          <!-- font ganti jenis -->
        </div>
        <div class="col-md-3">
          <center><img style="margin-top:  25px;" class="img-fluid" src="../../../assets/images/logo-smkn1.png" />
        </div>
      </div>
    </div>

<?php
include '../header.php';
include '../../../koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($koneksi, "select * from f_siswa_rpl where id='$id'");

include '../edit-rapor.php';
include '../footer.php';
?>
