<?php
// session_start();
// if ($_SESSION['status']!="siswa") {
//     header("location:index.php?pesan=belum_login");
// }

include '../../koneksi.php';
$nisn = $_POST['nisn'];

// include '../cek-nisn.php';
$cek_nisn_rpl = mysqli_query($koneksi, "SELECT nisn FROM f_siswa_rpl where nisn='$nisn'");
$row_rpl = mysqli_fetch_array($cek_nisn_rpl);
// echo $row['nisn'];
if (!empty($row_rpl)) {
  echo "Maaf nisn anda sudah cocok dengan data disistem kami di kompetensi keahlian Rekayasa Perangkat Lunak";
  exit;
}

// pdf_skhun
if ($_POST['upload']) {
    $ekstensi_diperbolehkan    = array('pdf');
    $waktu = date('d-m-Y');
    $pdf_skhun_up = "pdf_skhun";
    $pdf_skhun = $_FILES['pdf_skhun']['name'];
    $x = explode('.', $pdf_skhun);
    $ekstensi = strtolower(end($x));
    $ukuran    = $_FILES['pdf_skhun']['size'];
    $file_tmp = $_FILES['pdf_skhun']['tmp_name'];
    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
        if ($ukuran < 544070) {
            move_uploaded_file($file_tmp, '../../assets/file_upload/rpl/'.$nisn.'-'.$pdf_skhun_up.'.pdf');
        } else {
            echo 'pdf_skhun';
            echo 'UKURAN FILE TERLALU BESAR';
            exit;
        }
    } else {
        echo 'File SKHUN tidak pdf';
        echo "<br>";
        echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
        // header("location:gagal-upload.php");
        exit;
    }
}

  // pdf_surat_dokter
  if ($_POST['upload']) {
      $ekstensi_diperbolehkan    = array('pdf');
      $waktu = date('d-m-Y');
      $pdf_surat_dokter_up = "pdf_surat_dokter";
      $pdf_surat_dokter = $_FILES['pdf_surat_dokter']['name'];
      $x = explode('.', $pdf_surat_dokter);
      $ekstensi = strtolower(end($x));
      $ukuran    = $_FILES['pdf_surat_dokter']['size'];
      $file_tmp = $_FILES['pdf_surat_dokter']['tmp_name'];
      if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
          if ($ukuran < 544070) {
              move_uploaded_file($file_tmp, '../../assets/file_upload/rpl/'.$nisn.'-'.$pdf_surat_dokter_up.'.pdf');
          } else {
              echo 'pdf_surat_dokter';
              echo "<br>";
              echo 'UKURAN FILE TERLALU BESAR';
              exit;
          }
      } else {
          echo 'pdf_surat_dokter';
          echo "<br>";
          echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
          // header("location:gagal-upload.php");
          exit;
      }
  }

    // pdf_kk
    if ($_POST['upload']) {
        $ekstensi_diperbolehkan    = array('pdf');
        $waktu = date('d-m-Y');
        $pdf_kk_up = "pdf_kk";
        $pdf_kk = $_FILES['pdf_kk']['name'];
        $x = explode('.', $pdf_kk);
        $ekstensi = strtolower(end($x));
        $ukuran    = $_FILES['pdf_kk']['size'];
        $file_tmp = $_FILES['pdf_kk']['tmp_name'];
        if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
            if ($ukuran < 544070) {
                move_uploaded_file($file_tmp, '../../assets/file_upload/rpl/'.$nisn.'-'.$pdf_kk_up.'.pdf');
            } else {
                echo 'pdf_kk';
                echo 'UKURAN FILE TERLALU BESAR';
                exit;
            }
        } else {
            echo 'pdf_kk';
            echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
            // header("location:gagal-upload.php");
            exit;
        }
    }

      // pdf_akta
      if ($_POST['upload']) {
          $ekstensi_diperbolehkan    = array('pdf');
          $waktu = date('d-m-Y');
          $pdf_akta_up = "pdf_akta";
          $pdf_akta = $_FILES['pdf_akta']['name'];
          $x = explode('.', $pdf_akta);
          $ekstensi = strtolower(end($x));
          $ukuran    = $_FILES['pdf_akta']['size'];
          $file_tmp = $_FILES['pdf_akta']['tmp_name'];
          if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
              if ($ukuran < 544070) {
                  move_uploaded_file($file_tmp, '../../assets/file_upload/rpl/'.$nisn.'-'.$pdf_akta_up.'.pdf');
              } else {
                  echo 'pdf_akta';
                  echo 'UKURAN FILE TERLALU BESAR';
                  exit;
              }
          } else {
              echo 'pdf_akta';
              echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
              // header("location:gagal-upload.php");
              exit;
          }
      }

  // pdf_photo
  if ($_POST['upload']) {
      $ekstensi_diperbolehkan    = array('pdf');
      $waktu = date('d-m-Y');
      $pdf_photo_up = "pdf_photo";
      $pdf_photo = $_FILES['pdf_photo']['name'];
      $x = explode('.', $pdf_photo);
      $ekstensi = strtolower(end($x));
      $ukuran    = $_FILES['pdf_photo']['size'];
      $file_tmp = $_FILES['pdf_photo']['tmp_name'];
      if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
          if ($ukuran < 544070) {
              move_uploaded_file($file_tmp, '../../assets/file_upload/rpl/'.$nisn.'-'.$pdf_photo_up.'.pdf');
          } else {
              echo 'pdf_photo';
              echo 'UKURAN FILE TERLALU BESAR';
              exit;
          }
      } else {
          echo 'pdf_photo';
          echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
          // header("location:gagal-upload.php");
          exit;
      }
  }

    // pdf_swa_kk
    if ($_POST['upload']) {
        $ekstensi_diperbolehkan    = array('pdf');
        $waktu = date('d-m-Y');
        $pdf_swa_kk_up = "pdf_swa_kk";
        $pdf_swa_kk = $_FILES['pdf_swa_kk']['name'];
        $x = explode('.', $pdf_swa_kk);
        $ekstensi = strtolower(end($x));
        $ukuran    = $_FILES['pdf_swa_kk']['size'];
        $file_tmp = $_FILES['pdf_swa_kk']['tmp_name'];
        if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
            if ($ukuran < 544070) {
                move_uploaded_file($file_tmp, '../../assets/file_upload/rpl/'.$nisn.'-'.$pdf_swa_kk_up.'.pdf');
            } else {
                echo 'pdf_swa_kk';
                echo 'UKURAN FILE TERLALU BESAR';
                exit;
            }
        } else {
            echo 'pdf_swa_kk';
            echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
            // header("location:gagal-upload.php");
            exit;
        }
    }


    // pdf_rapor2
    if ($_POST['upload']) {
        $ekstensi_diperbolehkan  = array('pdf');
        $pdf_rapor2 = $_FILES['pdf_rapor2']['name'];
        $x = explode('.', $pdf_rapor2);
        $ekstensi = strtolower(end($x));
        $ukuran    = $_FILES['pdf_rapor2']['size'];
        $file_tmp = $_FILES['pdf_rapor2']['tmp_name'];
        if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
            if ($ukuran < 544070) {
                move_uploaded_file($file_tmp, '../../assets/file_upload/rpl/'.$nisn.'-rapor_2'.'.pdf');
            } else {
                echo 'pdf_rapor2';
                echo 'UKURAN FILE TERLALU BESAR';
                exit;
            }
        } else {
            echo 'pdf_rapor2';
            echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
            // header("location:gagal-upload.php");
            exit;
        }
    }

    // pdf_rapor3
    if ($_POST['upload']) {
        $ekstensi_diperbolehkan  = array('pdf');
        $pdf_rapor3 = $_FILES['pdf_rapor3']['name'];
        $x = explode('.', $pdf_rapor3);
        $ekstensi = strtolower(end($x));
        $ukuran    = $_FILES['pdf_rapor3']['size'];
        $file_tmp = $_FILES['pdf_rapor3']['tmp_name'];
        if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
            if ($ukuran < 544070) {
                move_uploaded_file($file_tmp, '../../assets/file_upload/rpl/'.$nisn.'-rapor_3'.'.pdf');
            } else {
                echo 'pdf_rapor3';
                echo 'UKURAN FILE TERLALU BESAR';
                exit;
            }
        } else {
            echo 'pdf_rapor3';
            echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
            // header("location:gagal-upload.php");
            exit;
        }
    }

    // pdf_rapor4
    if ($_POST['upload']) {
        $ekstensi_diperbolehkan  = array('pdf');
        $pdf_rapor4 = $_FILES['pdf_rapor4']['name'];
        $x = explode('.', $pdf_rapor4);
        $ekstensi = strtolower(end($x));
        $ukuran    = $_FILES['pdf_rapor4']['size'];
        $file_tmp = $_FILES['pdf_rapor4']['tmp_name'];
        if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
            if ($ukuran < 544070) {
                move_uploaded_file($file_tmp, '../../assets/file_upload/rpl/'.$nisn.'-rapor_4'.'.pdf');
            } else {
                echo 'pdf_rapor4';
                echo 'UKURAN FILE TERLALU BESAR';
                exit;
            }
        } else {
            echo 'pdf_rapor4';
            echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
            // header("location:gagal-upload.php");
            exit;
        }
    }

    // pdf_rapor5
    if ($_POST['upload']) {
        $ekstensi_diperbolehkan  = array('pdf');
        $pdf_rapor5 = $_FILES['pdf_rapor5']['name'];
        $x = explode('.', $pdf_rapor5);
        $ekstensi = strtolower(end($x));
        $ukuran    = $_FILES['pdf_rapor5']['size'];
        $file_tmp = $_FILES['pdf_rapor5']['tmp_name'];
        if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
            if ($ukuran < 544070) {
                move_uploaded_file($file_tmp, '../../assets/file_upload/rpl/'.$nisn.'-rapor_5'.'.pdf');
            } else {
                echo 'pdf_rapor5';
                echo 'UKURAN FILE TERLALU BESAR';
                exit;
            }
        } else {
            echo 'pdf_rapor5';
            echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
            // header("location:gagal-upload.php");
            exit;
        }
    }

    // pdf_rapor6
    if ($_POST['upload']) {
        $ekstensi_diperbolehkan  = array('pdf');
        $pdf_rapor6 = $_FILES['pdf_rapor6']['name'];
        $x = explode('.', $pdf_rapor6);
        $ekstensi = strtolower(end($x));
        $ukuran    = $_FILES['pdf_rapor6']['size'];
        $file_tmp = $_FILES['pdf_rapor6']['tmp_name'];
        if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
            if ($ukuran < 544070) {
                move_uploaded_file($file_tmp, '../../assets/file_upload/rpl/'.$nisn.'-rapor_6'.'.pdf');
            } else {
                echo 'pdf_rapor6';
                echo 'UKURAN FILE TERLALU BESAR';
                exit;
            }
        } else {
            echo 'pdf_rapor6';
            echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
            // header("location:gagal-upload.php");
            exit;
        }
    }

    // pdf_kip
    if ($_POST['upload']) {
        $ekstensi_diperbolehkan  = array('pdf','');
        $pdf_kip = $_FILES['pdf_kip']['name'];
        $pdf_kip_up = "kip";
        $x = explode('.', $pdf_kip);
        $ekstensi = strtolower(end($x));
        $ukuran    = $_FILES['pdf_kip']['size'];
        $file_tmp = $_FILES['pdf_kip']['tmp_name'];
        if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
            if ($ukuran < 544070) {
                move_uploaded_file($file_tmp, '../../assets/file_upload/rpl/'.$nisn.'-kip'.'.pdf');
            } else {
                echo 'pdf_kip';
                echo 'UKURAN FILE TERLALU BESAR';
                exit;
            }
        } else {
            echo 'pdf_kip';
            echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
            // header("location:gagal-upload.php");
            exit;
        }
    }
      // pdf_piagam1
      if ($_POST['upload']) {
          $ekstensi_diperbolehkan    = array('pdf','');
          $waktu = date('d-m-Y');
          // $pdf_piagam1_up = "pdf_piagam1";
          $pdf_piagam1 = $_FILES['pdf_piagam1']['name'];
          $x = explode('.', $pdf_piagam1);
          $ekstensi = strtolower(end($x));
          $ukuran    = $_FILES['pdf_piagam1']['size'];
          $file_tmp = $_FILES['pdf_piagam1']['tmp_name'];
          if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
              if ($ukuran < 544070) {
                  move_uploaded_file($file_tmp, '../../assets/file_upload/rpl/'.$nisn.'pdf-piagam1.pdf');
              } else {
                  echo 'pdf_piagam1';
                  echo 'UKURAN FILE TERLALU BESAR';
                  exit;
              }
          } else {
              echo 'pdf_piagam1';
              echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
              // // header("location:gagal-upload.php");
              exit;
          }
      }


        // pdf_piagam2
        if ($_POST['upload']) {
            $ekstensi_diperbolehkan    = array('pdf','');
            $waktu = date('d-m-Y');
            $pdf_piagam2_up = "pdf_piagam2";
            $pdf_piagam2 = $_FILES['pdf_piagam2']['name'];
            $x = explode('.', $pdf_piagam2);
            $ekstensi = strtolower(end($x));
            $ukuran    = $_FILES['pdf_piagam2']['size'];
            $file_tmp = $_FILES['pdf_piagam2']['tmp_name'];
            if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
                if ($ukuran < 544070) {
                    move_uploaded_file($file_tmp, '../../assets/file_upload/rpl/'.$nisn.'pdf-piagam2.pdf');
                } else {
                    echo 'pdf_piagam2';
                    echo 'UKURAN FILE TERLALU BESAR';
                    exit;
                }
            } else {
                echo 'pdf_piagam2';
                echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
                // header("location:gagal-upload.php");
                exit;
            }
        }

          // pdf_piagam3
          if ($_POST['upload']) {
              $ekstensi_diperbolehkan    = array('pdf','');
              $waktu = date('d-m-Y');
              $pdf_piagam3_up = "pdf_piagam3";
              $pdf_piagam3 = $_FILES['pdf_piagam3']['name'];
              $x = explode('.', $pdf_piagam3);
              $ekstensi = strtolower(end($x));
              $ukuran    = $_FILES['pdf_piagam3']['size'];
              $file_tmp = $_FILES['pdf_piagam3']['tmp_name'];
              if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
                  if ($ukuran < 544070) {
                      move_uploaded_file($file_tmp, '../../assets/file_upload/rpl/'.$nisn.'-pdf_piagam3.pdf');
                  } else {
                      echo 'pdf_piagam3';
                      echo 'UKURAN FILE TERLALU BESAR';
                      exit;
                  }
              } else {
                  echo 'pdf_piagam3';
                  echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
                  // header("location:gagal-upload.php");
                  exit;
              }
          }

