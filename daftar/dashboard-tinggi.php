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
