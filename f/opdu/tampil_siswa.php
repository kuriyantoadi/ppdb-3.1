<?php
include 'header.php';
?>

<div class="container">

    <center>
        <h3>Tampilan Admin Daftar Ulang PPDB SMKN 1 Kragilan</h3>
    </center>

    <?php include '../../alert.php' ?>

    <table class="table table-bordered">
        <?php
        include '../../koneksi.php';
        $id = $_GET['id'];
        $data = mysqli_query($koneksi, "select * from tb_siswa, tb_lolos where tb_siswa.nik=tb_lolos.nik AND tb_siswa.id='$id'");
        while ($d = mysqli_fetch_array($data)) {
        ?>

            <br><br><br>
            <a style="margin-right: 10px;" type="button" class="btn btn-danger btn-md" href="index.php">Kembali</a>
            <a style="margin-right: 10px;" href="../../assets/file/Alur_daftar_ulang.pdf" type="button" class="btn btn-info btn">
                <span class="glyphicon glyphicon-print" aria-hidden="true"></span> Alur Daftar Ulang
            </a>

            <a style="margin-right: 10px;" href="tampil_edit.php?id=<?= $id ?>" type="button" class="btn btn-default btn">
                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit Data
            </a>

            <br> <br>
            <a href="../../daftar/cetak-hasil-pengumuman.php?nik=<?= $d['nik'] ?>" type="button" class="btn btn-primary btn">
                <span class="glyphicon glyphicon-print" aria-hidden="true"></span> Hasil Seleksi
            </a>

            <a style="margin-left: 10px;" href="../../daftar/cetak-pakta-integritas.php?nik=<?= $d['nik'] ?>" type="button" class="btn btn-primary btn">
                <span class="glyphicon glyphicon-print" aria-hidden="true"></span> Pakta Integritas
            </a>
            <a style="margin-left: 10px;" href="" type="button" class="btn btn-primary btn">
                <span class="glyphicon glyphicon-print" aria-hidden="true"></span> Bukti Daftar Ulang
            </a>

            <a style="margin-left: 10px;" href="../../assets/file/F-PESERTA_DIDIK.pdf" type="button" class="btn btn-primary btn">
                <span class="glyphicon glyphicon-print" aria-hidden="true"></span> Formulir Dapodik
            </a>

            <table class="table table-bordered table-hover">
                <tr>
                    <td>Nomor Pendaftaran</td>
                    <td><?php echo $d['no_p']; ?></td>
                </tr>
                <tr>
                    <td>Hasil Seleksi</td>
                    <td>
                        <?php include('tampil-status.php') ?>
                    </td>
                </tr>
                <tr>
                    <th>Nama Calon Peserta Didik</th>
                    <th><?php echo $d['nama_siswa']; ?></th>
                </tr>
                <tr>
                    <th>Diterima di Kompetensi Keahlian</th>
                    <th><?php echo $d['diterima_kompetensi_keahlian']; ?></th>
                </tr>
                <tr>
                    <th>Kompetensi Keahlian Pilihan 1</th>
                    <th><?php echo $d['kompetensi_keahlian']; ?></th>
                </tr>
                <tr>
                    <td>Kompetensi Keahlian Pilihan 2</td>
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
                    <td>Nomor HP</td>
                    <td><?php echo $d['no_hp']; ?></td>
                </tr>
                <tr>
                    <td>NIK</td>
                    <td><?php echo $d['nik']; ?></td>
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
                    <td>Nama Orang Tua / Wali</td>
                    <td><?php echo $d['nama_org_tua']; ?></td>
                </tr>

                <tr>
                    <td>Enkripsi </td>
                    <td><?php echo $d['enk']; ?></td>
                </tr>

            </table>


            <br>
        <?php
        } ?>

</div>
</div>
</div>
</div>


</body>

</html>