$tgl_pendaftaran = $_POST['tgl_pendfataran'];
$kompetensi_keahlian = $_POST['kompetensi_keahlian'];
$asal_sekolah = addslashes($_POST['asal_sekolah']);
$npsn_sekolah = $_POST['npsn_sekolah'];
$nisn = $_POST['nisn'];
$nama_siswa = addslashes($_POST['nama_siswa']);
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
$kode_pos = $_POST['kode_pos'];
$alamat = $_POST['alamat'];
$rt = $_POST['rt'];
$rw = $_POST['rw'];
$jarak_kesekolah = $_POST['jarak_kesekolah'];
$nama_org_tua = addslashes($_POST['nama_org_tua']);
$no_hp_org_tua = $_POST['no_hp_org_tua'];
$pekerjaan_org_tua = $_POST['pekerjaan_org_tua'];
$kip = $_POST['kip'];
$rapor_2 = $_POST['rapor_2'];
$rapor_3 = $_POST['rapor_3'];
$rapor_4 = $_POST['rapor_4'];
$rapor_5 = $_POST['rapor_5'];
$rapor_6 = $_POST['rapor_6'];
$bertindik = $_POST['bertindik'];
$perokok = $_POST['perokok'];
$psikotropika = $_POST['psikotropika'];
$bertato = $_POST['bertato'];
$peminum = $_POST['peminum'];
$buta_warna = $_POST['buta_warna'];
$kompetensi_keahlian_2 = $_POST['kompetensi_keahlian_2'];



