<?php
// $sayfa = "Ürünler";
 include('../db.php');
?>
<!doctype html>
<html>

  <head>
    <link rel="stylesheet" href="css/panel.css">
    <meta charset="utf-8">
    <title>panel</title>
  </head>

  <body>
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

    <div class="wrapper">
      <div class="sidebar">
        <h2>ADMİN</h2>
        <ul>
          <li><a href="panel.php"><i class="fas fa-home"></i>Panel</a></li>
          <li><a href="yorum.php"><i class="fas fa-user"></i>Yorumlar</a></li>
          <li><a href="sidebar.php"><i class="fas fa-address-card"></i>Giris</a></li>
          <li><a href="uye.php"><i class="fas fa-address-book"></i>Üyeler</a></li>
          <li><a href="sayfa.php"><i class="fas fa-project-diagram"></i>sayfa</a></li>
          <li><a href="sayfaekle.php"><i class="fas fa-blog"></i>Sayfa Ekleme</a></li>
        </ul>
        <div class="social_media">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
      </div>
      <div class="main_content">
        <div class="header">Hoşgeldiniz. İyi günler</div>
        <div class="info">
          <div> merhaba panele hoşgeldiniz.</div>
          <button class="fas fa-home" onclick="location.href='../index.php'"> anasayfam</button>
            <button class="fas fa-home" onclick="location.href='sidebar.php'"> panel Giris</button>

        </div>
      </div>
    </div>

  </body>

</html>
