<?php
include("baglanti.php");
session_start();
ob_start();
if(!isset($_SESSION["login"])){
header("Location:index.php");
}


?>

<?php include("meta.php"); ?>
<body>
    <?php  include("header.php");   ?>
   <center> <h2>Merhaba <b> <?php  echo $_SESSION['user']; ?></b>👋 </h2></center>
    <h3>Hızlı İşlemler:</h3>
<a href="pwreset"><button type="button" class="btn btn-info">Şifre Değiştir</button></a>
<a href="iletisim.php"><button type="button" class="btn btn-danger">İletişime Geç</button></a>
<a href="cikis.php"><button type="button" class="btn btn-warning">Oturumu Sonlandır</button></a>



</body>
</html>