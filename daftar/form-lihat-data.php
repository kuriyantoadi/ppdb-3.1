<div class="panel panel-success">
  <div class="panel-heading">
    <h3 class="panel-title">Status Pendaftaran</h3>
  </div>
  <div class="panel-body">
    <table class="table table-bordered">
      <tr>
        <th width='250px'>Pendaftaran</th>
        <td>
          <?php include('../f/tampil-validasi.php'); ?>
        </td>
      </tr>
      <tr>
        <th>Catatan Operator</th>
        <td>
          <h4 style="margin-left: 10px"><?= $d['catatan_operator']; ?></h4>
        </td>
      </tr>
    </table>
  </div>
</div>

<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Data Pribadi</h3>
  </div>
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
        <!-- htmlentities([$nama],ENT_QUOTES) -->

        <!-- echo htmlentities([$nama],ENT_QUOTES); -->
        <td><?php echo htmlentities($d['nama_siswa'],ENT_QUOTES); ?></td>
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
    </table>

  </div>
</div>



<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Data Nilai Rapor</h3>
  </div>
  <div class="panel-body">

    <table class="table table-bordered">
      <tr>
        <th colspan="2">Nilai Semester 1</th>
      </tr>
      <tr>
        <td width="250px">Agama</td>
        <td><?php echo $d['sem1_agama']; ?></td>
      </tr>
      <tr>
        <td>Bahasa Indonesia</td>
        <td><?php echo $d['sem1_b_indo']; ?></td>
      </tr>
      <tr>
        <td>Matematika</td>
        <td><?php echo $d['sem1_mtk']; ?></td>
      </tr>
      <tr>
        <td>IPA</td>
        <td><?php echo $d['sem1_ipa']; ?></td>
      </tr>
      <tr>
        <td>Bahasa Inggris</td>
        <td><?php echo $d['sem1_b_ing']; ?></td>
      </tr>
    </table>

    <table class="table table-bordered">
      <tr>
        <th colspan="2">Nilai Semester 2</th>
      </tr>
      <tr>
        <td width="250px">Agama</td>
        <td><?php echo $d['sem2_agama']; ?></td>
      </tr>
      <tr>
        <td>Bahasa Indonesia</td>
        <td><?php echo $d['sem2_b_indo']; ?></td>
      </tr>
      <tr>
        <td>Matematika</td>
        <td><?php echo $d['sem2_mtk']; ?></td>
      </tr>
      <tr>
        <td>IPA</td>
        <td><?php echo $d['sem2_ipa']; ?></td>
      </tr>
      <tr>
        <td>Bahasa Inggris</td>
        <td><?php echo $d['sem2_b_ing']; ?></td>
      </tr>
    </table>

    <table class="table table-bordered">
      <tr>
        <th colspan="2">Nilai Semester 3</th>
      </tr>
      <tr>
        <td width="250px">Agama</td>
        <td><?php echo $d['sem3_agama']; ?></td>
      </tr>
      <tr>
        <td>Bahasa Indonesia</td>
        <td><?php echo $d['sem3_b_indo']; ?></td>
      </tr>
      <tr>
        <td>Matematika</td>
        <td><?php echo $d['sem3_mtk']; ?></td>
      </tr>
      <tr>
        <td>IPA</td>
        <td><?php echo $d['sem3_ipa']; ?></td>
      </tr>
      <tr>
        <td>Bahasa Inggris</td>
        <td><?php echo $d['sem3_b_ing']; ?></td>
      </tr>
    </table>

    <table class="table table-bordered">
      <tr>
        <th colspan="2">Nilai Semester 4</th>
      </tr>
      <tr>
        <td width="250px">Agama</td>
        <td><?php echo $d['sem4_agama']; ?></td>
      </tr>
      <tr>
        <td>Bahasa Indonesia</td>
        <td><?php echo $d['sem4_b_indo']; ?></td>
      </tr>
      <tr>
        <td>Matematika</td>
        <td><?php echo $d['sem4_mtk']; ?></td>
      </tr>
      <tr>
        <td>IPA</td>
        <td><?php echo $d['sem4_ipa']; ?></td>
      </tr>
      <tr>
        <td>Bahasa Inggris</td>
        <td><?php echo $d['sem4_b_ing']; ?></td>
      </tr>
    </table>

    <table class="table table-bordered">
      <tr>
        <th colspan="2">Nilai Semester 5</th>
      </tr>
      <tr>
        <td width="250px">Agama</td>
        <td><?php echo $d['sem5_agama']; ?></td>
      </tr>
      <tr>
        <td>Bahasa Indonesia</td>
        <td><?php echo $d['sem5_b_indo']; ?></td>
      </tr>
      <tr>
        <td>Matematika</td>
        <td><?php echo $d['sem5_mtk']; ?></td>
      </tr>
      <tr>
        <td>IPA</td>
        <td><?php echo $d['sem5_ipa']; ?></td>
      </tr>
      <tr>
        <td>Bahasa Inggris</td>
        <td><?php echo $d['sem5_b_ing']; ?></td>
      </tr>
    </table>

  </div>
