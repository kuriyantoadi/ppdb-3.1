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
            <a type="button" class="btn btn-primary btn-sm" href="tampil_siswa.php?id=<?= $d['id'] ?>&kode_jur=akl">Lihat</a>
    </td>
</tr>