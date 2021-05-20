<!doctype html>
<html lang="tr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!-- Css -->
	  <link rel="stylesheet" href="style.css">

    <!-- ikon font-->
    <script src="https://kit.fontawesome.com/026b5b3e74.js" crossorigin="anonymous"></script>

    <!-- font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">

    <tittle></tittle>
  </head>
  <body>
    <!-- menü başlangıç -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Web Teknolojileri Projesi</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="anasayfa.html">Anasayfa</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="ozgecmisim.html">Özgeçmişim</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="memleketim.html">Memleketim</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="takımımız.html">Takımımız</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="ilgialanlarim.html">İlgi Alanlarım</a>
              </li>
              <li class="nav-item">
                <a href="iletisim.html" class="nav-link">İletişim</a>
              </li>
              <li class="nav-item">
                <a href="login.php" class="nav-link active  text-white">
                    <i class="fas fa-sign-in-alt"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
    </nav>
    <!-- menü bitiş-->
    <!--giriş ekranı başlangıç-->
    <br><br><br>
    <section class="p-5 text-center hakkımda">
        <div class="container">
          <h1 class="mb-5 font-weight-bold">Giriş Ekranı</h1>
          <hr class="ayraç"><i class="fas fa-ice-cream igri"></i>
          <br>
          <form action="logingiriş.php" method="POST">
           <br>
           <div class="mb-3">
             <label for="exampleInputEmail1" class="form-label">E-Mail</label>
             <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required="required">
           </div>
           <br>
           <div class="mb-3">
             <label for="exampleInputPassword1" class="form-label">Şifre</label>
             <input type="password" name="password" class="form-control" id="exampleInputPassword1" required="required">
           </div>
           <br>
           <button type="submit" class="btn btn-dark">Giriş</button>
           <br>
          </form>
          <hr class="ayraç"><i class="fas fa-ice-cream igri"></i>
        </div>
    </section>
    <br><br>
    <!--giriş ekranı bitiş-->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
    <footer class="py-4 bg-dark text-white text-center">
      Web-Teknolojileri-Projesi © Mehmet Arı 2021
    </footer>
  </body>
</html>