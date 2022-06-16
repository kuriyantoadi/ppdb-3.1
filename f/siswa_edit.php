<?php
session_start();
if ($_SESSION['status']=="akl") {
  $kompetensi_keahlian = "Akuntansi dan Keuangan Lembaga";
  $kode_jur = "akl";
}elseif ($_SESSION['status']=="otkp") {
  $kompetensi_keahlian = "Otomatisasi dan Tata Kelola Perkantoran";
  $kode_jur = "otkp";
}elseif ($_SESSION['status']=="tkj") {
  $kompetensi_keahlian = "Teknik Komputer dan Jaringan";
  $kode_jur = "tkj";
}elseif ($_SESSION['status']=="rpl") {
  $kompetensi_keahlian = "Rekayasa Perangkat Lunak";
  $kode_jur = "rpl";
}elseif ($_SESSION['status']=="tkr") {
  $kompetensi_keahlian = "Teknik Kendaraan Ringan";
  $kode_jur = "tkr";
}elseif ($_SESSION['status']=="tpm") {
  $kompetensi_keahlian = "Teknik Pemesinan";
  $kode_jur = "tpm";
}else {
  header("location:index.php?pesan=belum_login");
}

// include 'header.php';

include '../koneksi.php';
// $id = $_GET['id'];
$id = isset($_GET['id']) ? abs((int) $_GET['id']) : 0;
// $id = mysql_real_escape_string($_GET['id']);

