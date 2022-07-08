<?php

include '../koneksi.php';
$nisn = $_POST['nisn'];
$nik = $_POST['nik'];
$kompetensi_keahlian = $_POST['kompetensi_keahlian'];

switch ($kompetensi_keahlian) {
  case "Akuntansi dan Keuangan Lembaga":
    $kode_jur = "akl";
    $kode_jurusan = "01";
    break;
  case "Otomatisasi dan Tata Kelola Perkantoran":
    $kode_jur = "otkp";
    $kode_jurusan = "02";
    break;
  case "Teknik Komputer dan Jaringan":
    $kode_jur = "tkj";
    $kode_jurusan = "03";
    break;
  case "Rekayasa Perangkat Lunak":
    $kode_jur = "rpl";
    $kode_jurusan = "04";
    break;
  case "Teknik Kendaraan Ringan Otomotif":
    $kode_jur = "tkr";
    $kode_jurusan = "05";
    break;
  case "Teknik Pemesinan":
    $kode_jur = "tpm";
    $kode_jurusan = "06";
    break;
  default:
    $kode_jur = "00";
}

// include '../cek-nisn.php';
$cek_nisn = mysqli_query($koneksi, "SELECT nisn FROM tb_siswa where nisn='$nisn' or nik='$nik'");
$row_nisn = mysqli_fetch_array($cek_nisn);
// echo $row['nisn'];
if (!empty($row_nisn)) {
  echo "Mohon maaf <b>NISN</b> atau <b>NIK</b> ada sudah terdaftar dalam sistem kami.";
  echo "<br> Untuk info lebih lanjut hubungi Panitia di Live Chat PPDB SMK Negeri 1 Kragilan";
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
            move_uploaded_file($file_tmp, '../assets/file_upload/'.$kode_jur.'/'.$nisn.'-'.$pdf_skhun_up.'.pdf');
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
              move_uploaded_file($file_tmp, '../assets/file_upload/'.$kode_jur.'/'.$nisn.'-'.$pdf_surat_dokter_up.'.pdf');
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
                move_uploaded_file($file_tmp, '../assets/file_upload/'.$kode_jur.'/'.$nisn.'-'.$pdf_kk_up.'.pdf');
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
                  move_uploaded_file($file_tmp, '../assets/file_upload/'.$kode_jur.'/'.$nisn.'-'.$pdf_akta_up.'.pdf');
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
              move_uploaded_file($file_tmp, '../assets/file_upload/'.$kode_jur.'/'.$nisn.'-'.$pdf_photo_up.'.pdf');
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
    // if ($_POST['upload']) {
    //     $ekstensi_diperbolehkan    = array('pdf');
    //     $waktu = date('d-m-Y');
    //     $pdf_swa_kk_up = "pdf_swa_kk";
    //     $pdf_swa_kk = $_FILES['pdf_swa_kk']['name'];
    //     $x = explode('.', $pdf_swa_kk);
    //     $ekstensi = strtolower(end($x));
    //     $ukuran    = $_FILES['pdf_swa_kk']['size'];
    //     $file_tmp = $_FILES['pdf_swa_kk']['tmp_name'];
    //     if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
    //         if ($ukuran < 544070) {
    //             move_uploaded_file($file_tmp, '../assets/file_upload/'.$kode_jur.'/'.$nisn.'-'.$pdf_swa_kk_up.'.pdf');
    //         } else {
    //             echo 'pdf_swa_kk';
    //             echo 'UKURAN FILE TERLALU BESAR';
    //             exit;
    //         }
    //     } else {
    //         echo 'pdf_swa_kk';
    //         echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
    //         // header("location:gagal-upload.php");
    //         exit;
    //     }
    // }


    // pdf_rapor1
    if ($_POST['upload']) {
        $ekstensi_diperbolehkan  = array('pdf');
        $pdf_rapor1 = $_FILES['pdf_rapor1']['name'];
        $x = explode('.', $pdf_rapor1);
        $ekstensi = strtolower(end($x));
        $ukuran    = $_FILES['pdf_rapor1']['size'];
        $file_tmp = $_FILES['pdf_rapor1']['tmp_name'];
        if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
            if ($ukuran < 544070) {
                move_uploaded_file($file_tmp, '../assets/file_upload/'.$kode_jur.'/'.$nisn.'-rapor_1'.'.pdf');
            } else {
                echo 'pdf_rapor1';
                echo 'UKURAN FILE TERLALU BESAR';
                exit;
            }
        } else {
            echo 'pdf_rapor1';
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
                move_uploaded_file($file_tmp, '../assets/file_upload/'.$kode_jur.'/'.$nisn.'-rapor_2'.'.pdf');
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
                move_uploaded_file($file_tmp, '../assets/file_upload/'.$kode_jur.'/'.$nisn.'-rapor_3'.'.pdf');
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
                move_uploaded_file($file_tmp, '../assets/file_upload/'.$kode_jur.'/'.$nisn.'-rapor_4'.'.pdf');
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
                move_uploaded_file($file_tmp, '../assets/file_upload/'.$kode_jur.'/'.$nisn.'-rapor_5'.'.pdf');
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
    // if ($_POST['upload']) {
    //     $ekstensi_diperbolehkan  = array('pdf');
    //     $pdf_rapor6 = $_FILES['pdf_rapor6']['name'];
    //     $x = explode('.', $pdf_rapor6);
    //     $ekstensi = strtolower(end($x));
    //     $ukuran    = $_FILES['pdf_rapor6']['size'];
    //     $file_tmp = $_FILES['pdf_rapor6']['tmp_name'];
    //     if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
    //         if ($ukuran < 544070) {
    //             move_uploaded_file($file_tmp, '../assets/file_upload/'.$kode_jur.'/'.$nisn.'-rapor_6'.'.pdf');
    //         } else {
    //             echo 'pdf_rapor6';
    //             echo 'UKURAN FILE TERLALU BESAR';
    //             exit;
    //         }
    //     } else {
    //         echo 'pdf_rapor6';
    //         echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
    //         // header("location:gagal-upload.php");
    //         exit;
    //     }
    // }

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
                move_uploaded_file($file_tmp, '../assets/file_upload/'.$kode_jur.'/'.$nisn.'-kip'.'.pdf');
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
                  move_uploaded_file($file_tmp, '../assets/file_upload/'.$kode_jur.'/'.$nisn.'-piagam1'.'.pdf');
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
                    move_uploaded_file($file_tmp, '../assets/file_upload/'.$kode_jur.'/'.$nisn.'-piagam2'.'.pdf');
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
                      move_uploaded_file($file_tmp, '../assets/file_upload/'.$kode_jur.'/'.$nisn.'-piagam3'.'.pdf');
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
$asal_sekolah = strtoupper(addslashes($_POST['asal_sekolah']));
$nisn = $_POST['nisn'];
$nama_siswa = strtoupper(addslashes($_POST['nama_siswa']));
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
$kompetensi_keahlian_2 = $_POST['kompetensi_keahlian_2'];

// nilai rapor_1
$sem1_agama = $_POST['sem1_agama'];
$sem1_b_indo = $_POST['sem1_b_indo'];
$sem1_mtk = $_POST['sem1_mtk'];
$sem1_ipa = $_POST['sem1_ipa'];
$sem1_b_ing = $_POST['sem1_b_ing'];


// nilai rapor_2
$sem2_agama = $_POST['sem2_agama'];
$sem2_b_indo = $_POST['sem2_b_indo'];
$sem2_mtk = $_POST['sem2_mtk'];
$sem2_ipa = $_POST['sem2_ipa'];
$sem2_b_ing = $_POST['sem2_b_ing'];

// nilai rapor_3
$sem3_agama = $_POST['sem3_agama'];
$sem3_b_indo = $_POST['sem3_b_indo'];
$sem3_mtk = $_POST['sem3_mtk'];
$sem3_ipa = $_POST['sem3_ipa'];
$sem3_b_ing = $_POST['sem3_b_ing'];

// nilai rapor_4
$sem4_agama = $_POST['sem4_agama'];
$sem4_b_indo = $_POST['sem4_b_indo'];
$sem4_mtk = $_POST['sem4_mtk'];
$sem4_ipa = $_POST['sem4_ipa'];
$sem4_b_ing = $_POST['sem4_b_ing'];

// nilai rapor_5
$sem5_agama = $_POST['sem5_agama'];
$sem5_b_indo = $_POST['sem5_b_indo'];
$sem5_mtk = $_POST['sem5_mtk'];
$sem5_ipa = $_POST['sem5_ipa'];
$sem5_b_ing = $_POST['sem5_b_ing'];


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
$cek_max = mysqli_query($koneksi, "SELECT max(id) FROM tb_siswa");
while ($row = mysqli_fetch_assoc($cek_max)) {
    $max = $row['max(id)'];
    $no_urut = $max+1;
}
$kode_urut =  sprintf("%04s", $no_urut);
$no_p = "$kode_jurusan-$tgl_pendaftaran-$nisn-$kode_urut";
$waktu_daftar = time();


mysqli_query($koneksi, "INSERT INTO tb_siswa VALUES (
                  '',
                  '$no_p',
                  '$tgl_pendaftaran',
                  '$kompetensi_keahlian',
                  '$kompetensi_keahlian_2',
                  '$asal_sekolah',
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
                  '$alamat',
                  '$rt',
                  '$rw',
                  '$jarak_kesekolah',
                  '$nama_org_tua',
                  '$no_hp_org_tua',
                  '$pekerjaan_org_tua',
                  '$kip',
                  '$sem1_agama',
                  '$sem1_b_indo',
                  '$sem1_mtk',
                  '$sem1_ipa',
                  '$sem1_b_ing',
                  '$sem2_agama',
                  '$sem2_b_indo',
                  '$sem2_mtk',
                  '$sem2_ipa',
                  '$sem2_b_ing',
                  '$sem3_agama',
                  '$sem3_b_indo',
                  '$sem3_mtk',
                  '$sem3_ipa',
                  '$sem3_b_ing',
                  '$sem4_agama',
                  '$sem4_b_indo',
                  '$sem4_mtk',
                  '$sem4_ipa',
                  '$sem4_b_ing',
                  '$sem5_agama',
                  '$sem5_b_indo',
                  '$sem5_mtk',
                  '$sem5_ipa',
                  '$sem5_b_ing',
                  '$nisn-$pdf_skhun_up.pdf',
                  '$nisn-$pdf_surat_dokter_up.pdf',
                  '$nisn-$pdf_kk_up.pdf',
                  '$nisn-$pdf_akta_up.pdf',
                  '$nisn-$pdf_photo_up.pdf',
                  '$nisn-$pdf_kip_up.pdf',
                  '$nisn-rapor_1.pdf',
                  '$nisn-rapor_2.pdf',
                  '$nisn-rapor_3.pdf',
                  '$nisn-rapor_4.pdf',
                  '$nisn-rapor_5.pdf',
                  '$nisn-piagam1.pdf',
                  '$nisn-piagam2.pdf',
                  '$nisn-piagam3.pdf',
                  '$bertindik',
                  '$perokok',
                  '$psikotropika',
                  '$bertato',
                  '$peminum',
                  '$buta_warna',
                  '$tinggi_badan',
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
                  'Pengecekan',
                  '$enk',
                ''
                );
             ");


// node_id=<?php echo $d['node_id'];
 header("location:cetak.php?nik=$nik");
