<?php

  $no=1;

  function tampil_diterima($nama_jur){
    include '../../koneksi.php';
    $data = mysqli_query($koneksi, "SELECT *  from f_pengumuman where kompetensi_keahlian='$nama_jur' AND kondisi='DITERIMA' ");
    $rekap_diterima = mysqli_num_rows($data);
    echo $rekap_diterima;
  }

  function tampil_blm_upload($nama_jur){
    include '../../koneksi.php';
    $data = mysqli_query($koneksi, "SELECT * from f_pengumuman where kompetensi_keahlian='$nama_jur' AND kondisi='DITERIMA' AND pdf_pakta='' ");
    $rekap_blm_upload = mysqli_num_rows($data);
    // result($rekap_diterima);
    echo $rekap_blm_upload;
  }

  function tampil_sdh_upload($nama_jur){
    include '../../koneksi.php';
    $data = mysqli_query($koneksi, "SELECT *  from f_pengumuman where kompetensi_keahlian='$nama_jur' AND kondisi='DITERIMA' ");
    $rekap_diterima = mysqli_num_rows($data);

    include '../../koneksi.php';
    $data = mysqli_query($koneksi, "SELECT * from f_pengumuman where kompetensi_keahlian='$nama_jur' AND kondisi='DITERIMA' AND pdf_pakta='' ");
    $rekap_blm_upload = mysqli_num_rows($data);


    $sdh_upload = $rekap_diterima-$rekap_blm_upload;
    echo $sdh_upload;
  }

  function tampil_val($nama_jur){
    include '../../koneksi.php';
    $data = mysqli_query($koneksi, "SELECT * from f_pengumuman where kompetensi_keahlian='$nama_jur' AND kondisi='DITERIMA' AND pdf_pakta != '' AND kondisi_upload_berkas != ''");
    $rekap_datasesuai = mysqli_num_rows($data);
    // result($rekap_diterima);
    echo $rekap_datasesuai;
  }

  function tampil_blm_val($nama_jur){
    include '../../koneksi.php';
    $data = mysqli_query($koneksi, "SELECT * from f_pengumuman where kompetensi_keahlian='$nama_jur' AND kondisi='DITERIMA' AND pdf_pakta != '' AND kondisi_upload_berkas = ''");
    $rekap_datasesuai = mysqli_num_rows($data);
    // result($rekap_diterima);
    echo $rekap_datasesuai;
  }

  function tampil_datasesuai($nama_jur){
    include '../../koneksi.php';
    $data = mysqli_query($koneksi, "SELECT *  from f_pengumuman where kompetensi_keahlian='$nama_jur'
      AND kondisi='DITERIMA' AND kondisi_upload_berkas='DATA SESUAI'");
    $rekap_datasesuai = mysqli_num_rows($data);
    // result($rekap_diterima);
    echo $rekap_datasesuai;
  }

  function tampil_daftarulang($nama_jur){
    include '../../koneksi.php';
    $data = mysqli_query($koneksi, "SELECT *  from f_pengumuman where kompetensi_keahlian='$nama_jur'
      AND kondisi='DITERIMA' AND kondisi_upload_berkas='Data Sesuai' AND kondisi_daftarulang='Sudah Daftar Ulang'");
    $rekap_daftarulang = mysqli_num_rows($data);
    // result($rekap_diterima);
    echo $rekap_daftarulang;
  }

?>
