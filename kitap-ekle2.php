<?php
include("baglanti.php");
session_start();
ob_start();
if(!isset($_SESSION["login"])){
header("Location:index.php");
}

if(isset($_POST['basket'])){
if($_FILES['resim']['size']<2048*2048){

    if($_FILES['resim']['type']=="image/jpeg"){
        $isim = $_POST['kitapadi'];
        $yazar = $_POST['yazaradi'];
        $aciklama = $_POST['aciklama'];
        $fiyat = $_POST['kitapfiyat'];
        $dosya_adi = $_FILES['resim']['name'];
        $ekleyen = $_SESSION['user'];
    
        $uret=array("cv","fg","th","lu","er");
        $uzanti=substr($dosya_adi,-4,4);
        $sayi_tut=rand(1,10000);
        $yeni_ad="img/".$uret[rand(0,4)].$sayi_tut.$uzanti;
        if(move_uploaded_file($_FILES['resim']['tmp_name'],$yeni_ad)){
            echo "<script>alert('Dosya Yüklendi.');</script>";
            $sorgu = $db->prepare(" INSERT INTO urunler SET 
            isim=:isim,
            yazar=:yazar,
            aciklama=:aciklama,
            ekleyen=:ekleyen,
            fiyat=:fiyat,
            fotograf=:fotograf
             ");
             $sorgu->execute(array(
                 'isim'=> $isim,
                 'yazar'=>$yazar,
                 'aciklama'=> $aciklama,
                 'ekleyen'=> $ekleyen,
                 'fiyat'=> $fiyat,
                 'fotograf'=> $yeni_ad
             ));
            // header("Refresh: 3; url=home.php");
 
        }    
    }
    else{
        echo "<script>alert('Dosyanın uzantısı .jpeg olmalıdır.');</script>";
      //  header("Location:kitap-ekle.php");
     }
    }
else{
    echo "<script>alert('Dosyanızın boyutu çok büyük.');</script>";
   // header("Location:kitap-ekle.php");
 }
}




?>