<?php
include("baglanti.php");
$sifre1 = $_POST['kayitsifre1'] ;
$eposta = $_POST['kayitemail']  ;
$kadi   = $_POST['kayitkadi']   ;
$ip     = $_SERVER["REMOTE_ADDR"];


$kontrol = $db->query("SELECT * FROM uyelik WHERE kullaniciadi='{$_POST['kayitkadi']}' AND eposta='{$_POST['kayitemail']}'");
if( $kontrol->rowCount() == "0" ){
    $db->query("INSERT INTO uyelik SET kullaniciadi='{$_POST['kayitkadi']}', eposta='{$_POST['kayitemail']}' , sifre='{$_POST["kayitsifre1"]}' , ip='{$_SERVER["REMOTE_ADDR"]}'");
    echo "<script>alert('Hesabınız Oluşturldu.3 saniye sonra otomatik olarak giriş sayfasına yönlendirileceksiniz.');</script>";
    header("Refresh: 3; url=index.php");

 }else{
    echo "<script>alert('Kullanıcı adı veya e-posta sisteme kayıtlı.');</script>";
    header("Refresh: 4; url=kayit.php");
 }

?>