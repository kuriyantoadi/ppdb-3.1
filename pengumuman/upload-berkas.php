<?php

include 'header.php';

include '../koneksi.php';
$cek_kondisi = mysqli_query($koneksi, "SELECT * from f_pengumuman where nisn_siswa='$nisn_siswa' ");
while ($d_kondisi = mysqli_fetch_array($cek_kondisi)) {

  if ($d_kondisi['kondisi'] == "TIDAK DITERIMA") {
    header("location:index.php?pesan=belum_login");
  }

}
?>

<div class='alert alert-danger alert-dismissible' role='alert'>
<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
  <div class='alert-message'>
    Info Penting:
    <br>1. Daftar Ulang tanggal 1 s.d 9 Juli 2021,
    <br>(Siswa yang tidak mendaftar ulang dianggap mengundurkan diri);
    <br>2. Berkas Surat Keterangan Diterima, Pakta Integritas Siswa, Bukti Upload Berkas dan Form Dapodik Wajib diprint.
    <br>3. Berkas Pakta Integritas, Swa Pakta Integritas dan Form Dapodik(di isi dulu dengan dengan lengkap) harus diupload untuk mendapatkan <b>"Bukti Upload Berkas".</b>
    <br>4. Tombol Bukti Upload Berkas akan tampil secara otomatis ketika berkas sudah diupload.
    <br>5. Berkas Daftar ulang terdiri dari Surat Keterangan Diterima, Pakta Integritas Siswa, Bukti Upload Berkas dan Form Dapodik dimenu Daftar Ulang. Berkas dimasukkan pada map snelhekter plastik sesuai warna kompetensi keahlian.
    <br>6. Siswa yang diterima, wajib mengikuti kegiatan MPLS, pada tanggal 12 s.d 14 Juli 2021.
    <br><b>7. Daftar Ulang dilakukan 1 hari setelah upload berkas, dan pastikan Status Berkas "Data Sesuai". </b>

  </div>
</div>

<div class='alert alert-info alert-dismissible' role='alert'>
<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
  <div class='alert-message'>
    <b>Info Pengisian Formulir Dapodik :
    Data Form dapodik yg tdk wajib di isi/Boleh dikosongkan:</b>
    <h5>
    <br><b>Data Pribadi</b>
    <br>- Berkebutuhan Khusus
    <br>- Nama Dusun
    <br>- Lintang dan Bujur
    <br>- Apakah punya KIP (jika tidak memiliki KIP)

    <br><br><b>Data Ayah Kandung dan Ibu Kandung</b>
    <br>- Berkebutuhan khusus
    <br>- Data wali boleh di kosongkan

    <br><br><b>Kontak</b>
    <br>- No Telepon Rumah

    <br><br><b>Data Rincian Peserta Didik</b>
    <br>- Prestasi (jika tdk memliki prestasi)
    <br>- Beasiswa
    <br>- kesejahteraan peserta didik

    <br><br><b>Registrasi Peserta Didik</b>
    <br>- No Peserta UN SMP/MTs
    <br>- No Seri Ijazah SMP/MTs
    <br>- No SKHUN SMP/MTs
    <br>- Pendaftaran Keluar (dikosongkan semua)

    <br><br><b>Note: Tanda tangan Orang tua/wali harap di isi sebagai pertanggung jawaban data isian</b>
    </h5>
  </div>
