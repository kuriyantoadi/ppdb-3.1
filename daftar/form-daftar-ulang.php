<tr>
    <th>Status Daftar Ulang</th>
    <td>
        <?php
        $t_daftar_ulang = $d_seleksi['kondisi_daftar_ulang'];
        if ($t_daftar_ulang == "Selesai") {
            echo "<span style='margin-right: 5px;' class='label label-success'>Daftar Ulang Selesai</span>";
        } else {
            echo "<span style='margin-right: 5px;' class='label label-danger'>Belum Dilakukan</span>";
        }

        ?>
    </td>
</tr>
<tr>
    <th>Informasi Alur Daftar Ulang</th>
    <td>
        <span style='margin-bottom: 5px;' class='label label-danger'>Mohon untuk Alur Daftar Ulang di Download dan Dibaca</span><br>
        <a href="../assets/file/Alur_daftar_ulang.pdf" type="button" class="btn btn-primary btn-sm">
            <span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span> Download
        </a>
    </td>
</tr>

<tr>
    <th>Hasil Pengumuman</th>
    <td>
        <a href="" type="button" class="btn btn-primary btn-sm">
            <span class="glyphicon glyphicon-print" aria-hidden="true"></span> Cetak
        </a>
    </td>
</tr>
<tr>
    <th>Formulir Dapodik</th>
    <td>
        <a href="../assets/file/F-PESERTA_DIDIK.pdf" type="button" class="btn btn-primary btn-sm">
            <span class="glyphicon glyphicon-print" aria-hidden="true"></span> Cetak
        </a>
    </td>
</tr>
<tr>
    <th>Pakta Integritas</th>
    <td>
        <a href="cetak_pakta_integritas_siswa.php?nik=<?= $d['nik'] ?>" type="button" class="btn btn-primary btn-sm">
            <span class="glyphicon glyphicon-print" aria-hidden="true"></span> Cetak
        </a>
    </td>
</tr>
<tr>
    <th>Tanda Terima Berkas Daftar Ulang</th>
    <td>
        <a href="" type="button" class="btn btn-primary btn-sm">
            <span class="glyphicon glyphicon-print" aria-hidden="true"></span> Cetak
        </a>
    </td>
</tr>