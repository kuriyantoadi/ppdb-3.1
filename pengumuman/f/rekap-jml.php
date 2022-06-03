<?php

  $no=1;

  function jml_diterima(){
    include '../../koneksi.php';
    $data = mysqli_query($koneksi, "SELECT *  from f_pengumuman where kondisi='DITERIMA' ");
    $rekap_diterima = mysqli_num_rows($data);
    echo $rekap_diterima;
  }

  function jml_blm_upload(){
    include '../../koneksi.php';
    $data = mysqli_query($koneksi, "SELECT * from f_pengumuman where kondisi='DITERIMA' AND pdf_pakta='' ");
    $rekap_blm_upload = mysqli_num_rows($data);
    // result($rekap_diterima);
    echo $rekap_blm_upload;
  }

  function jml_sdh_upload(){
    include '../../koneksi.php';
    $data = mysqli_query($koneksi, "SELECT *  from f_pengumuman where kondisi='DITERIMA' ");
    $rekap_diterima = mysqli_num_rows($data);

    include '../../koneksi.php';
    $data = mysqli_query($koneksi, "SELECT * from f_pengumuman where kondisi='DITERIMA' AND pdf_pakta='' ");
    $rekap_blm_upload = mysqli_num_rows($data);


    $sdh_upload = $rekap_diterima-$rekap_blm_upload;
    echo $sdh_upload;
  }

  function jml_val(){
    include '../../koneksi.php';
    $data = mysqli_query($koneksi, "SELECT * from f_pengumuman where kondisi='DITERIMA' AND pdf_pakta != '' AND kondisi_upload_berkas != ''");
    $rekap_datasesuai = mysqli_num_rows($data);
    // result($rekap_diterima);
    echo $rekap_datasesuai;
  }

  function jml_blm_val(){
    include '../../koneksi.php';
    $data = mysqli_query($koneksi, "SELECT * from f_pengumuman where kondisi='DITERIMA' AND pdf_pakta != '' AND kondisi_upload_berkas = ''");
    $rekap_datasesuai = mysqli_num_rows($data);
    // result($rekap_diterima);
    echo $rekap_datasesuai;
  }

  function jml_datasesuai(){
    include '../../koneksi.php';
    $data = mysqli_query($koneksi, "SELECT *  from f_pengumuman where
       kondisi='DITERIMA' AND kondisi_upload_berkas='DATA SESUAI'");
    $rekap_datasesuai = mysqli_num_rows($data);
    // result($rekap_diterima);
    echo $rekap_datasesuai;
  }

  function jml_daftarulang(){
    include '../../koneksi.php';
    $data = mysqli_query($koneksi, "SELECT *  from f_pengumuman where
       kondisi='DITERIMA' AND kondisi_upload_berkas='Data Sesuai' AND kondisi_daftarulang='Sudah Daftar Ulang'");
    $rekap_daftarulang = mysqli_num_rows($data);
    // result($rekap_diterima);
    echo $rekap_daftarulang;
  }



?>
