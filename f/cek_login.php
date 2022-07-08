<?php
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include '../koneksi.php';

// menangkap data yang dikirim dari form
// belum mengunakan MD5
$username = addslashes(trim($_POST['username']));
// $username = $_POST['username'];
$password = md5($_POST['password']);

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi, "select * from tb_login where username='$username' and password='$password'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);


if ($cek > 0) {
    $login = mysqli_fetch_assoc($data);

    if ($login['level']=="admin") {
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "admin";
        header("location:a/index.php");

    // } elseif ($login['level']=="sua") {
    //     $_SESSION['username'] = $username;
    //     $_SESSION['status'] = "sua";
    //     header("location:sua/index.php");


    // } elseif ($login['level']=="optest") {
    //     $_SESSION['username'] = $username;
    //     $_SESSION['status'] = "optest";
    //     header("location:optest/index.php");

    // } elseif ($login['level']=="opwawancara") {
    //     $_SESSION['username'] = $username;
    //     $_SESSION['status'] = "opwawancara";
    //     header("location:opwawancara/index.php");
    

    } elseif ($login['level'] == "admin-du") {
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "admin-du";
        header("location:du/index.php");

    // } elseif ($login['level'] == "op-du") {
    //     $_SESSION['username'] = $username;
    //     $_SESSION['status'] = "op-du";
    //     header("location:opdu/index.php");

    // } elseif ($login['level']=="opreset") {
    //     $_SESSION['username'] = $username;
    //     $_SESSION['status'] = "opreset";
    //     header("location:opreset/index.php");

    // } elseif ($login['level']=="operator") {
    //     $_SESSION['username'] = $username;
    //     $_SESSION['status'] = "login";
    //     header("location:d/index.php");
        
    // } elseif ($login['level']=="tkj") {
    //     $_SESSION['username'] = $username;
    //     $_SESSION['status'] = "tkj";
    //     header("location:d/tkj/index.php");

    // } elseif ($login['level']=="rpl") {
    //     $_SESSION['username'] = $username;
    //     $_SESSION['status'] = "rpl";
    //     header("location:d/rpl/");
    // } elseif ($login['level']=="otkp") {
    //     $_SESSION['username'] = $username;
    //     $_SESSION['status'] = "otkp";
    //     header("location:d/otkp/index.php");
    // } elseif ($login['level']=="akl") {
    //     $_SESSION['username'] = $username;
    //     $_SESSION['status'] = "akl";
    //     header("location:d/akl/index.php");
    // } elseif ($login['level']=="tkr") {
    //     $_SESSION['username'] = $username;
    //     $_SESSION['status'] = "tkr";
    //     header("location:d/tkr/index.php");
    // } elseif ($login['level']=="tpm") {
    //     $_SESSION['username'] = $username;
    //     $_SESSION['status'] = "tpm";
    //     header("location:d/tpm/index.php");
  
    } else {
        // echo "gagal1";
        header("location:index.php?pesan=gagal1");
    }
} else {
    // echo "gagal2";

    header("location:index.php?pesan=gagal");
}
