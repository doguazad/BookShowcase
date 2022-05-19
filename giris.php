<?php

include("baglanti.php");

$kadi = $_POST['login_email'];
$sifre = $_POST['login_password'];
$sql = $db->query("select * from uyelik where kullaniciadi = '$kadi' && sifre = '$sifre' ",PDO::FETCH_ASSOC);
 if($sql->rowCount()){
     echo"<script>alert('Giriş Onaylandı.');</script>";
     $username = $_POST['login_email']; 
     $pass =  $_POST['login_password'];
     session_start();
     ob_start();
     if(($_POST['login_email']== $username && $_POST['login_password']== $pass)){
         $_SESSION["login"] = "true";
         $_SESSION["user"] = $username;
         $_SESSION["pass"] = $pass;
         header("Location:home.php");
     }

     
 }
 else{
     echo "<script>alert('Kullanıcı adı veya şifre hatalı.');</script>";
     header("Refresh: 3; url=index.php");
 }
 ob_end_flush();
?>