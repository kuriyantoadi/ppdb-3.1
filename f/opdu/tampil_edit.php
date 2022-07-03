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

            <a style="margin-right: 10px;" href="tampil_siswa.php?id=<?= $id ?>" type="button" class="btn btn-default btn">
                <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> Lihat Data
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


            <form action="tampil_edit_up.php" method="POST">
                <table class="table table-bordered">
                    <tr>
                        <td colspan="2">
                            <h4 style="text-align: center;">Edit Data Hasil Seleksi</h4>
                        </td>
                    </tr>
                    <tr>
                        <th>Hasil Seleksi</th>
                        <td>
                            <input type="hidden" name="nik" value="<?= $d['nik'] ?>">
                            <input type="hidden" name="id" value="<?= $d['id'] ?>">
                            
                            <select name="status" id="" class="form-control" require>
                                <option value="<?= $d['status'] ?>">Pilihan Awal | <?= $d['status'] ?></option>
                                <option value="Diterima">Diterima</option>
                                <option value="Tidak Diterima">Tidak Diterima</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <th>Kompetensi Keahlian</th>
                        <td>
                            <select name="diterima_kompetensi_keahlian" id="" class="form-control" require>
                                <option value="<?= $d['diterima_kompetensi_keahlian'] ?>">Pilihan Awal | <?= $d['diterima_kompetensi_keahlian'] ?></option>
                                <option value="Akuntansi dan Keuangan Lembaga">Akuntansi dan Keuangan Lembaga</option>
                                <option value="Otomatisasi dan Tata Kelola Perkantoran">Otomatisasi dan Tata Kelola Perkantoran</option>
                                <option value="Teknik Komputer dan Jaringan">Teknik Komputer dan Jaringan</option>
                                <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                                <option value="Teknik Kendaraan Ringan Otomotif">Teknik Kendaraan Ringan Otomotif</option>
                                <option value="Teknik Pemesinan">Teknik Pemesinan</option>
                            </select>
                        </td>
                    </tr>
                </table>
                <center>
                    <input style="margin-bottom: 30px;" type="submit" value="Simpan" class="btn btn-success">
                </center>
            </form>

            <table class="table table-bordered">
                <tr>
                    <td>Nomor Pendaftaran</td>
                    <td><?php echo $d['no_p']; ?></td>
                </tr>
                <tr>
                    <td>Nama Calon Peserta Didik</td>
                    <td><?php echo $d['nama_siswa']; ?></td>
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