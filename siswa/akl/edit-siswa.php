<?php
session_start();
if ($_SESSION['status']!="siswa") {
    header("location:../../login/akl/index.php?pesan=belum_login");
}

include '../header.php';
?>

  <div class="container">

    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3">
          <center><img style="margin-top: 25px;" src="../../assets/images/logo-banten.png" />
        </div>
        <div class="col-md-6">
          <center>
            <h2 style="margin-top:  25px;"><b>SMK Negeri 1 Kragilan</b></h2>
          </center>
          <center>
            <h4><b>Form Seleksi Administrasi</b></h4>
          </center>
          <center>
            <h4><b>Calon Peserta Didik Baru</b></h4>
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
          <center><img style="margin-bottom:  80px; margin-top:  25px;" class="img-fluid" src="../../assets/images/logo-smkn1.png" />
        </div>
      </div>
    </div>

    <form class="form-horizontal" action="update-siswa.php" name="input" method="POST" enctype="multipart/form-data" onSubmit="return validasi()">

      <?php
      include '../../koneksi.php';
      $nik = isset($_GET['nik']) ? abs((int) $_GET['nik']) : 0;
      $data = mysqli_query($koneksi, "select
      id,
      no_p,
      tgl_pendaftaran,
      kompetensi_keahlian,
      asal_sekolah,
      npsn_sekolah,
      nisn,
      nama_siswa,
      jenis_kelamin,
      tgl_lahir,
      tempat_lahir,
      tahun_lulus,
      no_hp,
      nik,
      no_kk,
      tgl_kk,
      kota,
      kecamatan,
      kelurahan,
      kode_pos,
      alamat,
      rt,
      rw,
      jarak_kesekolah,
      nama_org_tua,
      pekerjaan_org_tua,
      kip,
      pdf_skhun,
      pdf_surat_dokter,
      pdf_kk,
      pdf_akta,
      pdf_photo,
      pdf_swa_kk,
      pdf_piagam1,
      pdf_piagam2,
      pdf_piagam3,
      un_bind,
      un_bing,
      un_mtk,
      un_ipa,
      id,
      username,
      password,
      enk,
      bertindik,
      psikotropika,
      bertato,
      perokok,
      peminum,
      buta_warna,
      kompetensi_keahlian_2
       from f_siswa_akl where nik='$nik'");
      while ($d = mysqli_fetch_array($data)) {
          //validasi jika npsn kosong
          $cek_npsn = $d['npsn_sekolah'];
          if (!empty($cek_npsn)) {
              include('akl-tampil.php');
              exit;
          } ?>

      <div class="form-group">
        <label class="control-label col-sm-2" for="email">Nomor Pendaftaran :</label>
        <div class="col-sm-6">
          <input type="text" name="id" value="<?php echo $d['id']; ?>" hidden>
          <input type="text" class="form-control" name="no_p" value="<?php echo $d['no_p']; ?>" id="no_p" readonly>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="email">Tanggal Pendaftaran :</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="tgl_pendfataran" value="<?php echo date('d-m-Y'); ?>" readonly>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="email">Kompetensi Keahlian :</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="kompetensi_keahlian" value="<?php echo $d['kompetensi_keahlian']; ?>" readonly>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="email">Kompetensi Keahlian Ke-2 :</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="kompetensi_keahlian_2" value="<?php echo $d['kompetensi_keahlian_2']; ?>" readonly>
        </div>
      </div>

      <br>
      <h4>A. DATA ASAL SEKOLAH CALON PESERTA DIDIK</h4>
      <div class="form-group">
        <label class="control-label col-sm-2" for="email">Nama Asal Sekolah :</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" placeholder="Nama Asal Sekolah" name="asal_sekolah" id="asal_sekolah" value="<?php echo $d['asal_sekolah']; ?>" readonly>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="email">NPSN Sekolah Asal :</label>
        <div class="col-sm-6">
          <input type="number" class="form-control" placeholder="NPSN Sekolah Asal" name="npsn_sekolah" value="<?php echo $d['npsn_sekolah']; ?>" required>
        </div>
      </div>

      <br>
      <h4>B. IDENTITAS CALON PESERTA DIDIK</h4>
      <div class="form-group">
        <label class="control-label col-sm-2" for="email">NISN :</label>
        <div class="col-sm-6">
          <input type="number" class="form-control" placeholder="NISN" name="nisn" value="<?php echo $d['nisn']; ?>" readonly>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="email">Nama Calon Peserta Didik :</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" placeholder="Nama" name="nama_siswa" value="<?php echo $d['nama_siswa']; ?>" readonly>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="email">Jenis Kelamin :</label>
        <div class="col-sm-3">
          <select name="jenis_kelamin" class="form-control" required>
            <?php if (empty($d['jenis_kelamin'])){  ?>
              <option value="">Pilih</option>
            <?php }else{ ?>
              <option value="<?= $d['jenis_kelamin'] ?>">Pilihan Awal | <?= $d['jenis_kelamin'] ?></option>
            <?php } ?>

            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="email">Tempat Lahir :</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" placeholder="Tempat Lahir" name="tempat_lahir" value="<?php echo $d['tempat_lahir']; ?>" readonly>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="email">Tanggal Lahir :</label>
        <div class="col-sm-3">
          <input type="text" name="tgl_lahir" value="<?php echo $d['tgl_lahir']; ?>" class="form-control datepicker" required/>
        </div>
        (Tanggal/Bulan/Tahun)
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="email">Tahun lulus :</label>
        <div class="col-sm-6">
          <input type="number" class="form-control" placeholder="Tahun lulus" name="tahun_lulus" value="<?php echo $d['tahun_lulus']; ?>" readonly>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="email">Nomor WhatsApp :</label>
        <div class="col-sm-3">
          <input type="number" class="form-control" name="no_hp" placeholder="Nomor WhatsApp" value="<?= $d['no_hp'] ?>" required>
        </div>
      </div>


      <br>
      <h4>C. KEPENDUDUKAN CALON PESERTA DIDIK</h4>
      <div class="form-group">
        <label class="control-label col-sm-2" for="email">NIK :</label>
        <div class="col-sm-6">
          <input type="number" class="form-control" placeholder="NIK siswa dari KK" name="nik" value="<?php echo $d['nik']; ?>" readonly>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="email">Nomor Kartu keluarga (KK) :</label>
        <div class="col-sm-6">
          <input type="number" class="form-control" placeholder="Nomor KK" name="no_kk" value="<?php echo $d['no_kk']; ?>" readonly>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="email">Tanggal Diterbitkan KK :</label>
        <div class="col-sm-3">
          <input type="text" name="tgl_kk" value="<?php echo $d['tgl_kk']; ?>" class="form-control datepicker" readonly/>
        </div>
        (Bulan/Tanggal/Tahun)
      </div>

      <br>
      <h4>D. DATA ALAMAT TEMPAT TINGGAL SESUAI KK CALON PESERTA DIDIK</h4>
      <div class="form-group">
        <label class="control-label col-sm-2" for="email">Kabupaten/Kota :</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" placeholder="Kabupaten/Kota" name="kota" value="<?php echo $d['kota']; ?>" readonly>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="email">Kecamatan :</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" placeholder="Kecamatan" name="kecamatan" value="<?php echo $d['kecamatan']; ?>" readonly>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="email">Kelurahan/Desa :</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" placeholder="Kelurahan/Desa" name="kelurahan" value="<?php echo $d['kelurahan']; ?>" readonly>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="email">Kode POS :</label>
        <div class="col-sm-6">
          <input type="number" class="form-control" placeholder="Kode POS" name="kode_pos" value="<?php echo $d['kode_pos']; ?>" required>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="email">Alamat :</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" placeholder="Alamat" name="alamat" value="<?php echo $d['alamat']; ?>" readonly>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="email">RT :</label>
        <div class="col-sm-6">
          <input type="number" class="form-control" placeholder="RT" name="rt" value="<?php echo $d['rt']; ?>" required>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="email">RW :</label>
        <div class="col-sm-6">
          <input type="number" class="form-control" placeholder="RW" name="rw" value="<?php echo $d['rw']; ?>" required>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="email">Jarak Alamat Siswa ke Sekolah :</label><b>Kilo Meter</b>
        <div class="col-sm-4">
          <input type="number" class="form-control" placeholder="Jarak Rumah ke Sekolah" name="jarak_kesekolah" value="<?= $d['jarak_kesekolah'] ?>" required>
        </div>
      </div>

      <br>
      <h4>D. DATA ORANG TUA/WALI CALON PSERTA DIDIK</h4>
      <div class="form-group">
        <label class="control-label col-sm-2" for="email">Nama Orang Tua/Wali :</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" placeholder="Nama Orang Tua" name="nama_org_tua" value="<?php echo $d['nama_org_tua']; ?>" required>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="email">Nomor Hp Orang Tua/Wali :</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" placeholder="Nomor Hp Orang Tua/Wali" name="no_hp_org_tua" value="<?php echo $d['pekerjaan_org_tua']; ?>" required>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="email">Pekerjaan Orang Tua/Wali :</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" placeholder="Pekerjaan Orang Tua" name="pekerjaan_org_tua" value="<?php echo $d['pekerjaan_org_tua']; ?>" required>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="email">PKH/KKS/KIP/Jamsosda<br>(Diisi jika memiliki) :</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" placeholder="PKH/KKS/KIP/Jamsosda" name="kip" value="<?php echo $d['kip']; ?>">
        </div>
      </div>

      <br>

      <h4>F. INPUT SCAN BERKAS CALON PESERTA DIDIK</h4>
      <div class="form-group">
        <label class="control-label col-sm-2">SKHUN atau Surat Keterangan Lulus</label>
        <div class="col-sm-6">
          <input type="file" name="pdf_skhun" accept="application/pdf" class="form-control-file" id="cek_skhu" required>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2">Surat Sehat dari Dokter Pemerintah</label>
        <div class="col-sm-6">
          <input type="file" name="pdf_surat_dokter" accept="application/pdf" class="form-control-file" id="cek_surat_dokter" required>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2">Kartu Keluarga (KK) </label>
        <div class="col-sm-6">
          <input type="file" name="pdf_kk" accept="application/pdf" class="form-control-file" id="cek_kk" required>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2">Akta Kelahiran </label>
        <div class="col-sm-6">
          <input type="file" name="pdf_akta" accept="application/pdf" class="form-control-file" id="cek_akta" required>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2">Photo </label>
        <div class="col-sm-6">
          <input type="file" name="pdf_photo" accept="application/pdf" class="form-control-file" id="cek_photo" required>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2">Swafoto memegang KK Sedang diukur tinggi badan </label>
        <div class="col-sm-6">
          <input type="file" name="pdf_swa_kk" accept="application/pdf" class="form-control-file" id="cek_swa_kk" required>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2">Piagam 1 </label>
        <div class="col-sm-6">
          <input type="file" name="pdf_piagam1" accept="application/pdf" class="form-control-file" id="cek_piagam1">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2">Piagam 2</label>
        <div class="col-sm-6">
          <input type="file" name="pdf_piagam2" accept="application/pdf" class="form-control-file" id="cek_piagam2">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2">Piagam 3 </label>
        <div class="col-sm-6">
          <input type="file" name="pdf_piagam3" accept="application/pdf" class="form-control-file" id="cek_piagam3">
        </div>
      </div>
      <h6><b>Informasi :</h6>
      <h6>1. File harus dengan format <b>.pdf</b> dengan ukuran maksimal <b>500 kb</b></h6>
      <h6>2. Dokumen yang di <b>Scan Harus Asli (bukan Photo Copy)</b></h6>
      <h6>3. Piagam boleh dikosongkan</h6>
      <h6>4. Piagam hasil perlombaan dan/atau penghargaan di bidang akademik maupun non akademik</h6>
      <h6>5. Contoh swa photo dapat dilihat di link berikut(belum di kerjakan)</h6>
      <h6>6. Surat sehat harus ditandatangani oleh dokter pemerintah.</h6>

      <br>
      <h4>G. INPUT NILAI UJIAN NASIONAL PESERTA DIDIK</h4>
      <div class="form-group">
        <label class="control-label col-sm-2">Nilai Bahasa Indonesia </label>
        <div class="col-sm-3">
          <input type="number" class="form-control" placeholder="Nilai Bahasa Indonesia" name="un_bind" value="<?= $d['un_bind'] ?>" required>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2">Nilai Bahasa Inggris </label>
        <div class="col-sm-3">
          <input type="number" class="form-control" placeholder="Nilai Bahasa Inggris" name="un_bing" value="<?= $d['un_bing'] ?>" required>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2">Nilai Matematika </label>
        <div class="col-sm-3">
          <input type="number" class="form-control" placeholder="Nilai Matematika" name="un_mtk" value="<?= $d['un_mtk'] ?>" required>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2">Nilai IPA </label>
        <div class="col-sm-3">
          <input type="number" class="form-control" placeholder="Nilai IPA" name="un_ipa" value="<?= $d['un_ipa'] ?>" required>
        </div>
      </div>
      <br>
      <h4>H. KONDISI FISIK DAN KEBIASAAN</h4>
      <div class="form-group">
        <label class="control-label col-sm-2">Apakah anda bertindik (bagi laki-laki) </label>
        <div class="col-sm-3">
          <select name="bertindik" class="form-control" required>
            <?php if (empty($d['bertindik'])){  ?>
              <option value="">Pilihan Anda</option>
            <?php }else{ ?>
              <option value="<?= $d['bertindik'] ?>">Pilihan Awal | <?= $d['bertindik'] ?></option>
            <?php } ?>
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
            <?php if (empty($d['perokok'])){  ?>
              <option value="">Pilihan Anda</option>
            <?php }else{ ?>
              <option value="<?= $d['perokok'] ?>">Pilihan Awal | <?= $d['perokok'] ?></option>
            <?php } ?>
            <option value="Ya">Ya</option>
            <option value="Tidak">Tidak</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2">Apakah anda pemakai Psikotropika<br>(Narkoba, Ganja dan sejenisnya) </label>
        <div class="col-sm-3">
          <select name="psikotropika" class="form-control" required>
            <?php if (empty($d['psikotropika'])){  ?>
              <option value="">Pilihan Anda</option>
            <?php }else{ ?>
              <option value="<?= $d['psikotropika'] ?>">Pilihan Awal | <?= $d['psikotropika'] ?></option>
            <?php } ?>
            <option value="Ya">Ya</option>
            <option value="Tidak">Tidak</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2">Apakah anda bertato </label>
        <div class="col-sm-3">
          <select name="bertato" class="form-control" required>
            <?php if (empty($d['bertato'])){  ?>
              <option value="">Pilihan Anda</option>
            <?php }else{ ?>
              <option value="<?= $d['bertato'] ?>">Pilihan Awal | <?= $d['bertato'] ?></option>
            <?php } ?>
            <option value="Ya">Ya</option>
            <option value="Tidak">Tidak</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2">Apakah anda peminum-minuman keras </label>
        <div class="col-sm-3">
          <select name="peminum" class="form-control" required>
            <?php if (empty($d['peminum'])){  ?>
              <option value="">Pilihan Anda</option>
            <?php }else{ ?>
              <option value="<?= $d['peminum'] ?>">Pilihan Awal | <?= $d['peminum'] ?></option>
            <?php } ?>
            <option value="Ya">Ya</option>
            <option value="Tidak">Tidak</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2">Apakah anda Buta Warna </label>
        <div class="col-sm-3">
          <select name="buta_warna" class="form-control" required>
            <?php if (empty($d['buta_warna'])){  ?>
              <option value="">Pilihan Anda</option>
            <?php }else{ ?>
              <option value="<?= $d['buta_warna'] ?>">Pilihan Awal | <?= $d['buta_warna'] ?></option>
            <?php } ?>
            <option value="Ya">Ya</option>
            <option value="Tidak">Tidak</option>
          </select>
        </div>
      </div>
      <br>

      <?php
      } ?>

      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" name="upload" value="upload" class="btn btn-default">Submit</button>
        </div>
      </div>
    </form>
  </div>

<?php include '../footer.php' ?>