</div>


      <table class="table table-bordered">
        <?php
      include '../koneksi.php';
      $nik = isset($_GET['nik']) ? abs((int) $_GET['nik']) : 0;
      $data = mysqli_query($koneksi, "select *  from f_pengumuman where nik='$nik'");
      while ($d = mysqli_fetch_array($data)) {

              ?>

        <table>
          <tr>
            <td><a type="button" style="margin-right: 10px; margin-bottom: 25px;" class="btn btn-danger btn-md" href="dashboard.php?nik=<?php echo $d['nik']; ?>">Kembali</a></td>
            <td><a type="button" style="margin-right: 10px; margin-bottom: 25px;" class="btn btn-primary " href="cetak-hasil-seleksi.php?nik=<?php echo $d['nik'] ?>">
              Hasil Seleksi     <span class="glyphicon glyphicon-print" aria-hidden="true"></span></a>
            </td>
            <td><a type="button" style="margin-right: 10px; margin-bottom: 25px;" class="btn btn-primary btn-md" href="../assets/file/F-PESERTA_DIDIK.pdf">
                Formulir Dapodik  <span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span>
              </a>
            </td>
            <td><a type="button" style="margin-right: 10px; margin-bottom: 25px;" class="btn btn-primary btn-md" href="cetak-pakta.php?nik=<?php echo $d['nik'] ?>">
              Pakta Integritas   <span class="glyphicon glyphicon-print" aria-hidden="true"></span>
              </a>
            </td>
            <td>
              <?php if (!empty($d['pdf_pakta'])): ?>
                <a type="button" style="margin-right: 10px; margin-bottom: 25px;" class="btn btn-primary btn-md" href="cetak-upload-berkas.php?nik=<?php echo $d['nik'] ?>">
                  Butki Upload Berkas <span class="glyphicon glyphicon-print" aria-hidden="true"></span>
                </a>
              <?php endif; ?>
            </td>
          </tr>
        </table>

        <?php include '../alert.php'; ?>
        <form class="form-horizontal" action="upload-berkas-up.php" name="input" method="POST" enctype="multipart/form-data" onSubmit="return validasi()">
          <table class="table table-bordered">

            <tr>
              <td>Catatan dari Operator</td>
              <td><b><?php echo $d['catatan_operator']; ?></b></td>
            </tr>
            <tr>
              <td>Status Siswa Diterima</td>
              <td><?php include 'label-diterima.php' ?></td>
            </tr>
            <tr>
              <td>Status Upload Berkas</td>
              <td><?php include 'label-upload.php'; ?></td>
            </tr>
            <tr>
              <td>Status Daftar Ulang</td>
              <td><?php include 'label-daftarulang.php' ?></td>
            </tr>
            <tr>
              <td>Tanggal Daftar Ulang</td>
              <td><?php echo $d['tgl_daftarulang']; ?></td>
            </tr>
            <tr>
              <td>Nomor Pendaftaran</td>
              <td><?php echo $d['no_p']; ?></td>
            </tr>
            <tr>
              <td>NISN Siswa</td>
              <td><?php echo $d['nisn_siswa']; ?></td>
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


            <?php if (!empty($d['pdf_pakta'])) { ?>
            <!-- <tr>
              <td>Kondisi Validasi</td>
              <td>
                <?php include 'val.php' ?>
              </td>
            </tr>

            <tr>
              <td>Kondisi Berkas Diberikan ke Sekolah</td>
              <td>
                <?= $d['kondisi_berkas'] ?>
                <p>Berkas diberikan jika kondisi validasi sudah hijau</p>
              </td>
            </tr> -->



            <?php }else{ ?>

            <tr>
              <td>
                Scan Pakta Integritas
                <br><img src="../assets/images/contoh-pakta.png" alt="">
              </td>
              <td>
                <p>File Harus PDF dan Maksimal 300kb</p>
                <input type="file" name="pdf_pakta" accept="application/pdf" class="form-control-file" id="pdf_fakta" required>
              </td>
            </tr>
            <tr>
              <td>Swa Photo Pakta Integritas
                <br><img src="../assets/images/contoh-swa-pakta.png" alt="">
              </td>
              <td>
                <p>File Harus PDF dan Maksimal 500kb</p>
                <input type="hidden" name="nisn_siswa" value="<?php echo $d['nisn_siswa']; ?>">
                <input type="hidden" name="kode_jur" value="<?= $kode_jur; ?>">
                <input type="hidden" name="nik" value="<?php echo $d['nik']; ?>">
                <input type="file" name="pdf_swa_pakta" accept="application/pdf" class="form-control-file" id="pdf_swa_fakta" required>
              </td>
            </tr>
            <tr>
              <td>Fomulir Dapodik
                <b>
                  <br>1. Formulir Dapodik Harus di isi dengan tulis tangan sebelum di upload.
                  <br>2. Formulir di isi dari halaman 1 sampai halaman 5.
                  <br>3. File diupload 5 lembar dalam bentuk PDF.
                  <br>4. Untuk scan dengan HP bisa pakai aplikasi Camscanner (Download di playstore).
                  <br>5. No peserta ujian nasional, no Ijazah dan no SKHUN tidak perlu diisi jika belum ada.
                </b>
              </td>
              <td>
                <p>File Harus PDF dan Maksimal 1 MB</p>
                <input type="file" name="pdf_dapodik" accept="application/pdf" class="form-control-file" id="pdf_fakta" required>
              </td>
            </tr>


              </table>
              <center><input type="submit" style="margin-top: 10px; margin-bottom: 60px" class="btn btn-default" name="upload" value="Submit"></center>

            </form>

          <?php } ?>




      <?php
      }
      include 'footer.php'
      ?>



</body>

</html>
