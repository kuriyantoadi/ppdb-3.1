<?php
session_start();
if ($_SESSION['status']!="siswa" && $_SESSION['status']!="admin" && $_SESSION['status']!="operator") {
    header("location:index.php?pesan=belum_login");
}
$kode_jurusan = $_SESSION['kode_jurusan'];
$kompetensi_keahlian = $_SESSION['kompetensi_keahlian'];

include '../header.php';

?>



  <?php
    include '../../koneksi.php';
    $nik = isset($_GET['nik']) ? abs((int) $_GET['nik']) : 0;
    $cek_kartu = mysqli_query($koneksi, "select
    id,
    nisn,
    tgl_lahir,
    catatan_operator,
    nik
    from tb_siswa where nik='$nik'");


    ?>

  <br><br><br>
  <table>
    <tr>
      <td><a type="button" style="margin-right: 10px; margin-bottom: 25px;" class="btn btn-danger btn-md" href="logout.php">Keluar</a>
        <?php
          while ($d1 = mysqli_fetch_array($cek_kartu)) {
              //validasi jika npsn kosong
              $cek_tgl_lahir = $d1['tgl_lahir'];
              if ($cek_tgl_lahir) {
          ?>
        <a style="margin-right: 10px; margin-bottom: 25px;" class="btn btn-primary btn-md" href="cetak.php?nik=<?= $d1['nik']; ?>">Cetak Bukti Pendaftaran</a>
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
        <?php if ($d1['catatan_operator'] == '') { ?>
        <h4 style="margin-left: 10px">Tidak ada informasi</h4>
        <?php }else{ ?>
        <h4 style="margin-left: 10px"><?= $d1['catatan_operator']; ?></h4>
        <?php } ?>
      </td>
    </tr>
    <?php
  }
    ?>
  </table>

  <?php

      $data = mysqli_query($koneksi, "select * from tb_siswa where nik='$nik'");
      while ($d = mysqli_fetch_array($data)) {
          //validasi jika npsn kosong
          $cek_tgl_lahir = $d['tgl_lahir'];
          if (!empty($cek_tgl_lahir)) {
              include('../form-lihat-data.php');
          }else{
            include '../form-edit.php';
          }
       }
       ?>

  </form>
</div>

<?php include '../footer.php' ?>