</div>

<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Data Kondisi Fisik dan Kepribadian</h3>
  </div>
  <div class="panel-body">
    <table class="table table-bordered">
      <tr>
        <td width='250px'>Enkripsi </td>
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

<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Data Berkas Upload</h3>
  </div>
  <div class="panel-body">

    <table class="table table-bordered">
    <tr>
      <td  width='250px'>SKHUN</td>
      <td>
        <a href="../../assets/file_upload/<?= $kode_jurusan ?>/<?= $d['pdf_skhun'] ?>" class="btn btn-primary">Download</a>
      </td>
    </tr>
    <tr>
      <td>Surat Sehat dari Dokter</td>
      <td>
        <a href="../../assets/file_upload/<?= $kode_jurusan ?>/<?= $d['pdf_skhun'] ?>" class="btn btn-primary">Download</a>
      </td>
    </tr>
    <tr>
      <td>Kartu Keluarga</td>
      <td>
        <a href="../../assets/file_upload/<?= $kode_jurusan ?>/<?= $d['pdf_kk'] ?>" class="btn btn-primary">Download</a>
      </td>
    </tr>
    <tr>
      <td>Akta Kelahiran</td>
      <td>
        <a href="../../assets/file_upload/<?= $kode_jurusan ?>/<?= $d['pdf_akta'] ?>" class="btn btn-primary">Download</a>
      </td>
    </tr>
    <tr>
      <td>Photo</td>
      <td>
        <a href="../../assets/file_upload/<?= $kode_jurusan ?>/<?= $d['pdf_photo'] ?>" class="btn btn-primary">Download</a>
      </td>
    </tr>

    <tr>
      <td>Rapor Semester 1</td>
      <td>
        <a href="../../assets/file_upload/<?= $kode_jurusan ?>/<?= $d['pdf_rapor_1'] ?>" class="btn btn-primary">Download</a>
      </td>
    </tr>
    <tr>
      <td>Rapor Semester 2</td>
      <td>
        <a href="../../assets/file_upload/<?= $kode_jurusan ?>/<?= $d['pdf_rapor_2'] ?>" class="btn btn-primary">Download</a>
      </td>
    </tr>
    <tr>
      <td>Rapor Semester 3</td>
      <td>
        <a href="../../assets/file_upload/<?= $kode_jurusan ?>/<?= $d['pdf_rapor_3'] ?>" class="btn btn-primary">Download</a>
      </td>
    </tr>
    <tr>
      <td>Rapor Semester 4</td>
      <td>
        <a href="../../assets/file_upload/<?= $kode_jurusan ?>/<?= $d['pdf_rapor_4'] ?>" class="btn btn-primary">Download</a>
      </td>
    </tr>
    <tr>
      <td>Rapor Semester 5</td>
      <td>
        <a href="../../assets/file_upload/<?= $kode_jurusan ?>/<?= $d['pdf_rapor_5'] ?>" class="btn btn-primary">Download</a>
      </td>
    </tr>

    <tr>
      <td>KIP</td>
      <td>
        <?php if (empty($d['pdf_kip'])) {
          echo "File tidak ada";
        }else{ ?>
        <a href="../../assets/file_upload/<?= $kode_jurusan ?>/<?= $d['pdf_kip'] ?>" class="btn btn-primary">Download</a>
        <?php } ?>
      </td>
    </tr>
    <tr>
      <td>Piagam 1</td>
      <td>
        <?php if (empty($d['pdf_piagam1'])) {
          echo "File tidak ada";
        }else{ ?>
        <a href="../../assets/file_upload/<?= $kode_jurusan ?>/<?= $d['pdf_piagam1'] ?>" class="btn btn-primary">Download</a>
        <?php } ?>
      </td>
    </tr>
    <tr>
      <td>Piagam 2</td>
      <td>
        <?php if (empty($d['pdf_piagam2'])) {
          echo "File tidak ada";
        }else{ ?>
        <a href="../../assets/file_upload/<?= $kode_jurusan ?>/<?= $d['pdf_piagam2'] ?>" class="btn btn-primary">Download</a>
        <?php } ?>
      </td>
    </tr>
    <tr>
      <td>Piagam 3</td>
      <td>
        <?php if (empty($d['pdf_piagam2'])) {
          echo "File tidak ada";
        }else{ ?>
        <a href="../../assets/file_upload/<?= $kode_jurusan ?>/<?= $d['pdf_piagam3'] ?>" class="btn btn-primary">Download</a>
        <?php } ?>
      </td>
    </tr>
  </table>

  </div>
</div>
