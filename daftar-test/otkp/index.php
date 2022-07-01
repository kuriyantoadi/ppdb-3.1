<?php
// session_start();
// if ($_SESSION['status']!="admin" && $_SESSION['status']!="siswa") {
//     header("location:https://smkn1kragilan.sch.id/0/ppdb2021/pengumuman/");
// }

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Login PPDB</title>
</head>

<body>
  <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <!-- <script src="js/bootstrap.min.js"></script> -->
  <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
  <script src="../../assets/js/jquery-latest.js"></script>
  <script src="" charset="utf-8"></script>
  <link rel="stylesheet" href="../../assets/css/login.css">
  <!-- Include the above in your HEAD tag ---------->

  <div class="wrapper fadeInDown">
    <div id="formContent">
      <!-- Tabs Titles -->

      <!-- Icon -->
      <div class="fadeIn first">
        <?php include '../../alert-login.php'; ?>

          <h4 style="margin-top:  40px;">Login PPDB SMK Negeri 1 Kragilan</h5>
          <h4 style="margin-bottom: 40px;">Komptensi Keahlian Otomatisasi dan Tata Kelola Perkantoran</h5>

      </div>

      <!-- Login Form -->

      <form method="post" action="cek_login.php">
        <input type="text" id="login" class="fadeIn second" name="nisn" placeholder="NISN">
        <input type="text" id="password" class="fadeIn third" name="nik" placeholder="NIK">
        <input type="submit" class="fadeIn fourth" >
      </form>

      <!-- Remind Passowrd -->
      <div id="formFooter">
        <a class="underlineHover" href="daftar.php">Belum Daftar</a>
      </div>

    </div>
  </div>
</body>

</html>
