<?php
session_start();
if ($_SESSION['status']!="siswa") {
    header("location:index.php?pesan=belum_login");
}

include '../koneksi.php';
$nisn_siswa = $_POST['nisn_siswa'];
$kode_jur = $_POST['kode_jur'];

// echo $kode_jur;


// exit;
// pdf_swa_pakta
if ($_POST['upload']) {
    $ekstensi_diperbolehkan    = array('pdf');
    $pdf_pakta_up = "pdf_pakta";
    $pdf_pakta = $_FILES['pdf_pakta']['name'];
    $x = explode('.', $pdf_pakta);
    $ekstensi = strtolower(end($x));
    $ukuran    = $_FILES['pdf_pakta']['size'];
    $file_tmp = $_FILES['pdf_pakta']['tmp_name'];
    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
        if ($ukuran < 344070) {
            move_uploaded_file($file_tmp, '../assets/file_upload/'.$kode_jur.'/'.$nisn_siswa.'-'.$pdf_pakta_up.'.pdf');
        } else {
            echo 'pdf_pakta';
            echo 'UKURAN FILE TERLALU BESAR';
            exit;
        }
    } else {
        echo 'File swa_pakta tidak pdf';
        echo "<br>";
        echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
        // header("location:gagal-upload.php");
        exit;
    }
}


// pdf_swa_pakta
if ($_POST['upload']) {
    $ekstensi_diperbolehkan    = array('pdf');
    $pdf_swa_pakta_up = "pdf_swa_pakta";
    $pdf_swa_pakta = $_FILES['pdf_swa_pakta']['name'];
    $x = explode('.', $pdf_swa_pakta);
    $ekstensi = strtolower(end($x));
    $ukuran    = $_FILES['pdf_swa_pakta']['size'];
    $file_tmp = $_FILES['pdf_swa_pakta']['tmp_name'];
    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
        if ($ukuran < 544070) {
            move_uploaded_file($file_tmp, '../assets/file_upload/'.$kode_jur.'/'.$nisn_siswa.'-'.$pdf_swa_pakta_up.'.pdf');
        } else {
            echo 'pdf_swa_pakta';
            echo 'UKURAN FILE TERLALU BESAR';
            exit;
        }
    } else {
        echo 'File swa_pakta tidak pdf';
        echo "<br>";
        echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
        // header("location:gagal-upload.php");
        exit;
    }
}


// pdf_swa_pakta
if ($_POST['upload']) {
    $ekstensi_diperbolehkan    = array('pdf');
    $pdf_dapodik_up = "pdf_dapodik";
    $pdf_dapodik = $_FILES['pdf_dapodik']['name'];
    $x = explode('.', $pdf_dapodik);
    $ekstensi = strtolower(end($x));
    $ukuran    = $_FILES['pdf_dapodik']['size'];
    $file_tmp = $_FILES['pdf_dapodik']['tmp_name'];
    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
        if ($ukuran < 1204070) {
            move_uploaded_file($file_tmp, '../assets/file_upload/'.$kode_jur.'/'.$nisn_siswa.'-'.$pdf_dapodik_up.'.pdf');
        } else {
            echo 'pdf_dapodik';
            echo 'UKURAN FILE TERLALU BESAR';
            exit;
        }
    } else {
        echo 'File swa_pakta tidak pdf';
        echo "<br>";
        echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
        // header("location:gagal-upload.php");
        exit;
    }
}

$nik = $_POST['nik'];
$tgl = date('d-m-Y  H:i' );


mysqli_query($koneksi, "UPDATE f_pengumuman SET
            tgl_daftarulang='$tgl',
             pdf_pakta='$nisn_siswa-$pdf_pakta_up.pdf',
             pdf_swa_pakta='$nisn_siswa-$pdf_swa_pakta_up.pdf',
             pdf_dapodik='$nisn_siswa-$pdf_dapodik_up.pdf'

             where nisn_siswa='$nisn_siswa'
             ")  or die(mysqli_error($koneksi));

// node_id=<?php echo $d['node_id'];
 header("location:upload-berkas.php?nik=$nik&pesan=daftarulang_berhasil");
