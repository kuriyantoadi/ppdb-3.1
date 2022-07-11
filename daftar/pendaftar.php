<?php include 'header.php' ?>

<div class="container">

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3">
        <center><img style="margin-top: 25px;" src="../assets/images/logo-banten.png" />
      </div>
      <div class="col-md-6">
        <center>
          <h2 style="margin-top:  25px;"><b>SMK Negeri 1 Kragilan</b></h2>
        </center>
        <center>
          <h4><b>Jumlah Calon Peserta Ujian Penelusuran Bakat Minat</b></h4>
        </center>
        <center>
          <h4><b>Calon Peserta Didik Baru</b></h4>
        </center>
        <center>
          <h5><b>Tahun Pelajaran 2021/2022</b></h4>
        </center>

        <!-- font ganti jenis -->
      </div>
      <div class="col-md-3">
        <center><img style="margin-bottom:  80px; margin-top:  25px;" class="img-fluid" src="../assets/images/logo-smkn1.png" />
      </div>
    </div>
  </div>


  <?php
  include '../koneksi.php';

  include 'rekap/akl.php';
  include 'rekap/otkp.php';
  include 'rekap/rpl.php';
  include 'rekap/tkj.php';
  include 'rekap/tkr.php';
  include 'rekap/tpm.php';

  // $jml_akl_l = $jml_akl_h1_l+$jml_akl_h2_l+$jml_akl_h3_l+$jml_akl_h4_l+$jml_akl_h5_l;
  // $jml_akl_p = $jml_akl_h1_p + $jml_akl_h2_p + $jml_akl_h3_p + $jml_akl_h4_p + $jml_akl_h5_p;


  ?>


  <table class="table table-bordered table-hover">
    <tr>
      <th rowspan="2">
        <center>Tanggal
      </th>
      <th colspan="2">
        <center>AKL
      </th>
      <th colspan="2">
        <center>OTKP
      </th>
      <th colspan="2">
        <center>TKJ
      </th>
      <th colspan="2">
        <center>RPL
      </th>
      <th colspan="2">
        <center>TPM
      </th>
      <th colspan="2">
        <center>TKR
      </th>
      <th rowspan="2">
        <center>Total
      </th>

    </tr>
    <tr>
      <th>
        <center>L
      </th>
      <th>
        <center>P
      </th>
      <th>
        <center>L
      </th>
      <th>
        <center>P
      </th>
      <th>
        <center>L
      </th>
      <th>
        <center>P
      </th>
      <th>
        <center>L
      </th>
      <th>
        <center>P
      </th>
      <th>
        <center>L
      </th>
      <th>
        <center>P
      </th>
      <th>
        <center>L
      </th>
      <th>
        <center>P
      </th>
    </tr>
    <?php include 'rekap/h1.php' ?>
    <?php include 'rekap/h2.php' ?>
    <?php include 'rekap/h3.php' ?>
    <?php include 'rekap/h4.php' ?>
    <?php include 'rekap/h5.php' ?>


    <tr>
      <th>
        <center>Jumlah
      </th>
      <th>
        <center><?= $jml_akl_l ?>
      </th>
      <th>
        <center><?= $jml_akl_p ?>
      </th>
      <th>
        <center><?= $jml_otkp_l ?>
      </th>
      <th>
        <center><?= $jml_otkp_p ?>
      </th>
      <th>
        <center><?= $jml_tkj_l ?>
      </th>
      <th>
        <center><?= $jml_tkj_p ?>
      </th>
      <th>
        <center><?= $jml_rpl_l ?>
      </th>
      <th>
        <center><?= $jml_rpl_p ?>
      </th>
      <th>
        <center><?= $jml_tpm_l ?>
      </th>
      <th>
        <center><?= $jml_tpm_p ?>
      </th>
      <th>
        <center><?= $jml_tkr_l ?>
      </th>
      <th>
        <center><?= $jml_tkr_p ?>
      </th>
      <th>
        <center>
          <?php
            $jml_semua = $jml_h1 + $jml_h2 + $jml_h3 + $jml_h4 + $jml_h5;
            echo $jml_semua;
           ?>
      </th>
    </tr>
  </table>

</div>

<?php
include 'footer.php' ?>
