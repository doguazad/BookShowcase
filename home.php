<?php
include("baglanti.php");
session_start();
ob_start();
if(!isset($_SESSION["login"])){
header("Location:index.php");
}
$cek = $db->query("select * from urunler where isim  ",PDO::FETCH_ASSOC);

$resimcek = $db->prepare("SELECT * FROM urunler");
$resimcek->execute(); 
?>

<?php include("meta.php"); ?>
<body>
<?php include("header.php");?>
<br>
<?php
if($resimcek->rowCount()){ 
foreach($resimcek as $row){ 

?>
<div class="container">
<div class="card mb-3" >
  <div class="row g-0">
    <div class="col-md-4">
      <img src="<?php echo $row["fotograf"];?>" id="urunresim_1" class="img-fluid rounded-start" alt="..." width="370px">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?php echo $row["isim"];?> - <?php echo $row["yazar"];?></h5><hr
        <p class="card-text"><h5 class="card-title">Kitap Bilgileri:</h5></p>
        <p class="card-text"><i><b>Kitap Açıklaması:</b>"</i><?php echo $row["aciklama"];?>"</p>
        <p class="card-text"><i><b>Kitap Fiyatı:</b></i> <?php echo $row["fiyat"];?> ₺</p>
        <p class="card-text"><i><b>Eklenme Tarihi:</b></i> <?php echo $row["tarih"];?> </p>
        <p class="card-text"><i><b>Ekleyen:</b></i> <?php echo $row["ekleyen"];?> </p>
        <p class="card-text"><small class="text-muted">Kitap Kodu: <?php echo"0000";echo $row["id"];?></small></p>
      </div>
    </div>
  </div>
</div>
</div>
<?php }}?>


</body>
</html>

