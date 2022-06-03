<?php
    include 'header.php';
    include '../koneksi.php';
    $nik = isset($_GET['nik']) ? abs((int) $_GET['nik']) : 0;
    $data = mysqli_query($koneksi, "select * from f_pengumuman where nik='$nik'");
    while ($d = mysqli_fetch_array($data)) {
  ?>

  <table>
    <tr>
      <td><a type="button" style="margin-right: 10px; " class="btn btn-danger " href="logout.php">Keluar</a></td>
      <!-- <td><a type="button" style="margin-right: 10px;" class="btn btn-primary " href="cetak-hasil-seleksi.php?nik=<?php echo $d['nik'] ?>">Download Hasil Seleksi</a></td> -->

      <?php if ($d['kondisi'] == "DITERIMA") { ?>
        <td><a type="button" style="margin-right: 10px;" class="btn btn-primary " href="cetak-hasil-seleksi.php?nik=<?php echo $d['nik'] ?>">
          Hasil Seleksi     <span class="glyphicon glyphicon-print" aria-hidden="true"></span></a>
        </td>
        <td><a type="button" style="margin-right: 10px;" class="btn btn-success " href="upload-berkas.php?nik=<?php echo $d['nik'] ?>">
          Form Upload Berkas      <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
        </td>
      <?php }elseif  ($d['kondisi'] == "TIDAK DITERIMA") {  ?>
        <td><a type="button" style="margin-right: 10px;" class="btn btn-primary " href="cetak-hasil-seleksi.php?nik=<?php echo $d['nik'] ?>">Download Hasil Seleksi</a></td>
      <?php }else{  ?>
        <td><h4>Hasil Belum Dikonfirmasi Admin</h4></td>
      <?php } ?>


    </tr>
  </table>

  <table class="table table-bordered" style="margin-top: 20px">
    <tr>
      <td>Hasil Seleksi PPBD</td>
      <td><?php echo $d['kondisi']; ?></td>
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
      <td>Nomor HP Siswa</td>
      <td><?php echo $d['no_hp']; ?></td>
    </tr>
    <tr>
      <td>Nomor HP Orang Tua</td>
      <td><?php echo $d['no_hp_org_tua']; ?></td>
    </tr>
    <tr>
      <td>NIK</td>
      <td><?php echo $d['nik']; ?></td>
    </tr>
    <tr>
      <td>Formulir Dapodik</td>
      <td>
        <a href="../assets/file_upload/<?= $kode_jur ?>/<?= $d['pdf_dapodik'] ?>" type="button" class="btn btn-primary btn-sm" name="button">Formulir Dapodik</a>
      </td>
    </tr>
    <tr>
      <td>Pakta Integritas</td>
      <td>
        <a href="../assets/file_upload/<?= $kode_jur ?>/<?= $d['pdf_pakta'] ?>" type="button" class="btn btn-primary btn-sm" name="button">Pakta Integritas</a>
      </td>
    </tr>
    <tr>
      <td>Swa Photo Pakta Integritas</td>
      <td>
        <a href="../assets/file_upload/<?= $kode_jur ?>/<?= $d['pdf_swa_pakta'] ?>" type="button" class="btn btn-primary btn-sm" name="button">Swa Pakta Integritas</a>
      </td>
    </tr>

    <tr>
      <td>Standar Kompetensi Lulusan (SKL) Asli</td>
      <td>
        <a href="../assets/file_upload/<?= $kode_jur ?>/<?= $d['pdf_kip'] ?>" type="button" class="btn btn-primary btn-sm" name="button">SKL</a>
      </td>
    </tr>
    <tr>
      <td>Akta Kelahiran</td>
      <td>
        <a href="../assets/file_upload/<?= $kode_jur ?>/<?= $d['pdf_akta'] ?>" type="button" class="btn btn-primary btn-sm" name="button">Akta Kelahiran</a>
      </td>
    </tr>
    <tr>
      <td>Kartu Keluarga</td>
      <td>
        <a href="../assets/file_upload/<?= $kode_jur ?>/<?= $d['pdf_kk'] ?>" type="button" class="btn btn-primary btn-sm" name="button">Kartu Keluarga</a>
      </td>
    </tr>
    <tr>
      <td>Photo Background Merah</td>
      <td>
        <a href="../assets/file_upload/<?= $kode_jur ?>/<?= $d['pdf_photo'] ?>" type="button" class="btn btn-primary btn-sm" name="button">Photo</a>
      </td>
    </tr>
    <tr>
      <td>Surat Sehat dan Keterangan Buta Warna dari Puskesmas</td>
      <td>
        <a href="../assets/file_upload/<?= $kode_jur ?>/<?= $d['pdf_surat_dokter'] ?>" type="button" class="btn btn-primary btn-sm" name="button">Surat Dokter</a>
      </td>
    </tr>
    <tr>
      <td>Swa Photo</td>
      <td>
        <a href="../assets/file_upload/<?= $kode_jur ?>/<?= $d['pdf_swa_kk'] ?>" type="button" class="btn btn-primary btn-sm" name="button">Swa Photo</a>
      </td>
    </tr>
    <tr>
      <td>Rapor Semester 2</td>
      <td>
        <a href="../assets/file_upload/<?= $kode_jur ?>/<?= $d['pdf_rapor_2'] ?>"
          type="button" class="btn btn-primary btn-sm" name="button">Rapor Semester 2</a>
      </td>
    </tr>
    <tr>
      <td>Rapor Semester 3</td>
      <td>
        <a href="../assets/file_upload/<?= $kode_jur ?>/<?= $d['pdf_rapor_3'] ?>"
          type="button" class="btn btn-primary btn-sm" name="button">Rapor Semester 3</a>
      </td>
    </tr>
    <tr>
      <td>Rapor Semester 4</td>
      <td>
        <a href="../assets/file_upload/<?= $kode_jur ?>/<?= $d['pdf_rapor_4'] ?>"
          type="button" class="btn btn-primary btn-sm" name="button">Rapor Semester 4</a>
      </td>
    </tr>
    <tr>
      <td>Rapor Semester 5</td>
      <td>
        <a href="../assets/file_upload/<?= $kode_jur ?>/<?= $d['pdf_rapor_5'] ?>"
          type="button" class="btn btn-primary btn-sm" name="button">Rapor Semester 5</a>
      </td>
    </tr>
    <tr>
      <td>Rapor Semester 6</td>
      <td>
        <a href="../assets/file_upload/<?= $kode_jur ?>/<?= $d['pdf_rapor_6'] ?>"
          type="button" class="btn btn-primary btn-sm" name="button">Rapor Semester 6</a>
      </td>
    </tr>



  </table><br>
  <?php
      } ?>


  </body>

  </html>
