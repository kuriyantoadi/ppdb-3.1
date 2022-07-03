<tr>
    <td>
        <center><?php echo $no++ ?>
    </td>
    <td>
        <center><?php echo $d['nisn']; ?>
    </td>
    <td>
        <center><?php echo $d['nama_siswa']; ?>
    </td>
    <td>
        <center><?php echo $d['diterima_kompetensi_keahlian']; ?>
    </td>
    <td>
        <center><?php echo $d['asal_sekolah']; ?>
    </td>
    <td>
        <center>
            <?php include('tampil-status.php'); ?>
    </td>
    <td>
        <center>
            <?php include('tampil-daftar-ulang.php'); ?>
    </td>
    <td>
        <center>
            <a type="button" class="btn btn-default btn-sm" href="kondisi-daftar-ulang.php?nik=<?= $d['nik'] ?>&kondisi=Belum">Belum</a>
            <a type="button" class="btn btn-success btn-sm" href="kondisi-daftar-ulang.php?nik=<?= $d['nik'] ?>&kondisi=Selesai">Selesai</a>
    </td>
</tr>