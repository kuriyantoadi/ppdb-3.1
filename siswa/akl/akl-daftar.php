<?php include('../header.php') ?>


  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <center><img style="margin-top: 25px;" src="../../assets/images/logo-banten.png" />
      </div>
      <div class="col-md-6">
        <center>
          <h2 style="margin-top:  25px;"><b>SMK Negeri 1 Kragilan</b></h2>
        </center>
        <center>
          <h4><b>Daftar Calon Peserta Didik yang sudah bisa Seleksi Administrasi</b></h4>
        </center>
        <center>
          <h5><b>Tahun Pelajaran 2020/2021</b></h4>
        </center>
        <center>
          <h4><b>Program Studi Akuntansi Keuangan Lembaga</b></h4>
        </center><br>
        <!-- font ganti jenis -->
      </div>
      <div class="col-md-3">
        <center><img style="margin-bottom:  80px; margin-top:  25px;" class="img-fluid" alt="Bootstrap Image Preview" src="../../assets/images/logo-smkn1.png" />
      </div>
    </div>


    <div class='alert alert-danger' role='alert'>
      <center>Maaf jika nama pendaftar belum muncul tolong di cek kembali 1 sampai 2 hari :)
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
            <center>Nomor Pendaftaran
          </th>
          <th>
            <center>Seleksi Administrasi
          </th>
          <th>
            <center>NISN Siswa
          </th>
          <th>
            <center>Nama Siswa
          </th>
          <th>
            <center>Asal Sekolah
          </th>
          <!-- Data di buka bos :) -->
          <!-- <th>
            <center>Lolos Seleksi
          </th> -->
        </tr>
      </thead>
      <tbody>
        <?php
      include '../../koneksi.php';
      $halperpage = 500;
      $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
      $mulai = ($page>1) ? ($page * $halperpage) - $halperpage : 0;
      $result = mysqli_query($koneksi, "SELECT no_p,tgl_pendaftaran,nisn,nama_siswa,kompetensi_keahlian,asal_sekolah,kondisi,id
         FROM f_siswa_akl");
      $total = mysqli_num_rows($result);
      $pages = ceil($total/$halperpage);

      $data = mysqli_query($koneksi, "SELECT no_p,tgl_pendaftaran,nisn,nama_siswa,kompetensi_keahlian,asal_sekolah,kondisi,id
        from f_siswa_akl where kompetensi_keahlian in ('Akuntansi dan Keuangan Lembaga') LIMIT $mulai, $halperpage ");
      $no = $mulai+1;


      while ($d = mysqli_fetch_array($data)) {
          ?>

        <tr>
          <td>
            <center><?php echo $no++ ?>
          </td>
          <td>
            <center><?php echo $d['no_p']; ?>
          </td>
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
            <center><?php echo $d['asal_sekolah']; ?>
          </td>
          <!-- Data di buka bos :) -->
          <!-- <td>
            <center><?php echo $d['kondisi']; ?>
          </td> -->
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
<?php include('../footer.php') ?>
