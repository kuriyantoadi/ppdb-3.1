<?php


include '../koneksi.php';
// $nisn = isset($_GET['nisn']) ? abs((int) $_GET['nisn']) : 0;
$nik = isset($_GET['nik']) ? abs((int) $_GET['nik']) : 0;

$data_siswa = mysqli_query($koneksi, "select nama_siswa, kompetensi_keahlian from tb_siswa where nik='$nik'");
while ($d_siswa = mysqli_fetch_array($data_siswa)) {

  $nama_siswa = $d_siswa['nama_siswa'];
  $kompetensi_keahlian = $d_siswa['kompetensi_keahlian'];

  switch ($kompetensi_keahlian) {
    case "Akuntansi dan Keuangan Lembaga":
      $kode_jur = "akl";
      $kode_jurusan = "01";
      break;
    case "Otomatisasi dan Tata Kelola Perkantoran":
      $kode_jur = "otkp";
      $kode_jurusan = "02";
      break;
    case "Teknik Komputer dan Jaringan":
      $kode_jur = "tkj";
      $kode_jurusan = "03";
      break;
    case "Rekayasa Perangkat Lunak":
      $kode_jur = "rpl";
      $kode_jurusan = "04";
      break;
    case "Teknik Kendaraan Ringan Otomotif":
      $kode_jur = "tkr";
      $kode_jurusan = "05";
      break;
    case "Teknik Pemesinan":
      $kode_jur = "tpm";
      $kode_jurusan = "06";
      break;
    default:
      $kode_jur = "00";
  }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TANDA TERIMA BERKAS $nama_siswa</title>

    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
</head>
<body>

  <?php
    include '../koneksi.php';
    // $nisn = isset($_GET['nisn']) ? abs((int) $_GET['nisn']) : 0;

    $nik = isset($_GET['nik']) ? abs((int) $_GET['nik']) : 0;
    $data = mysqli_query($koneksi, "select * from tb_siswa where nik='$nik'");
    while ($d = mysqli_fetch_array($data)) {


    ?>

    <div style="max-width: 1000px; margin: auto;">
        <h5 class="text-center my-5">
            TANDA TERIMA BERKAS PENDAFTARAN DAN VALIDASI <br>
            PENERIMAAN PESERTA DIDIK BARU <br>
            SMK NEGERI 1 KRAGILAN <br>
            TAHUN AJARAN 2022/2023
        </h5>

            <table>
            <!-- <table class="table table-bordered"> -->
                <tr>
                    <td width='240px'>NO. PENDAFTARAN/NO TES</td>
                    <td>: <?= $d['no_p'] ?></td>
                </tr>
                <tr>
                    <td>NAMA CALON SISWA</td>
                    <td>: <?= $d['nama_siswa'] ?></td>
                </tr>
                <tr>
                    <td>SEKOLAH ASAL</td>
                    <td>: <?= $d['asal_sekolah'] ?></td>
                </tr>
                <tr>
                    <td>KODE ENKRIPSI</td>
                    <td>: <?= $d['enk'] ?></td>
                </tr>
            </table>

        <table class="table table-bordered border-dark" style="margin-top: 30px">
            <thead class="bg-light text-center">
                <tr>
                    <th>NO</th>
                    <th><center>JENIS BERKAS</th>
                    <th><center>ADA</th>
                    <th><center>TIDAK ADA</th>
                    <th><center>KET</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-center">1</td>
                    <td>Formulir Pendaftaran/ Print Out Pendaftaran</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td class="text-center">2</td>
                    <td>Fotocopy Nilai Rapor 5 Semester</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td class="text-center">3</td>
                    <td>Fotokopi Ijazah/ surat Keterangan Kelulusan (Asli)</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td class="text-center">4</td>
                    <td>Pas Photo 3x4 dua lembar</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td class="text-center">5</td>
                    <td>Fotocopy Kartu Keluarga, KIP, Kartu PKH (jika ada)</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td class="text-center">6</td>
                    <td>Fotocopy Akte Keahiran</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td class="text-center">7</td>
                    <td>Sertifikat Kejuaraan minimal tingkat Kabupaten (Asli) jika ada</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td class="text-center">8</td>
                    <td>Surat Keterangan Sehat dari Dokter</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>

        <p>Catatan.</p>
        <table border="1">
          <tr>
            <td width="700px" height='100px'></td>
          </tr>
        </table>


        <table style="margin-top :30px" border="0" align='center'>
          <tr>
            <td rowspan="2">
              <div style="margin-right: 100px; margin-bottom: 0px">
              </div><center>
              photo 3x4
            </td>
            <td>
              <div style="margin-right: 450px; margin-bottom: 0px">
              </div>
            </td>
            <td>
              Kragilan,
              Juni 2022
							<br>Panitia PPDB</td>
          </tr>
          <tr>
            <td colspan="3">
              <div style="margin-right: 300px; margin-bottom: 100px">
              </div>
            </td>

          </tr>
          <tr>
            <td>

            </td>
            <td>
            </td>
            <td align="center">...........................</td>
          </tr>
        </table>

      <div style="margin-top: 700px">

      </div>

      <h4 align="center">BUKTI PELAKSANAAN KEGIATAN</h4>
      <h4 align="center">SELEKSI KOMPETENSI/TES KHUSUS</h4>
      <h4 align="center">PENERIMAAN PESERTA DIDIK BARU</h4>
      <h4 align="center">SMK NEGERI 1 KRAGILAN</h4>
      <h4 align="center">TAHUN AJARAN 2022</h4>

      <table class="table table-bordered" style="margin-bottom: 30px">
        <tr>
          <td>Nama Peserta</td>
          <th>: <?= $d['nama_siswa'] ?></th>
        </tr>
        <tr>
          <td>Nomor Peserta</td>
          <th>: <?= $d['no_p'] ?></th>
        </tr>
        <tr>
          <td>Kompetensi Keahlian</td>
          <th>: <?= $d['kompetensi_keahlian'] ?></th>
        </tr>
      </table>

      <table class="table table-bordered">
        <tr>
          <th><center>NO</th>
          <th><center>KEGIATAN</th>
          <th><center>SUDAH</th>
          <th><center>BELUM</th>
        </tr>
        <tr>
          <td><center>1</td>
          <td>Test Akademik</td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td><center>2</td>
          <td>Pengumpulan Berkas</td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td><center>3</td>
          <td>Wawancara</td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td><center>4</td>
          <td>Pemeriksaan Tindik</td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td><center>5</td>
          <td>Pemeriksaan Tato</td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td><center>6</td>
          <td>Pemeriksaan Buta Warna</td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td><center>7</td>
          <td>Tinggi Badan</td>
          <td></td>
          <td></td>
        </tr>

      </table>
      <div style="margin-top: 1000px" class="">

      </div>

      <div style="max-width: 1000px; margin: auto;">
          <h5 class="text-center my-5">
              TANDA TERIMA BERKAS PENDAFTARAN DAN VALIDASI <br>
              PENERIMAAN PESERTA DIDIK BARU <br>
              SMK NEGERI 1 KRAGILAN <br>
              TAHUN AJARAN 2022/2023
          </h5>

              <table>
              <!-- <table class="table table-bordered"> -->
                  <tr>
                      <td width='240px'>NO. PENDAFTARAN/NO TES</td>
                      <td>: <?= $d['no_p'] ?></td>
                  </tr>
                  <tr>
                      <td>NAMA CALON SISWA</td>
                      <td>: <?= $d['nama_siswa'] ?></td>
                  </tr>
                  <tr>
                      <td>SEKOLAH ASAL</td>
                      <td>: <?= $d['asal_sekolah'] ?></td>
                  </tr>
                  <tr>
                      <td>KODE ENKRIPSI</td>
                      <td>: <?= $d['enk'] ?></td>
                  </tr>
              </table>

          <table class="table table-bordered border-dark" style="margin-top: 30px">
              <thead class="bg-light text-center">
                  <tr>
                      <th>NO</th>
                      <th><center>JENIS BERKAS</th>
                      <th><center>ADA</th>
                      <th><center>TIDAK ADA</th>
                      <th><center>KET</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td class="text-center">1</td>
                      <td>Formulir Pendaftaran/ Print Out Pendaftaran</td>
                      <td></td>
                      <td></td>
                      <td></td>
                  </tr>
                  <tr>
                      <td class="text-center">2</td>
                      <td>Fotocopy Nilai Rapor 5 Semester</td>
                      <td></td>
                      <td></td>
                      <td></td>
                  </tr>
                  <tr>
                      <td class="text-center">3</td>
                      <td>Fotokopi Ijazah/ surat Keterangan Kelulusan (Asli)</td>
                      <td></td>
                      <td></td>
                      <td></td>
                  </tr>
                  <tr>
                      <td class="text-center">4</td>
                      <td>Pas Photo 3x4 dua lembar</td>
                      <td></td>
                      <td></td>
                      <td></td>
                  </tr>
                  <tr>
                      <td class="text-center">5</td>
                      <td>Fotocopy Kartu Keluarga, KIP, Kartu PKH (jika ada)</td>
                      <td></td>
                      <td></td>
                      <td></td>
                  </tr>
                  <tr>
                      <td class="text-center">6</td>
                      <td>Fotocopy Akte Keahiran</td>
                      <td></td>
                      <td></td>
                      <td></td>
                  </tr>
                  <tr>
                      <td class="text-center">7</td>
                      <td>Sertifikat Kejuaraan minimal tingkat Kabupaten (Asli) jika ada</td>
                      <td></td>
                      <td></td>
                      <td></td>
                  </tr>
                  <tr>
                      <td class="text-center">8</td>
                      <td>Surat Keterangan Sehat dari Dokter</td>
                      <td></td>
                      <td></td>
                      <td></td>
                  </tr>
              </tbody>
          </table>

          <p>Catatan.</p>
          <table border="1">
            <tr>
              <td width="700px" height='100px'></td>
            </tr>
          </table>


          <table style="margin-top :30px" border="0" align='center'>
            <tr>
              <td rowspan="2">
                <div style="margin-right: 100px; margin-bottom: 0px">
                </div><center>
                photo 3x4
              </td>
              <td>
                <div style="margin-right: 450px; margin-bottom: 0px">
                </div>
              </td>
              <td>
                Kragilan,
                Juni 2022
  							<br>Panitia PPDB</td>
            </tr>
            <tr>
              <td colspan="3">
                <div style="margin-right: 300px; margin-bottom: 100px">
                </div>
              </td>

            </tr>
            <tr>
              <td>

              </td>
              <td>
              </td>
              <td align="center">...........................</td>
            </tr>
          </table>

        <div style="margin-top: 700px">

        </div>

        <h4 align="center">BUKTI PELAKSANAAN KEGIATAN</h4>
        <h4 align="center">SELEKSI KOMPETENSI/TES KHUSUS</h4>
        <h4 align="center">PENERIMAAN PESERTA DIDIK BARU</h4>
        <h4 align="center">SMK NEGERI 1 KRAGILAN</h4>
        <h4 align="center">TAHUN AJARAN 2022</h4>

        <table class="table table-bordered" style="margin-bottom: 30px">
          <tr>
            <td>Nama Peserta</td>
            <th>: <?= $d['nama_siswa'] ?></th>
          </tr>
          <tr>
            <td>Nomor Peserta</td>
            <th>: <?= $d['no_p'] ?></th>
          </tr>
          <tr>
            <td>Kompetensi Keahlian</td>
            <th>: <?= $d['kompetensi_keahlian'] ?></th>
          </tr>
        </table>

        <table class="table table-bordered">
          <tr>
            <th><center>NO</th>
            <th><center>KEGIATAN</th>
            <th><center>SUDAH</th>
            <th><center>BELUM</th>
          </tr>
          <tr>
            <td><center>1</td>
            <td>Test Akademik</td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td><center>2</td>
            <td>Pengumpulan Berkas</td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td><center>3</td>
            <td>Wawancara</td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td><center>4</td>
            <td>Pemeriksaan Tindik</td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td><center>5</td>
            <td>Pemeriksaan Tato</td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td><center>6</td>
            <td>Pemeriksaan Buta Warna</td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td><center>7</td>
            <td>Tinggi Badan</td>
            <td></td>
            <td></td>
          </tr>

        </table>

    <?php } ?>
    <script>
        window.print();
    </script>

</body>
</html>