$data = mysqli_query($koneksi, "select * from tb_siswa where id='$id' ");
while ($d = mysqli_fetch_array($data)) {

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>PPDB SMKN 1 Kragilan</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <script src="../assets/js/bootstrap.min.js"></script>

  <script type="text/javascript" src="../assets/js/jquery-latest.js"></script>
  <script type="text/javascript" src="../assets/js/jquery.tablesorter.min.js"></script>
</head>
<body>


<div class="container">
  <h2 style="margin: 30px" align="center">Halaman Edit Operator</h2>
  <form class="form-horizontal" action="siswa_edit_up.php" name="input" method="POST" enctype="multipart/form-data" onSubmit="return validasi()">

  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Tanggal Pendaftaran :</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="tgl_pendfataran" value="<?php echo date('d-m-Y'); ?>" required readonly>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Kompetensi Keahlian :</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="kompetensi_keahlian" value="<?= $d['kompetensi_keahlian'] ?>" readonly>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Kompetensi Keahlian Ke-2 :</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="kompetensi_keahlian_2" value="<?= $d['kompetensi_keahlian_2'] ?>" readonly>
    </div>
  </div>

  <?php include '../alert.php' ?>


    <br>
    <h4>A. IDENTITAS CALON PESERTA DIDIK</h4>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">NISN :</label>
      <div class="col-sm-6">
        <input type="hidden" name="id" value="<?= $d['id'] ?>">
        <input type="number" class="form-control" placeholder="NISN" value="<?= $d['nisn'] ?>" name="nisn"  readonly>
        <p>Mohon maaf NISN tidak dapat diganti, jika ingin menganti bisa hubungi operator lewat live chat</p>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Nama Sekolah Asal:</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" placeholder="Nama Sekolah Asal" value="<?= $d['asal_sekolah'] ?>" name="asal_sekolah" id="asal_sekolah" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Nama Calon Peserta Didik :</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" placeholder="Nama" name="nama_siswa"  value="<?= $d['nama_siswa'] ?>" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Jenis Kelamin :</label>
      <div class="col-sm-3">
        <select name="jenis_kelamin" class="form-control" required>
          <option  value="<?= $d['jenis_kelamin'] ?>">Pilihan Awal | <?= $d['jenis_kelamin'] ?></option>
          <option value="Laki-laki">Laki-laki</option>
          <option value="Perempuan">Perempuan</option>
        </select>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Tempat Lahir :</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" placeholder="Tempat Lahir" name="tempat_lahir"   value="<?= $d['tempat_lahir'] ?>" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Tanggal Lahir :</label>
      <div class="col-sm-3">
        <input type="text" name="tgl_lahir" class="form-control datepicker" value="<?= $d['tgl_lahir'] ?>" required/>
      </div>
      (Tanggal/Bulan/Tahun)
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Tahun lulus :</label>
      <div class="col-sm-6">
        <input type="number" class="form-control" placeholder="Tahun lulus" value="<?= $d['tahun_lulus'] ?>" name="tahun_lulus" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Nomor WhatsApp :</label>
      <div class="col-sm-3">
        <input type="number" class="form-control" name="no_hp" placeholder="Nomor WhatsApp"  value="<?= $d['no_hp'] ?>" required>
      </div>
    </div>

    <br>
    <h4>B. KEPENDUDUKAN CALON PESERTA DIDIK</h4>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">NIK :</label>
      <div class="col-sm-6">
        <input type="number" class="form-control" placeholder="NIK siswa dari KK" name="nik" value="<?= $d['nik'] ?>" readonly required>
        <p>Mohon maaf NIK tidak dapat diganti, jika ingin menganti bisa hubungi operator lewat live chat</p>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Nomor Kartu keluarga (KK) :</label>
      <div class="col-sm-6">
        <input type="number" class="form-control" placeholder="Nomor KK" name="no_kk" value="<?= $d['no_kk'] ?>"  required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Tanggal Diterbitkan KK :</label>
      <div class="col-sm-3">
        <input type="text" name="tgl_kk" class="form-control datepicker" value="<?= $d['tgl_kk'] ?>" required/>
      </div>
      (Bulan/Tanggal/Tahun)
    </div>

    <br>
    <h4>D. DATA ALAMAT TEMPAT TINGGAL SESUAI KK CALON PESERTA DIDIK</h4>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Kabupaten/Kota :</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" placeholder="Kabupaten/Kota" name="kota" value="<?= $d['kota'] ?>"  required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Kecamatan :</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" placeholder="Kecamatan" name="kecamatan" value="<?= $d['kecamatan'] ?>" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Kelurahan/Desa :</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" placeholder="Kelurahan/Desa" name="kelurahan" value="<?= $d['kelurahan'] ?>" required>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Alamat :</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" placeholder="Alamat" name="alamat" value="<?= $d['alamat'] ?>"  required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">RT :</label>
      <div class="col-sm-6">
        <input type="number" class="form-control" placeholder="RT" name="rt" value="<?= $d['rt'] ?>" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">RW :</label>
      <div class="col-sm-6">
        <input type="number" class="form-control" placeholder="RW" name="rw" value="<?= $d['rw'] ?>"  required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Jarak Alamat Siswa ke Sekolah :</label><b>Kilo Meter</b>
      <div class="col-sm-4">
        <input type="number" class="form-control" placeholder="Jarak Rumah ke Sekolah" value="<?= $d['jarak_kesekolah'] ?>" name="jarak_kesekolah" required>
      </div>
    </div>

    <br>
    <h4>C. DATA ORANG TUA/WALI CALON PESERTA DIDIK</h4>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Nama Orang Tua/Wali :</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" placeholder="Nama Orang Tua" name="nama_org_tua" value="<?= $d['nama_org_tua'] ?>" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Nomor Hp Orang Tua/Wali :</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" placeholder="Nomor Hp Orang Tua/Wali" name="no_hp_org_tua" value="<?= $d['no_hp_org_tua'] ?>" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Pekerjaan Orang Tua/Wali :</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" placeholder="Pekerjaan Orang Tua" name="pekerjaan_org_tua" value="<?= $d['pekerjaan_org_tua'] ?>" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">PKH/KKS/KIP/Jamsosda<br>(Diisi jika memiliki) :</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" placeholder="PKH/KKS/KIP/Jamsosda" name="kip" value="<?= $d['kip'] ?>">
      </div>
    </div>
    <br>

    <br>
    <h4>F. KONDISI FISIK DAN KEBIASAAN</h4>
    <div class="form-group">
      <label class="control-label col-sm-2">Apakah anda bertindik (bagi laki-laki) </label>
      <div class="col-sm-3">
        <select name="bertindik" class="form-control" required>
          <option value="<?= $d['bertindik'] ?>">Pilihan Awal | <?= $d['bertindik'] ?></option>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
          <option value="Perempuan">Saya Perempuan</option>
        </select>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Apakah anda Perokok </label>
      <div class="col-sm-3">
        <select name="perokok" class="form-control"  required>
          <option value="<?= $d['perokok'] ?>">Pilihan Awal | <?= $d['perokok'] ?></option>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Apakah anda pemakai Psikotropika<br>(Narkoba, Ganja dan sejenisnya) </label>
      <div class="col-sm-3">
        <select name="psikotropika" class="form-control" required>
          <option value="<?= $d['psikotropika'] ?>">Pilihan Awal | <?= $d['psikotropika'] ?></option>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Apakah anda bertato </label>
      <div class="col-sm-3">
        <select name="bertato" class="form-control" required>
          <option value="<?= $d['bertato'] ?>">Pilihan Awal | <?= $d['bertato'] ?></option>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Apakah anda peminum-minuman keras </label>
      <div class="col-sm-3">
        <select name="peminum" class="form-control" required>
          <option value="<?= $d['peminum'] ?>">Pilihan Awal | <?= $d['peminum'] ?></option>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Apakah anda Buta Warna </label>
      <div class="col-sm-3">
        <select name="buta_warna" class="form-control" required>
          <option value="<?= $d['buta_warna'] ?>">Pilihan Awal | <?= $d['buta_warna'] ?></option>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
      </div>
    </div>
      <input type="hidden" class="form-control" value="Bukan Jurusan Teknik Pemesinan" name="tinggi_badan" required>

    </div>
    <br>

    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button style="margin-bottom: 50px" type="submit" name="upload" value="upload" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
</div>

<?php
}
include 'footer.php'
?>