//username dan password
function pass_acak($panjang)
{
    $karakter= 'abcdefghijklmnopqrstuvwxyz';
    $string = '';
    for ($i = 0; $i < $panjang; $i++) {
        $pos = rand(0, strlen($karakter)-1);
        $string .= $karakter[$pos];
    }
    return $string;
}

function user_acak($panjang)
{
    $karakter= '123456789';
    $string = '';
    for ($i = 0; $i < $panjang; $i++) {
        $pos = rand(0, strlen($karakter)-1);
        $string .= $karakter[$pos];
    }
    return $string;
}

//cara memanggilnya
$password = pass_acak(5);

//akhir pembuatan password

//awal Enkripsi
// $A = $nama_siswa;
// $B = $tgl_lahir;
// $C = $A.$B;

$enk = md5($tgl_lahir);

// akhir enkripsi

// nomor pendaftaran
// 01 = rpl
// 02 = otkp
// 03 = rpl
// 04 = rpl
// 05 = tkr
// 06 = tpm
$kode_jurusan = '01';
$cek_max = mysqli_query($koneksi, "SELECT max(id) FROM f_siswa_rpl");
while ($row = mysqli_fetch_assoc($cek_max)) {
    $max = $row['max(id)'];
    $no_urut = $max+1;
}
$kode_urut =  sprintf("%04s", $no_urut);
$no_p = "$kode_jurusan-$tgl_pendaftaran-$nisn-$kode_urut";

