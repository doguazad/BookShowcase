<?php include("meta.php"); ?>
<body>
    <div id="div_1" class="container"><center><h2>Giriş Yap</h2></center>
    <div class="container">
    <form method="POST" name="login_form" action="giris.php"><center>
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label" id="inputEmail2">Kullanıcı Adı</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" name="login_email"required >
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label" id="inputPassword2">Şifre</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" name="login_password" required>
    </div>
  </div><a href="kayit.php">Kayıt Ol</a></center>

  <br>
  <center><button type="submit" class="btn btn-outline-success">Giriş Yap</button></center>
</form>

    </div></div>
    
</body>
</html>