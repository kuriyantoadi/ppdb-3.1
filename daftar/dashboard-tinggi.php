<?php
session_start();
if ($_SESSION['status']!="siswa" && $_SESSION['status']!="admin" && $_SESSION['status']!="operator") {
    header("location:index.php?pesan=belum_login");
}
$kode_jurusan = $_SESSION['kode_jurusan'];
$kode_jur = $_SESSION['kode_jur'];
$kompetensi_keahlian = $_SESSION['kompetensi_keahlian'];

include 'header.php';

include '../koneksi.php';
  // $nisn = isset($_GET['nisn']) ? abs((int) $_GET['nisn']) : 0;

  $nik = isset($_GET['nik']) ? abs((int) $_GET['nik']) : 0;
  $data = mysqli_query($koneksi, "select * from tb_siswa where nik='$nik'");
  while ($d = mysqli_fetch_array($data)) {
      ?>

  <?php include '../alert.php'; ?>

  <div class="alert alert-danger" role="alert">
    <b>Jika tombol Tanda Terima Berkas tidak muncul mode print, bisa tekan CTRL + P agar muncul mode Print (wajib di Komputer/Lapotp)</b>
  </div>
  <table>
    <tr>
      <td colspan="2">
        <a type="button" style="margin-right: 10px; margin-bottom: 25px;" class="btn btn-danger btn-md" href="<?= $kode_jur ?>/logout.php">Keluar</a>
        <?php if ($d['kondisi'] == "Pengecekan") { ?>
        <a style="margin-right: 10px; margin-bottom: 25px;" class="btn btn-primary btn-md" href="cetak.php?nik=<?= $d['nik']; ?>">Cetak Bukti Pendaftaran</a>
      <?php }elseif ($d['kondisi'] == "Siswa Lolos Seleksi") { ?>
        <a style="margin-right: 10px; margin-bottom: 25px;" class="btn btn-primary btn-md" href="cetak.php?nik=<?= $d['nik']; ?>">Cetak Bukti Pendaftaran</a>
        <a style="margin-right: 10px; margin-bottom: 25px;" class="btn btn-primary btn-md" href="tanda-terima.php?nik=<?= $d['nik']; ?>">Cetak Tanda Terima Berkas</a>
      <?php } ?>
      </td>
      </td>
      <td>

      </td>
    </tr>
    <tr>
      <td>
        <h4><strong>Info dari operator : </strong></h4>
      </td>
      <td>
        <?php if ($d['catatan_operator'] == '') { ?>
        <h4 style="margin-left: 10px">Tidak ada informasi</h4>
        <?php }else{ ?>
        <h4 style="margin-left: 10px"><?= $d['catatan_operator']; ?></h4>
        <?php } ?>
      </td>
    </tr>



  </table>
  <div class="panel panel-primary">
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

        <?php
        $data_seleksi = mysqli_query($koneksi, "select * from tb_seleksi where nik='$nik'");
        while ($d_seleksi = mysqli_fetch_array($data_seleksi)) {
          ?>
        <tr>
          <th>Wawancara</th>
          <td>

            <?php
            $t_wawancara = $d_seleksi['test_wawancara'];
            if ($t_wawancara == "") {
              echo "<span style='margin-right: 5px;' class='label label-danger'>Belum Wawancara</span>";
            }elseif ($t_wawancara == "Selesai") {
              echo "<span style='margin-right: 5px;' class='label label-success'>Selesai Wawancara</span>";
            }else {
              echo "<br><span style='margin-right: 5px;' class='label label-danger'>ERROR</span>";
            }

             ?>
          </td>
        </tr>
        <tr>
          <th>Test Uji Kompetensi</th>
          <td>
            <?php
            $t_ujikom = $d_seleksi['test_ujikom'];
            if ($t_ujikom == "") {
              echo "<span style='margin-right: 5px;' class='label label-danger'>Belum Uji Kompetensi</span>";
            }elseif ($t_ujikom == "Selesai") {
              echo "<span style='margin-right: 5px;' class='label label-success'>Selesai Uji Kompetensi</span>";
            }else {
              echo "<span style='margin-right: 5px;' class='label label-danger'>ERROR</span>";
            }

             ?>
          </td>
        </tr>
        <?php } ?>

        <tr>
          <th>Catatan Operator</th>
          <td>
            <h4 style="margin-left: 10px"><?= $d['catatan_operator']; ?></h4>
          </td>
        </tr>
      </table>
    </div>
  </div>


      <?php
        //validasi jika Reset Data kosong
        if ($d['kondisi'] == "Reset Data") {
            include 'form-edit-tinggi.php';
        }else{
          include ('form-lihat-data-tinggi.php');
        }
      }

       ?>

  </form>
</div>

<?php include ('live-chat.php') ?>
<?php include 'footer.php' ?>
