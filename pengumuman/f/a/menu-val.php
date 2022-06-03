<table>
  <tr>
    <!-- Single button -->
    <td><a type="button" style="margin-right: 10px; margin-bottom: 0px;" class="btn btn-danger btn-md" href="index.php">Kembali</a></td>
    <td>
      <div class="btn-group">
        <button style="margin-right: 10px; margin-bottom: 0px;" type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Validasi <span class="caret"></span>
        </button>
        <ul class="dropdown-menu">
          <li><a href="val-diterima.php?id=<?php echo $d['id'] ?>">Validasi Diterima</a></li>
          <li><a href="val-upload.php?id=<?php echo $d['id'] ?>">Validasi Upload</a></li>
          <li><a href="val-daftarulang.php?id=<?php echo $d['id'] ?>">Validasi Daftar Ulang</a></li>
        </ul>
      </div>
    </td>
    <td><a  onclick="return confirm('Reset Data Upload Siswa <?= $d['nama_siswa'] ?> ?')"
       type="button" style="margin-right: 10px; margin-bottom: 0px;" class="btn btn-warning btn-md" href="reset-upload.php?id=<?= $d['id'] ?>">Reset Upload Berkas</a></td>
    <td><a type="button" style="margin-right: 10px; margin-bottom: 0px;" class="btn btn-primary btn-md" href="../../../assets/file/F-PESERTA_DIDIK.pdf">Formulir Dapodik</a></td>
    <td><a type="button" style="margin-right: 10px; margin-bottom: 0px;" class="btn btn-primary btn-md" href="../../cetak-pakta.php?nik=<?php echo $d['nik'] ?>">Pakta Integritas</a></td>
    <?php if (!empty($d['pdf_pakta'])): ?>
      <td><a type="button" style="margin-right: 10px; margin-bottom: 0px;" class="btn btn-primary btn-md" href="../../cetak-upload-berkas.php?nik=<?php echo $d['nik'] ?>">Bukti Upload Berkas</a></td>
    <?php endif; ?>
  </tr>
</table>

<div class="box">
</div>
