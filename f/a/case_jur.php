<?php

switch ($d['kompetensi_keahlian']) {
  case "Akuntansi dan Keuangan Lembaga":
    $kode_jur = "akl";
    $kode_jurusan = "01";
    break;
  case "":
    echo "Otomatisasi dan Tata Kelola Perkantoran";
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

 ?>
