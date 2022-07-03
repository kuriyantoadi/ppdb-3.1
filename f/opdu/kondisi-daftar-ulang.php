<?php
// koneksi database
include '../../koneksi.php';


session_start();
if ($_SESSION['status'] != "op-du") {
    header("location:../index.php?pesan=belum_login");
} else {

    $nik = strip_tags($_GET['nik']);
    $kondisi = strip_tags($_GET['kondisi']);

    $data= mysqli_query($koneksi, "SELECT * FROM tb_lolos where nik=$nik ");
    while ($d = mysqli_fetch_array($data)) {

        $kompetensi_keahlian = $d['diterima_kompetensi_keahlian'];

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
    case "Teknik Kendaraan Ringan dan Otomotif":
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
    }

    if ($kondisi == "Selesai") {
        mysqli_query($koneksi, "UPDATE tb_lolos SET
            kondisi_daftar_ulang='Selesai'
            where nik='$nik'
           ");

    }elseif($kondisi == "Belum"){
        mysqli_query($koneksi, "UPDATE tb_lolos SET
            kondisi_daftar_ulang='Belum'
            where nik='$nik'
           ");
    }else{
        echo "Kondisi Daftar Ulang Error";
        exit;
    }

  

    header("location:tampil_$kode_jur.php?pesan=edit_berhasil");
}
