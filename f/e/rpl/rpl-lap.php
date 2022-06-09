<?php
// session_start();
// if ($_SESSION['status']!="admin") {
//     header("location:../../index.php?pesan=belum_login");
// }
?>
<?php ob_start(); ?>
<!DOCTYPE html>
<html>

<head>
	<?php
      // $waktu=date('d-m-Y H:i:s');
      $cetak="RPL_Data_PPDB_SMK_N_1_Kragilan";
      header("Content-type: application/vnd-ms-excel");
      header("Content-Disposition: attachment; filename=$cetak.xls");
    ?>
</head>

<body>

	<style type="text/css">
		body {
			font-family: sans-serif;
		}

		table {
			margin: 20px auto;
			border-collapse: collapse;
		}

		table td,
		table td {
			border: 1px solid #3c3c3c;
			padding: 3px 8px;
		}

		a {
			background: blue;
			color: #fff;
			padding: 8px 10px;
			text-decoration: none;
			border-radius: 2px;
		}
	</style>



	<table border="0 ">
		<tr>
			<th>id </th>
			<th>no_p </th>
			<th>tgl_pendaftaran </th>
			<th>kompetensi_keahlian </th>
			<th>kompetensi_keahlian_2 </th>
			<th>asal_sekolah </th>
			<th>nisn </th>
			<th>nama_siswa </th>
			<th>jenis_kelamin </th>
			<th>tempat_lahir </th>
			<th>tgl_lahir </th>
			<th>tahun_lulus </th>
			<th>no_hp </th>
			<th>nik </th>
			<th>no_kk </th>
			<th>tgl_kk </th>
			<th>kota </th>
			<th>kecamatan </th>
			<th>kelurahan </th>
			<th>alamat </th>
			<th>rt </th>
			<th>rw </th>
			<th>jarak_kesekolah </th>
			<th>nama_org_tua </th>
			<th>no_hp_org_tua </th>
			<th>pekerjaan_org_tua </th>
			<th>kip </th>
			<th>pdf_skhun </th>
			<th>pdf_surat_dokter </th>
			<th>pdf_kk </th>
			<th>pdf_akta </th>
			<th>pdf_photo </th>
			<th>pdf_kip </th>
			<th>pdf_rapor_2 </th>
			<th>pdf_rapor_3 </th>
			<th>pdf_rapor_4 </th>
			<th>pdf_rapor_5 </th>
			<th>pdf_piagam1 </th>
			<th>pdf_piagam2 </th>
			<th>pdf_piagam3 </th>
			<th>bertindik </th>
			<th>perokok </th>
			<th>psikotropika </th>
			<th>bertato </th>
			<th>peminum </th>
			<th>buta_warna </th>
			<th>val_skhun </th>
			<th>val_surat_dokter </th>
			<th>val_kk </th>
			<th>val_akta </th>
			<th>val_photo </th>
			<th>val_rapor_2 </th>
			<th>val_rapor_3 </th>
			<th>val_rapor_4 </th>
			<th>val_rapor_5 </th>
			<th>val_kip </th>
			<th>val_piagam1 </th>
			<th>val_piagam2 </th>
			<th>val_piagam3 </th>
			<th>kondisi </th>
			<th>enk </th>
			<th>catatan_operator </th>
		</tr>
		<?php
        include '../../../koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi, "SELECT * FROM tb_siswa where kompetensi_keahlian='Rekayasa Perangkat Lunak'");
        while ($d = mysqli_fetch_array($data)) {
            ?>
		<tr>
			<td><?= $d['id'] ?></td>
			<td><?= $d['no_p'] ?></td>
			<td><?= $d['tgl_pendaftaran'] ?></td>
			<td><?= $d['kompetensi_keahlian'] ?></td>
			<td><?= $d['kompetensi_keahlian_2'] ?></td>
			<td><?= $d['asal_sekolah'] ?></td>
			<td><?= $d['nisn'] ?></td>
			<td><?= $d['nama_siswa'] ?></td>
			<td><?= $d['jenis_kelamin'] ?></td>
			<td><?= $d['tempat_lahir'] ?></td>
			<td><?= $d['tgl_lahir'] ?></td>
			<td><?= $d['tahun_lulus'] ?></td>
			<td><?= $d['no_hp'] ?></td>
			<td><?= $d['nik'] ?></td>
			<td><?= $d['no_kk'] ?></td>
			<td><?= $d['tgl_kk'] ?></td>
			<td><?= $d['kota'] ?></td>
			<td><?= $d['kecamatan'] ?></td>
			<td><?= $d['kelurahan'] ?></td>
			<td><?= $d['alamat'] ?></td>
			<td><?= $d['rt'] ?></td>
			<td><?= $d['rw'] ?></td>
			<td><?= $d['jarak_kesekolah'] ?></td>
			<td><?= $d['nama_org_tua'] ?></td>
			<td><?= $d['no_hp_org_tua'] ?></td>
			<td><?= $d['pekerjaan_org_tua'] ?></td>
			<td><?= $d['kip'] ?></td>
			<td><?= $d['pdf_skhun'] ?></td>
			<td><?= $d['pdf_surat_dokter'] ?></td>
			<td><?= $d['pdf_kk'] ?></td>
			<td><?= $d['pdf_akta'] ?></td>
			<td><?= $d['pdf_photo'] ?></td>
			<td><?= $d['pdf_kip'] ?></td>
			<td><?= $d['pdf_rapor_2'] ?></td>
			<td><?= $d['pdf_rapor_3'] ?></td>
			<td><?= $d['pdf_rapor_4'] ?></td>
			<td><?= $d['pdf_rapor_5'] ?></td>
			<td><?= $d['pdf_piagam1'] ?></td>
			<td><?= $d['pdf_piagam2'] ?></td>
			<td><?= $d['pdf_piagam3'] ?></td>
			<td><?= $d['bertindik'] ?></td>
			<td><?= $d['perokok'] ?></td>
			<td><?= $d['psikotropika'] ?></td>
			<td><?= $d['bertato'] ?></td>
			<td><?= $d['peminum'] ?></td>
			<td><?= $d['buta_warna'] ?></td>
			<td><?= $d['val_skhun'] ?></td>
			<td><?= $d['val_surat_dokter'] ?></td>
			<td><?= $d['val_kk'] ?></td>
			<td><?= $d['val_akta'] ?></td>
			<td><?= $d['val_photo'] ?></td>
			<td><?= $d['val_rapor_2'] ?></td>
			<td><?= $d['val_rapor_3'] ?></td>
			<td><?= $d['val_rapor_4'] ?></td>
			<td><?= $d['val_rapor_5'] ?></td>
			<td><?= $d['val_kip'] ?></td>
			<td><?= $d['val_piagam1'] ?></td>
			<td><?= $d['val_piagam2'] ?></td>
			<td><?= $d['val_piagam3'] ?></td>
			<td><?= $d['kondisi'] ?></td>
			<td><?= $d['enk'] ?></td>
			<td><?= $d['catatan_operator'] ?></td>
		</tr>
		<?php
        }
        ?>

	</table>
</body>

</html>
