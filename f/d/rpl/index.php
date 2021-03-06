<?php
ob_start();
session_start();
if ($_SESSION['status']!="rpl") {
    header("location:../../index.php?pesan=belum_login");
}

include '../header.php';
?>

  <div class="container">
    <center>
      <h2>Tampilan Operator PPDB SMKN 1 Kragilan</h2>
    </center>
    <center>
      <h3></h3>
    </center>
    <center>
      <h3>Kompetensi Keahlian Rekayasa Perangkat Lunak</h3>
    </center>

    <br><br><br>

    <div class="form-group">
      <?php include '../../../alert.php' ?>
      <div class="col-sm-7">
        <a href="../../logout.php" type="button" class="btn btn-danger">Logout</a>
        <a href="../../e/tkj/tkj-lap.php" type="button" class="btn btn-success"
        onclick="return confirm('Download Data PPDB Kompetensi Keahlian Teknik Komputer dan Jaringan ?')">Download RPL</a>
      </div>
      <label class="control-label col-sm-2" for="email">Cari Peserta Calon Peserta Didik :</label>
      <div class="col-sm-3">
        <input type='text' class="form-control" id='input' onkeyup='searchTable()'>
      </div>
    </div>


    <table class="table table-bordered table-hover" id="domainsTable">
      <thead>
        <tr>
          <th>
            <center>No
          </th>
          <!-- <th>
            <center>Nomor Pendaftaran
          </th> -->
          <th>
            <center>Tanggal Pendaftaran
          </th>
          <th>
            <center>NISN Siswa
          </th>
          <th>
            <center>Nama Siswa
          </th>
          <th>
            <center>Kompetensi Keahlian
          </th>
          <th>
            <center>Asal Sekolah
          </th>
          <th>
            <center>Kondisi
          </th>
          <!-- <th>
            <center>Hapus
          </th> -->
          <th>
            <center>Edit
          </th>
          <th>
            <center>Lihat
          </th>
        </tr>
      </thead>
      <tbody>
        <?php
      include '../../../koneksi.php';
    $halperpage = 500;
    $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
    $mulai = ($page>1) ? ($page * $halperpage) - $halperpage : 0;
    $result = mysqli_query($koneksi, "SELECT * FROM tb_siswa where kompetensi_keahlian='Rekayasa Perangkat Lunak'");
    $total = mysqli_num_rows($result);
    $pages = ceil($total/$halperpage);

    $data = mysqli_query($koneksi, "SELECT * from tb_siswa where kompetensi_keahlian='Rekayasa Perangkat Lunak' ORDER BY nisn DESC LIMIT $mulai, $halperpage ");
    $no = $mulai+1;


    while ($d = mysqli_fetch_array($data)) {
        ?>

        <tr>
          <td>
            <center><?php echo $no++ ?>
          </td>
          <!-- <td>
            <center><?php echo $d['no_p']; ?>
          </td> -->
          <td>
            <center><?php echo $d['tgl_pendaftaran']; ?>
          </td>
          <td>
            <center><?php echo $d['nisn']; ?>
          </td>
          <td>
            <center><?php echo $d['nama_siswa']; ?>
          </td>
          <td>
            <center><?php echo $d['kompetensi_keahlian']; ?>
          </td>
          <td>
            <center><?php echo $d['asal_sekolah']; ?>
          </td>
          <td>
            <center>
              <?php include('../../tampil-validasi.php'); ?>
          </td>
          <!-- <td>
            <a type="button"   onclick="return confirm('Hapus Data Siswa <?= $d['nama_siswa'] ?> ?')"
            class="btn btn-danger btn-sm" href="hapus.php?id=<?php echo $d['id']; ?>">Hapus</a>
          </td> -->
          <td>
            <a type="button" class="btn btn-primary btn-sm" href="../../siswa_edit.php?id=<?php echo $d['id']; ?>">Edit</a>
          </td>
          <td>
            <center>
              <a type="button"  class="btn btn-info btn-sm" href="../../siswa_lihat.php?id=<?php echo $d['id']; ?>">Lihat</a>
          </td>
        </tr>

        <?php
    } ?>
      </tbody>
    </table>
    <div>
      <?php for ($i=1; $i<=$pages ; $i++) {
        ?>
      <a class="btn btn-info btn-md" href="?halaman=<?php echo $i; ?>"><?php echo $i; ?></a>
      <?php
    } // database

  ?>
    </div>
  </div>
  <?php include '../footer.php' ?>
