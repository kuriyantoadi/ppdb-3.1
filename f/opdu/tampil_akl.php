<?php include 'header.php'; ?>

<div class="container">
  <center>
    <h3>Tampilan Admin Daftar Ulang PPDB SMKN 1 Kragilan</h3>
    <h3 style="margin-bottom: 50px">Akuntansi dan Keuangan Lembaga</h3>
  </center>

  <div class="form-group">
    <?php include '../../alert.php' ?>
    <div class="col-sm-7">
      <?php include 'menu.php' ?>

    </div>
    <label class="control-label col-sm-2" for="email">Cari Peserta Calon Peserta Didik :</label>
    <div class="col-sm-3">
      <input type='text' class="form-control" id='input' onkeyup='searchTable()'>
    </div>
  </div>


  <table class="table table-bordered table-hover" id="domainsTable">
    <thead>
      <tr>
        <th>
          <center>No
        </th>
        <th>
          <center>NISN Siswa
        </th>
        <th>
          <center>Nama Siswa
        </th>
        <th>
          <center>Kompetensi Keahlian
        </th>
        <th>
          <center>Asal Sekolah
        </th>
        <th>
          <center>Hasil Seleksi
        </th>
        <th>
          <center>Kondisi
        </th>
        <th colspan="2">
          <center>Pilihan
        </th>
      </tr>
    </thead>
    <tbody>
      <?php
      include '../../koneksi.php';
      $halperpage = 500;
      $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
      $mulai = ($page > 1) ? ($page * $halperpage) - $halperpage : 0;
      $result = mysqli_query($koneksi, "SELECT * FROM tb_siswa, tb_lolos where tb_siswa.nik=tb_lolos.nik AND tb_lolos.diterima_kompetensi_keahlian='Akuntansi dan Keuangan Lembaga'  AND tb_lolos.status='Diterima' ORDER BY tb_lolos.status ASC ");
      $total = mysqli_num_rows($result);
      $pages = ceil($total / $halperpage);

      $data = mysqli_query($koneksi, "SELECT * from tb_siswa, tb_lolos where tb_siswa.nik=tb_lolos.nik AND tb_lolos.diterima_kompetensi_keahlian='Akuntansi dan Keuangan Lembaga' AND tb_lolos.status='Diterima' LIMIT $mulai, $halperpage ");
      $no = $mulai + 1;


      while ($d = mysqli_fetch_array($data)) {
        
        include('tampil-form.php');

      } ?>
    </tbody>
  </table>
  <div>
    <?php for ($i = 1; $i <= $pages; $i++) {
    ?>
      <a class="btn btn-info btn-md" href="?halaman=<?php echo $i; ?>"><?php echo $i; ?></a>
    <?php
    } // database

    ?>
  </div>
</div>
<?php include 'footer.php' ?>