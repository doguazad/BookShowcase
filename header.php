<script>var myModal = document.getElementById('myModal')
var myInput = document.getElementById('myInput')

myModal.addEventListener('shown.bs.modal', function () {
  myInput.focus()
})</script>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="navbar-brand" aria-current="page" href="home.php">Ana sayfa</a>
        </li>
        <li class="nav-item">
          <a class="navbar-brand" aria-current="page" href="kitap-ekle.php">Kitap Ekle</a>
        </li>
        <li class="nav-item">
          <a class="navbar-brand" aria-current="page" href="hakkimizda.php">Hakkımızda</a>
        </li>
        <li class="nav-item">
          <a class="navbar-brand" aria-current="page" href="hesabim.php">Hesabım</a>
        </li>


      </ul>
      <form class="d-flex" action="arama.php" method="POST">
        <input class="form-control me-2" type="search" placeholder="Kitap Ara" name="arama" aria-label="Search" required>
        <button class="btn btn-outline-success" type="submit">Ara</button>
      </form>
    </div>
  </div>
</nav>