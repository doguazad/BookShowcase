<?php include("meta.php"); ?>
<body><center><h2>Kayıt Ol</h2></center>
    <div class="container" id="div_1">
    <form class="row g-3" action="adim2.php" method="POST" name="girisform">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">E-Posta</label>
    <input type="email" class="form-control" name="kayitemail" id="inputEmail4" required>
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Kullanıcı Adı</label>
    <input type="text" class="form-control" name="kayitkadi" id="inputPassword4"  placeholder="min 8 karekter"required  minlength="8" maxlength="16">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Şifre</label>
    <input type="password" class="form-control" name="kayitsifre1" id="inputPassword4"placeholder="min 8 karekter"required  minlength="8" maxlength="35"  required>
  </div>
  <div class="col-12">

    <center><button type="submit"  name="kayitbasket"class="btn btn-outline-success" id="btn">Kayıt Ol</button></center><br>
  </div>
</form>
    </div>
</body>
</html>