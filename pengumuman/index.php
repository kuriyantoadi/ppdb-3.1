<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Daftar Ulang</title>
</head>

<body>
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <!-- <script src="js/bootstrap.min.js"></script> -->
  <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
  <script src="../assets/js/jquery-latest.js"></script>
  <script src="" charset="utf-8"></script>
  <link rel="stylesheet" href="../assets/css/login.css">
  <!-- Include the above in your HEAD tag ---------->

  <div class="wrapper fadeInDown">
    <div id="formContent">
      <!-- Tabs Titles -->

      <!-- Icon -->
      <div class="fadeIn first">
        <?php
                if (isset($_GET['pesan'])) {
                    if ($_GET['pesan'] == "gagal") {
                        echo "
						<div class='alert alert-danger' role='alert'>
							<center>Maaf Password anda salah!
						</div>";
                    } elseif ($_GET['pesan'] == "logout") {
                        echo "
						<div class='alert alert-warning' role='alert'>
							<center>Anda Berhasil Logout
						</div>
						";
                    } elseif ($_GET['pesan'] == "belum_login") {
                        echo "
						<div class='alert alert-danger' role='alert'>
							<center>Maaf anda harus login dulu
						</div>";
                    }
                }
                ?>

          <h4 style="margin-top:  40px;">Pengumuman Seleksi PPDB</h5>
          <h4 style="margin-bottom: 40px;">SMK Negeri 1 Kragilan</h5>

      </div>

      <!-- Login Form -->

      <form method="post" action="cek_login.php">
        <input type="text" id="login" class="fadeIn second" name="nisn_siswa" placeholder="NISN">
        <input type="text" id="password" class="fadeIn third" name="nik" placeholder="NIK">
        <input type="submit" class="fadeIn fourth" >
      </form>

      <!-- Remind Passowrd -->
      <div id="formFooter">
        <a class="underlineHover" href="#">Lupa Password</a>
      </div>

    </div>
  </div>
</body>

</html>