mysqli_query($koneksi, "INSERT INTO f_siswa_rpl VALUES (
                          '',
                          '$no_p',
                          '$tgl_pendaftaran',
                          '$kompetensi_keahlian',
                          '$kompetensi_keahlian_2',
                          '$asal_sekolah',
                          '$npsn_sekolah',
                          '$nisn',
                          '$nama_siswa',
                          '$jenis_kelamin',
                          '$tempat_lahir',
                          '$tgl_lahir',
                          '$tahun_lulus',
                          '$no_hp',
                          '$nik',
                          '$no_kk',
                          '$tgl_kk',
                          '$kota',
                          '$kecamatan',
                          '$kelurahan',
                          '$kode_pos',
                          '$alamat',
                          '$rt',
                          '$rw',
                          '$jarak_kesekolah',
                          '$nama_org_tua',
                          '$no_hp_org_tua',
                          '$pekerjaan_org_tua',
                          '$kip',
                          '$nisn-$pdf_skhun_up.pdf',
                          '$nisn-$pdf_surat_dokter_up.pdf',
                          '$nisn-$pdf_kk_up.pdf',
                          '$nisn-$pdf_akta_up.pdf',
                          '$nisn-$pdf_photo_up.pdf',
                          '$nisn-$pdf_swa_kk_up.pdf',
                          '$nisn-$pdf_kip_up.pdf',
                          '$nisn-rapor_2.pdf',
                          '$nisn-rapor_3.pdf',
                          '$nisn-rapor_4.pdf',
                          '$nisn-rapor_5.pdf',
                          '$nisn-rapor_6.pdf',
                          '$nisn-piagam1.pdf',
                          '$nisn-piagam2.pdf',
                          '$nisn-piagam3.pdf',
                          '$rapor_2',
                          '$rapor_3',
                          '$rapor_4',
                          '$rapor_5',
                          '$rapor_6',
                          '$bertindik',
                          '$perokok',
                          '$psikotropika',
                          '$bertato',
                          '$peminum',
                          '$buta_warna',
                          '',
                          '',
                          '',
                          '',
                          '',
                          '',
                          '',
                          '',
                          '',
                          '',
                          '',
                          '',
                          '',
                          '',
                          '',
                          '$nisn',
                          '$password',
                          '',
                          '$enk',
                          ''
                        );
             ");


// node_id=<?php echo $d['node_id'];
 header("location:cetak.php?nik=$nik");
