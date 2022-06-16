<?php

include '../koneksi.php';
$nisn = $_POST['nisn'];
$nik = $_POST['nik'];
$kompetensi_keahlian = $_POST['kompetensi_keahlian'];
//
// switch ($kompetensi_keahlian) {
//   case "Akuntansi dan Keuangan Lembaga":
//     $kode_jur = "akl";
//     $kode_jurusan = "01";
//     break;
//   case "Otomatisasi dan Tata Kelola Perkantoran":
//     $kode_jur = "otkp";
//     $kode_jurusan = "02";
//     break;
//   case "Teknik Komputer dan Jaringan":
//     $kode_jur = "tkj";
//     $kode_jurusan = "03";
//     break;
//   case "Rekayasa Perangkat Lunak":
//     $kode_jur = "rpl";
//     $kode_jurusan = "04";
//     break;
//   case "Teknik Kendaraan Ringan":
//     $kode_jur = "tkr";
//     $kode_jurusan = "05";
//     break;
//   case "Teknik Pemesinan":
//     $kode_jur = "tpm";
//     $kode_jurusan = "06";
//     break;
//   default:
//     $kode_jur = "00";
// }

// include '../cek-nisn.php';
// $cek_nisn = mysqli_query($koneksi, "SELECT nisn FROM tb_siswa where nisn='$nisn' or nik='$nik'");
// $row_nisn = mysqli_fetch_array($cek_nisn);
// // echo $row['nisn'];
// if (!empty($row_nisn)) {
//   echo "Mohon maaf nisn ada sudah terdaftar dalam sistem kami.";
//   echo "<br> Untuk info lebih lanjut hubungi Panitia di Live Chat PPDB SMK Negeri 1 Kragilan";
//   exit;
// }

$id = $_POST['id'];
// $kompetensi_keahlian = $_POST['kompetensi_keahlian'];
$asal_sekolah = addslashes($_POST['asal_sekolah']);
$asal_sekolah = strtoupper($_POST['asal_sekolah']);
$nisn = $_POST['nisn'];
$nama_siswa = addslashes($_POST['nama_siswa']);
$nama_siswa = strtoupper($_POST['nama_siswa']);
$jenis_kelamin = $_POST['jenis_kelamin'];
$tempat_lahir = $_POST['tempat_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$tahun_lulus = $_POST['tahun_lulus'];
$no_hp = $_POST['no_hp'];
$nik = $_POST['nik'];
$no_kk = $_POST['no_kk'];
$tgl_kk = $_POST['tgl_kk'];
$kota = $_POST['kota'];
$kecamatan = $_POST['kecamatan'];
$kelurahan = $_POST['kelurahan'];
$alamat = $_POST['alamat'];
$rt = $_POST['rt'];
$rw = $_POST['rw'];
$jarak_kesekolah = $_POST['jarak_kesekolah'];
$nama_org_tua = addslashes($_POST['nama_org_tua']);
$no_hp_org_tua = $_POST['no_hp_org_tua'];
$pekerjaan_org_tua = $_POST['pekerjaan_org_tua'];
$kip = $_POST['kip'];
$tinggi_badan = $_POST['tinggi_badan'];


$bertindik = $_POST['bertindik'];
$perokok = $_POST['perokok'];
$psikotropika = $_POST['psikotropika'];
$bertato = $_POST['bertato'];
$peminum = $_POST['peminum'];
$buta_warna = $_POST['buta_warna'];
// $kompetensi_keahlian_2 = $_POST['kompetensi_keahlian_2'];



//username dan password
// function pass_acak($panjang)
// {
//     $karakter= 'abcdefghijklmnopqrstuvwxyz';
//     $string = '';
//     for ($i = 0; $i < $panjang; $i++) {
//         $pos = rand(0, strlen($karakter)-1);
//         $string .= $karakter[$pos];
//     }
//     return $string;
// }
//
// function user_acak($panjang)
// {
//     $karakter= '123456789';
//     $string = '';
//     for ($i = 0; $i < $panjang; $i++) {
//         $pos = rand(0, strlen($karakter)-1);
//         $string .= $karakter[$pos];
//     }
//     return $string;
// }

//cara memanggilnya
// $password = pass_acak(5);



// akhir enkripsi

// nomor pendaftaran
// 01 = akl
// 02 = otkp
// 03 = tkj
// 04 = rpl
// 05 = tkr
// 06 = tpm

// kode pemilihan jurusan
$enk = md5($tgl_lahir);


// $kode_jur = '01';
// $cek_max = mysqli_query($koneksi, "SELECT max(id) FROM tb_siswa");
// while ($row = mysqli_fetch_assoc($cek_max)) {
//     $max = $row['max(id)'];
//     $no_urut = $max+1;
// }
// $kode_urut =  sprintf("%04s", $no_urut);
// $no_p = "$kode_jurusan-$tgl_pendaftaran-$nisn-$kode_urut";
// $waktu_daftar = time();


mysqli_query($koneksi, "UPDATE tb_siswa SET
                          asal_sekolah='$asal_sekolah',
                          nama_siswa='$nama_siswa',
                          jenis_kelamin='$jenis_kelamin',
                          tempat_lahir='$tempat_lahir',
                          tgl_lahir='$tgl_lahir',
                          tahun_lulus='$tahun_lulus',
                          no_hp='$no_hp',
                          nik='$nik',
                          no_kk='$no_kk',
                          tgl_kk='$tgl_kk',
                          kota='$kota',
                          kecamatan='$kecamatan',
                          kelurahan='$kelurahan',
                          alamat='$alamat',
                          rt='$rt',
                          rw='$rw',
                          jarak_kesekolah='$jarak_kesekolah',
                          nama_org_tua='$nama_org_tua',
                          no_hp_org_tua='$no_hp_org_tua',
                          kip='$kip',

                          pekerjaan_org_tua='$pekerjaan_org_tua',
                          bertindik='$bertindik',
                          perokok='$perokok',
                          psikotropika='$psikotropika',
                          bertato='$bertato',
                          peminum='$peminum',
                          buta_warna='$buta_warna',

                          kondisi=''
                          where id='$id'
             ") or die(mysqli_error($koneksi) );


// node_id=<?php echo $d['node_id'];
 header("location:siswa_lihat.php?id=$id&pesan=update_berhasil");
