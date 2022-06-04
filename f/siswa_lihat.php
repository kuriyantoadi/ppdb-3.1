<?php
session_start();
if ($_SESSION['status']=="akl") {
  $kompetensi_keahlian = "Akuntansi dan Keuangan Lembaga";
  $kode_jurusan = "01";
}elseif ($_SESSION['status']=="otkp") {
  $kompetensi_keahlian = "Otomatisasi dan Tata Kelola Perkantoran";
  $kode_jurusan = "02";
}elseif ($_SESSION['status']=="tkj") {
  $kompetensi_keahlian = "Teknik Komputer dan Jaringan";
  $kode_jurusan = "03";
}elseif ($_SESSION['status']=="rpl") {
  $kompetensi_keahlian = "Rekayasa Perangkat Lunak";
  $kode_jurusan = "04";
}elseif ($_SESSION['status']=="tkr") {
  $kompetensi_keahlian = "Teknik Kendaraan Ringan";
  $kode_jurusan = "05";
}elseif ($_SESSION['status']=="tpm") {
  $kompetensi_keahlian = "Teknik Pemesinan";
  $kode_jurusan = "06";
}else {
  header("location:index.php?pesan=belum_login");
}

include 'header.php';
?>

<div class="container">

    <div class="row">
      <div class="col-md-2">
      </div>
      <div class="col-md-8">
        <center>
          <h2>Tampilan Operator PPDB SMKN 1 Kragilan</h2>
        </center>
        <center>
          <h3>Kompetensi Keahlian <?= $kompetensi_keahlian ?></h3>
        </center>
      </div>
      <div class="col-md-2">
      </div>
    </div>

      <?php
      include '../koneksi.php';
      $id = $_GET['id'];
      $data = mysqli_query($koneksi, "select * from tb_siswa where id='$id' ");
      while ($d = mysqli_fetch_array($data)) {
        ?>

      <br><br><br>
      <a style="margin-right: 10px;" type="button" class="btn btn-danger btn-md" href="index.php">Kembali</a>
      <a style="margin-right: 10px;" type="button" class="btn btn-warning btn-md" href="reset.php?id=<?= $d['id'] ?>" onclick="return confirm('Anda yakin Reset data siswa <?php echo $d['nama_siswa']; ?> ?')">Reset Data</a>
      <a style="margin-right: 10px;" type="button" class="btn btn-primary btn-md" href="../daftar/<?= $kode_jurusan ?>/cetak.php?nik=<?= $d['nik'] ?>">Cetak Bukti Pendaftaran</a>

      <h5 style="margin-top: 20px"><b>Informasi :</b></h5>
      <ol>
        <li>Tombol reset digunakan untuk membuat siswa dapat mengedit data diri</li>
        <li>Tombol reset akan menghapus npsn sekolah pada data siswa dan semua file yang sudah diupload siswa</li>
        <li>Siswa dapat login dengan NISN dan NIK Kartu Keluarga dan mengedit data pribadi nya</li>
        <li>Siswa harus upload ulang semua berkas yang sudah di upload</li>
      </ol>

      <button style="margin-bottom: 20px" type="button" value="kondisi1" onclick="block_data_siswa()" class="btn btn-info">Data Pribadi</button>

      <div class="panel panel-info" id="block_data_siswa" style="display:none;">
        <div class="panel-heading">
          <h3 class="panel-title">Data Calon Peserta Didik</h3></div>
        <div class="panel-body">
          <table class="table table-bordered">
              <tr>
                <td>Nomor Pendaftaran</td>
                <td><?php echo $d['no_p']; ?></td>
              </tr>
              <tr>
                <td>Tanggal Pendaftaran</td>
                <td><?php echo $d['tgl_pendaftaran']; ?></td>
              </tr>
              <tr>
                <td>Kompetensi Keahlian</td>
                <td><?php echo $d['kompetensi_keahlian']; ?></td>
              </tr>
              <tr>
                <td>Pilihan Kompetensi Keahlian ke-2</td>
                <td><?php echo $d['kompetensi_keahlian_2']; ?></td>
              </tr>
              <tr>
                <td>Nama Asal Sekolah</td>
                <td><?php echo $d['asal_sekolah']; ?></td>
              </tr>

              <tr>
                <td>NISN</td>
                <td><?php echo $d['nisn']; ?></td>
              </tr>
              <tr>
                <td>Nama Calon Peserta Didik</td>
                <td><?php echo $d['nama_siswa']; ?></td>
              </tr>
              <tr>
                <td>Jenis Kelamin</td>
                <td><?php echo $d['jenis_kelamin']; ?></td>
              </tr>
              <tr>
                <td>Tempat Lahir</td>
                <td><?php echo $d['tempat_lahir']; ?></td>
              </tr>
              <tr>
                <td>Tanggal Lahir</td>
                <td><?php echo $d['tgl_lahir']; ?></td>
              </tr>
              <tr>
                <td>Tahun Lulus</td>
                <td><?php echo $d['tahun_lulus']; ?></td>
              </tr>
              <tr>
                <td>Nomor HP</td>
                <td><?php echo $d['no_hp']; ?></td>
              </tr>
              <tr>
                <td>NIK</td>
                <td><?php echo $d['nik']; ?></td>
              </tr>
              <tr>
                <td>Nomor Kartu Keluarga</td>
                <td><?php echo $d['no_kk']; ?></td>
              </tr>
              <tr>
                <td>Tanggal Terbit KK</td>
                <td><?php echo $d['tgl_kk']; ?></td>
              </tr>
              <tr>
                <td>Kota/Kabupaten</td>
                <td><?php echo $d['kota']; ?></td>
              </tr>
              <tr>
                <td>Kecamatan</td>
                <td><?php echo $d['kecamatan']; ?></td>
              </tr>
              <tr>
                <td>Kelurahan</td>
                <td><?php echo $d['kelurahan']; ?></td>
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
                <td>Jarak Rumah ke Sekolah</td>
                <td><?php echo $d['jarak_kesekolah']; ?> Meter</td>
              </tr>
              <tr>
                <td>Nama Orang Tua / Wali</td>
                <td><?php echo $d['nama_org_tua']; ?></td>
              </tr>
              <tr>
                <td>Nomor HP Orang Tua</td>
                <td><?php echo $d['no_hp_org_tua']; ?></td>
              </tr>
              <tr>
                <td>Pekerjaan Orang Tua</td>
                <td><?php echo $d['pekerjaan_org_tua']; ?></td>
              </tr>
              <tr>
                <td>PKH / KKS / KIP / Jamsosda</td>
                <td><?php echo $d['kip']; ?></td>
              </tr>

              <tr>
                <td>Enkripsi </td>
                <td><?php echo $d['enk']; ?></td>
              </tr>
              <tr>
                <td>Bertindik </td>
                <td><?php echo $d['bertindik']; ?></td>
              </tr>
              <tr>
                <td>Perokok </td>
                <td><?php echo $d['perokok']; ?></td>
              </tr>
              <tr>
                <td>Psikotropika </td>
                <td><?php echo $d['psikotropika']; ?></td>
              </tr>
              <tr>
                <td>Bertato </td>
                <td><?php echo $d['bertato']; ?></td>
              </tr>
              <tr>
                <td>Peminum Minuman Keras</td>
                <td><?php echo $d['peminum']; ?></td>
              </tr>
              <tr>
                <td>Buta Warna</td>
                <td><?php echo $d['buta_warna']; ?></td>
              </tr>
            </table>

        </div>
      </div>

      <div class="panel panel-success">
        <div class="panel-heading">
          <h3 class="panel-title">Validasi Data</h3>
        </div>

        <div class="panel-body">
          <table class="table table-bordered">
            <form class="" action="validasi.php" method="post">

              <input type="hidden" name="id" value="<?= $d['id'] ?>">
              <tr>
                <td>
                  <table class="table table-bordered">
                    <tr>
                      <td width='200px'>Nama Siswa</td>
                      <td><?= $d['nama_siswa'] ?></td>
                    </tr>
                    <tr>
                      <td>Sekolah Asal</td>
                      <td><?= $d['asal_sekolah'] ?></td>
                    </tr>
                  </table>

                  SKHUN <?= $d['pdf_skhun'] ?>
                  <br>
                  <select name="val_skhun" class="form-control" required>
                    <option value="<?= $d['val_skhun']; ?>">Pilih Kondisi <?= $d['val_skhun']; ?></option>
                    <option value="Data Sesuai">Data Sesuai</option>
                    <option value="Data Tidak Sesuai">Data Tidak Sesuai</option>
                  </select>

                </td>
                <td>
                  <?php if (!empty($d['pdf_skhun'])) { ?>
                  <embed src="../assets/file_upload/<?= $kode_jurusan ?>/<?= $d['pdf_skhun']; ?>" type="application/pdf" width="100%" height="500px">
                  <?php }else{ ?>
                  <h5>File Tidak Ada</h5>
                  <?php } ?>
                </td>
              </tr>
              <tr>
                <td>Surat Sehat dari Dokter
                  <select name="val_surat_dokter" class="form-control" required>
                    <option value="<?= $d['val_surat_dokter']; ?>">Pilih Kondisi <?= $d['val_surat_dokter']; ?></option>
                    <option value="Data Sesuai">Data Sesuai</option>
                    <option value="Data Tidak Sesuai">Data Tidak Sesuai</option>
                  </select>
                </td>
                <td>
                  <?php if (!empty($d['pdf_surat_dokter'])) { ?>
                  <embed src="../assets/file_upload/<?= $kode_jurusan ?>/<?= $d['pdf_surat_dokter']; ?>" type="application/pdf" width="100%" height="500px">
                  <?php }else{ ?>
                  <h5>File Tidak Ada</h5>
                  <?php } ?>
                </td>
              </tr>
              <tr>
                <td>Kartu Keluarga
                  <br>NIK : <b> <?= $d['nik']; ?> </b>
                  <br>Nomor KK : <b><?= $d['no_kk']; ?></b>
                  <br>Tanggal KK Terbit : <b><?= $d['tgl_kk']; ?></b>
                  <br>
                  <select name="val_kk" class="form-control" required>
                    <option value="<?= $d['val_kk']; ?>">Pilih Kondisi <?= $d['val_kk']; ?></option>
                    <option value="Data Sesuai">Data Sesuai</option>
                    <option value="Data Tidak Sesuai">Data Tidak Sesuai</option>
                  </select>
                </td>
                <td>
                  <?php if (!empty($d['pdf_kk'])) { ?>
                  <embed src="../assets/file_upload/<?= $kode_jurusan ?>/<?= $d['pdf_kk']; ?>" type="application/pdf" width="100%" height="500px">
                  <?php }else{ ?>
                  <h5>File Tidak Ada</h5>
                  <?php } ?>
                </td>
              </tr>
              <tr>
                <td>Akta Kelahiran
                  <select name="val_akta" class="form-control" required>
                    <option value="<?= $d['val_akta']; ?>">Pilih Kondisi <?= $d['val_akta']; ?></option>
                    <option value="Data Sesuai">Data Sesuai</option>
                    <option value="Data Tidak Sesuai">Data Tidak Sesuai</option>
                  </select>
                </td>
                <td>
                  <?php if (!empty($d['pdf_akta'])) { ?>
                  <embed src="../assets/file_upload/<?= $kode_jurusan ?>/<?= $d['pdf_akta']; ?>" type="application/pdf" width="100%" height="500px">
                  <?php }else{ ?>
                  <h5>File Tidak Ada</h5>
                  <?php } ?>
                </td>
              </tr>
              <tr>
                <td>Photo
                  <select name="val_photo" class="form-control" required>
                    <option value="<?= $d['val_photo']; ?>">Pilih Kondisi <?= $d['val_photo']; ?></option>
                    <option value="Data Sesuai">Data Sesuai</option>
                    <option value="Data Tidak Sesuai">Data Tidak Sesuai</option>
                  </select>
                </td>
                <td>
                  <?php if (!empty($d['pdf_photo'])) { ?>
                  <embed src="../assets/file_upload/<?= $kode_jurusan ?>/<?= $d['pdf_photo']; ?>" type="application/pdf" width="100%" height="500px">
                  <?php }else{ ?>
                  <h5>File Tidak Ada</h5>
                  <?php } ?>
                </td>
              </tr>
              
              <tr>
                <td>Rapor Semester 2
                  <br>Rata-rata Rapor = <b><?= $d['rapor_2'] ?></b>
                  <br><a class="btn btn-info" style="margin-top: 10px; margin-bottom: 10px" href="tampil-edit-rapor.php?id=<?= $d['id'] ?>">Edit Rapor</a>
                  <select name="val_rapor_2" class="form-control" required>
                    <option value="<?= $d['val_rapor_2']; ?>">Pilih Kondisi <?= $d['val_rapor_2']; ?></option>
                    <option value="Data Sesuai">Data Sesuai</option>
                    <option value="Data Tidak Sesuai">Data Tidak Sesuai</option>
                  </select>
                </td>
                <td>
                  <?php if (!empty($d['pdf_rapor_2'])) { ?>
                  <embed src="../assets/file_upload/<?= $kode_jurusan ?>/<?= $d['pdf_rapor_2']; ?>" type="application/pdf" width="100%" height="500px">
                  <?php }else{ ?>
                  <h5>File Tidak Ada</h5>
                  <?php } ?>
                </td>
              </tr>
              <tr>
                <td>Rapor Semester 3
                  <br>Rata-rata Rapor = <b><?= $d['rapor_3'] ?></b>
                  <select name="val_rapor_3" class="form-control" required>
                    <option value="<?= $d['val_rapor_3']; ?>">Pilih Kondisi <?= $d['val_rapor_3']; ?></option>
                    <option value="Data Sesuai">Data Sesuai</option>
                    <option value="Data Tidak Sesuai">Data Tidak Sesuai</option>
                  </select>
                </td>
                <td>
                  <?php if (!empty($d['pdf_rapor_3'])) { ?>
                  <embed src="../assets/file_upload/<?= $kode_jurusan ?>/<?= $d['pdf_rapor_3']; ?>" type="application/pdf" width="100%" height="500px">
                  <?php }else{ ?>
                  <h5>File Tidak Ada</h5>
                  <?php } ?>
                </td>
              </tr>
              <tr>
                <td>Rapor Semester 4
                  <br>Rata-rata Rapor = <b><?= $d['rapor_4'] ?></b>
                  <select name="val_rapor_4" class="form-control" required>
                    <option value="<?= $d['val_rapor_4']; ?>">Pilih Kondisi <?= $d['val_rapor_4']; ?></option>
                    <option value="Data Sesuai">Data Sesuai</option>
                    <option value="Data Tidak Sesuai">Data Tidak Sesuai</option>
                  </select>
                </td>
                <td>
                  <?php if (!empty($d['pdf_rapor_4'])) { ?>
                  <embed src="../assets/file_upload/<?= $kode_jurusan ?>/<?= $d['pdf_rapor_4']; ?>" type="application/pdf" width="100%" height="500px">
                  <?php }else{ ?>
                  <h5>File Tidak Ada</h5>
                  <?php } ?>
                </td>
              </tr>
              <tr>
                <td>Rapor Semester 5
                  <br>Rata-rata Rapor = <b><?= $d['rapor_5'] ?></b>
                  <select name="val_rapor_5" class="form-control" required>
                    <option value="<?= $d['val_rapor_5']; ?>">Pilih Kondisi <?= $d['val_rapor_5']; ?></option>
                    <option value="Data Sesuai">Data Sesuai</option>
                    <option value="Data Tidak Sesuai">Data Tidak Sesuai</option>
                  </select>
                </td>
                <td>
                  <?php if (!empty($d['pdf_rapor_5'])) { ?>
                  <embed src="../assets/file_upload/<?= $kode_jurusan ?>/<?= $d['pdf_rapor_5']; ?>" type="application/pdf" width="100%" height="500px">
                  <?php }else{ ?>
                  <h5>File Tidak Ada</h5>
                  <?php } ?>
                </td>
              </tr>
              <tr>
                <td>Rapor Semester 6
                  <br>Rata-rata Rapor = <b><?= $d['rapor_6'] ?></b>
                  <select name="val_rapor_6" class="form-control" required>
                    <option value="<?= $d['val_rapor_6']; ?>">Pilih Kondisi <?= $d['val_rapor_6']; ?></option>
                    <option value="Data Sesuai">Data Sesuai</option>
                    <option value="Data Tidak Sesuai">Data Tidak Sesuai</option>
                  </select>
                </td>
                <td>
                  <?php if (!empty($d['pdf_rapor_6'])) { ?>
                  <embed src="../assets/file_upload/<?= $kode_jurusan ?>/<?= $d['pdf_rapor_6']; ?>" type="application/pdf" width="100%" height="500px">
                  <?php }else{ ?>
                  <h5>File Tidak Ada</h5>
                  <?php } ?>
                </td>
              </tr>
              <tr>
                <td>Kartu KIP/Jamsosda atau yang lain
                  <select name="val_kip" class="form-control" required>
                    <option value="<?= $d['val_kip']; ?>">Pilih Kondisi <?= $d['val_kip']; ?></option>
                    <option value="Data Sesuai">Data Sesuai</option>
                    <option value="Data Tidak Sesuai">Data Tidak Sesuai</option>
                  </select>
                </td>
                <td>
                  <?php if (!empty($d['pdf_kip'])) { ?>
                  <embed src="../assets/file_upload/<?= $kode_jurusan ?>/<?= $d['pdf_kip']; ?>" type="application/pdf" width="100%" height="500px">
                  <?php }else{ ?>
                  <h5>File Tidak Ada</h5>
                  <?php } ?>
                </td>
              </tr>
              <tr>
                <td>Piagam 1
                  <select name="val_piagam1" class="form-control" required>
                    <option value="<?= $d['val_piagam1']; ?>">Pilih Kondisi <?= $d['val_piagam1']; ?></option>
                    <option value="Data Sesuai">Data Sesuai</option>
                    <option value="Data Tidak Sesuai">Data Tidak Sesuai</option>
                  </select>
                </td>
                <td>
                  <?php if (!empty($d['pdf_piagam1'])) { ?>
                  <embed src="../assets/file_upload/<?= $kode_jurusan ?>/<?= $d['pdf_piagam1']; ?>" type="application/pdf" width="100%" height="500px">
                  <?php }else{ ?>
                  <h5>File Tidak Ada</h5>
                  <?php } ?>
                </td>
              </tr>
              <tr>
                <td>Piagam 2
                  <select name="val_piagam2" class="form-control" required>
                    <option value="<?= $d['val_piagam2']; ?>">Pilih Kondisi <?= $d['val_piagam2']; ?></option>
                    <option value="Data Sesuai">Data Sesuai</option>
                    <option value="Data Tidak Sesuai">Data Tidak Sesuai</option>
                  </select>
                </td>
                <td>
                  <?php if (!empty($d['pdf_piagam2'])) { ?>
                  <embed src="../assets/file_upload/<?= $kode_jurusan ?>/<?= $d['pdf_piagam2']; ?>" type="application/pdf" width="100%" height="500px">
                  <?php  }else{ ?>
                  <h5>File Tidak Ada</h5>
                  <?php } ?>
                </td>
              </tr>
              <tr>
                <td>Piagam 3
                  <select name="val_piagam3" class="form-control" required>
                    <option value="<?= $d['val_piagam3']; ?>">Pilih Kondisi <?= $d['val_piagam3']; ?></option>
                    <option value="Data Sesuai">Data Sesuai</option>
                    <option value="Data Tidak Sesuai">Data Tidak Sesuai</option>
                  </select>
                </td>
                <td>
                  <?php if (!empty($d['pdf_piagam3'])){ ?>
                  <embed src="../assets/file_upload/<?= $kode_jurusan ?>/<?= $d['pdf_piagam3']; ?>" type="application/pdf" width="100%" height="500px">
                  <?php }else { ?>
                  <h5>File Tidak Ada</h5>
                  <?php } ?>

                </td>
              </tr>
              <tr>
                <td>Catatan dari Operator</td>
                <td>
                  <textarea class="form-control" name="catatan_operator" rows="8" cols="30"></textarea>
                </td>
              </tr>
          </table>

        </div>
      </div>




      <center>
        <select style="margin-top: 25px;  width: 30%;" name="kondisi" class="form-control" required>
          <option value="<?= $d['kondisi']; ?>">Pilih Kondisi <?= $d['kondisi']; ?></option>
          <option value="Siswa Lolos Seleksi">Siswa Lolos Seleksi</option>
          <option value="Siswa Tidak Lolos Seleksi">Siswa Tidak Lolos Seleksi</option>
        </select>

        <input style="margin-top: 25px; margin-bottom: 80px;" type="submit" name="submit" value="submit" class="btn btn-success">
        </form>

        <br>
        <?php
      } ?>
    </div>

  </div>
</div>
</body>
<script src="../assets/js/hidden-block.js"></script>

</html>
