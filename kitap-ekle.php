<?php
include("baglanti.php");
session_start();
ob_start();
if(!isset($_SESSION["login"])){
header("Location:index.php");
}


?>
<?php include("meta.php"); ?>
<body><center><h2>Kitap Ekle</h2> </center><div class="container">
<form method="POST" action="kitap-ekle2.php" enctype="multipart/form-data" name="kitapyukle">
  <div class="mb-3 ">
    <label for="exampleInputEmail1" class="form-label">Kitap Adı</label>
    <input type="text" class="form-control" name="kitapadi"id="exampleInputEmail1" required maxlength="50" minlength="5" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3 ">
    <label for="exampleInputEmail1" class="form-label">Kitap Yazarı</label>
    <input type="text" class="form-control" name="yazaradi"id="exampleInputEmail1" required maxlength="50" minlength="5" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3 ">
    <label for="exampleInputEmail1" class="form-label">Kitap Fiyatı ₺ </label>
    <input type="number" class="form-control" name="kitapfiyat"id="exampleInputEmail11" max="999" min="15" required aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Kitap Açıklaması</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" name="aciklama" required  minlength="20" maxlength="75" rows="4" placeholder="20-500 karakter"></textarea>
</div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Kitap Fotoğrafı (.jpeg)</label>
    <input type="file" accept="image/jpeg" name="resim" class="form-control"  id="exampleInputPassword1">
    <label for="exampleInputPassword1" class="form-label">Max 2Mb</label>
  </div>

  <button type="submit" name="basket" class="btn btn-primary">Ekle</button>
</form></div>
</body>
</html>