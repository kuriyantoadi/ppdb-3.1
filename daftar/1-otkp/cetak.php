<?php


include '../../koneksi.php';
// $nisn = isset($_GET['nisn']) ? abs((int) $_GET['nisn']) : 0;
$nik = isset($_GET['nik']) ? abs((int) $_GET['nik']) : 0;

$data_siswa = mysqli_query($koneksi, "select nama_siswa from f_siswa_otkp where nik='$nik'");
while ($d_siswa = mysqli_fetch_array($data_siswa)) {

  $nama_siswa = $d_siswa['nama_siswa'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>PPDB SMKN 1 Kragilan - <?= $nama_siswa ?></title>
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
          <center><img style="margin-bottom: 0px; margin-top:  0px; margin-right: 70px" src="../../assets/images/logo-banten-cetak.png" />
        </td>
        <td>
          <center><h5><b>SMK Negeri 1 Kragilan</b></h5></center>
          <center><h6><b>Bukti Pendaftaran Calon Peserta Didik Baru</b></h6></center>
          <center><h6><b>Tahun Pelajaran 2021/2022</b></h6></center>
          <center><h6><b>Program Studi Otomatisasi dan Tata Kelola Perkantoran</b></h6></center><br>
        </td>
        <td>
          <center><img style="margin-bottom: 0px; margin-top:  0px; margin-left: 70px" src="../../assets/images/logo-smkn1-cetak.png" />
        </td>
      </tr>
    </table>

  <table class="table table-bordered">

    <?php
      include '../../koneksi.php';
      // $nisn = isset($_GET['nisn']) ? abs((int) $_GET['nisn']) : 0;

      $nik = isset($_GET['nik']) ? abs((int) $_GET['nik']) : 0;
      $data = mysqli_query($koneksi, "select * from f_siswa_otkp where nik='$nik'");
      while ($d = mysqli_fetch_array($data)) {
          ?>

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
        <td>NPSN Sekolah Asal</td>
        <td><?php echo $d['npsn_sekolah']; ?></td>
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
        <td>Kode POS</td>
        <td><?php echo $d['kode_pos']; ?></td>
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
        <td>Pekerjaan Orang Tua</td>
        <td><?php echo $d['pekerjaan_org_tua']; ?></td>
      </tr>
      <tr>
        <td>PKH / KKS / KIP / Jamsosda</td>
        <td><?php echo $d['kip']; ?></td>
      </tr>
      <tr>
        <td>Nilai Rata-rata Rapor Semester 2</td>
        <td><?php echo $d['rapor_2']; ?></td>
      </tr>
      <tr>
        <td>Nilai Rata-rata Rapor Semester 3</td>
        <td><?php echo $d['rapor_3']; ?></td>
      </tr>
      <tr>
        <td>Nilai Rata-rata Rapor Semester 4</td>
        <td><?php echo $d['rapor_4']; ?></td>
      </tr>
      <tr>
        <td>Nilai Rata-rata Rapor Semester 5</td>
        <td><?php echo $d['rapor_5']; ?></td>
      </tr>
      <tr>
        <td>Nilai Rata-rata Rapor Semester 6</td>
        <td><?php echo $d['rapor_6']; ?></td>
      </tr>
      <tr>
        <td>Username Test</td>
        <td><?php echo $d['username']; ?></td>
      </tr>
      <tr>
        <td>Password Test</td>
        <td><?php echo $d['password']; ?></td>
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
      <tr>
        <td>Tinggi Badan</td>
        <td><?php echo $d['tinggi_badan']; ?></td>
      </tr>
      <tr>
        <td colspan="2">
          <p>
            <b>Informasi :</b>
            <ol>
              <li>Bukti pendaftaran agar dicetak, minimal 1 lembar, sebagai bukti Pendaftaran.</li>
              <li>Siswa memberikan bukti pendaftaran dan berkas ke panitia untuk mendapatkan bukti pendaftaran PPDB dari Provinsi.</li>
              <li>Username dan Password Tes hanya dapat dipakai di Web smkn1kragilan.sch.id.</li>
              <li>Peserta akan mendapatkan nilai 0 jika tidak mengikuti Tes Minat dan Bakat.</li>
              <li>Jika ada peserta yang tidak bisa masuk ke login web Tes Penelurusan Minat dan Bakat segera menghubungi panitia bagian informasi.</li>
              <li>Tes dilaksanakan secara online di tempat tinggal masing-masing calon peserta didik.</li>
              <li>Jika calon peserta didik melakukan kecurangan ketika mengerjakan soal tes, maka akan dinyatakan gugur dari pendaftaran.</li>
              <li>Apabila ditemukan data calon peserta didik baru yang tidak sesuai, maka sekolah berhak untuk membatalkan hasil seleksi pendaftaran.</li>
            </ol>
          </p>
        </td>
      </tr>
    </table>
    <img height="80px" align="right" src="../../assets/images/stampel.png" style="margin-right:  80px;"/>
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
