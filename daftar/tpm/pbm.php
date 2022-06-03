<?php

include '../header.php';
    ?>

  <div class="container">
    <center>
      <h3>Penerimaan Peserta Didik Baru SMKN 1 Kragilan</h3>
    </center>
    <center>
      <h4>Dapat Mengikuti Seleksi Penerimaan Minat dan Bakat</h4>
    </center>
    <center>
      <h4>Kompetensi Keahlian Teknik Pemesinan</h4>
    </center>

    <br>
    <div class='alert alert-danger alert-dismissible' role='alert'>
      <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
        <div class='alert-message'>
          Mohon maaf, untuk berkas dapat dikumpulkan disekolah jika kondisi siswa sudah <b>Data Sesuai</b>. Jika masih proses mohon ditunggu
        </div>
    </div>

    <div class="form-group">
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
            <center>Tanggal Pendaftaran
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
            <center>Kondisi
          </th>

        </tr>
      </thead>
      <tbody>
        <?php
      include '../../koneksi.php';
    $halperpage = 500;
    $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
    $mulai = ($page>1) ? ($page * $halperpage) - $halperpage : 0;
    $result = mysqli_query($koneksi, "SELECT * FROM f_siswa_tpm");
    $total = mysqli_num_rows($result);
    $pages = ceil($total/$halperpage);

    $data = mysqli_query($koneksi, "SELECT * from f_siswa_tpm LIMIT $mulai, $halperpage ");
    $no = $mulai+1;


    while ($d = mysqli_fetch_array($data)) {
        ?>

        <tr>
          <td>
            <center><?php echo $no++ ?>
          </td>
          <!-- <td>
            <center><?php echo $d['no_p']; ?>
          </td> -->
          <td>
            <center><?php echo $d['tgl_pendaftaran']; ?>
          </td>
          <td>
            <center><?php echo $d['nisn']; ?>
          </td>
          <td>
            <center><?php echo $d['nama_siswa']; ?>
          </td>
          <td>
            <center><?php echo $d['kompetensi_keahlian']; ?>
          </td>
          <td>
            <center><?php echo $d['asal_sekolah']; ?>
          </td>
          <td>
            <center>
              <?php include('../../f/tampil-validasi.php'); ?>
          </td>

        </tr>

        <?php
    } ?>
      </tbody>
    </table>
    <div>
      <?php for ($i=1; $i<=$pages ; $i++) {
        ?>
      <a class="btn btn-info btn-md" href="?halaman=<?php echo $i; ?>"><?php echo $i; ?></a>
      <?php
    } // database

  ?>
    </div>
  </div>
  <?php include '../footer.php' ?>
