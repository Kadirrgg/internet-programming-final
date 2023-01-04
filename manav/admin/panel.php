<?php

include('../db.php');

?>
<!doctype html>
<html>

  <head>
    <link rel="stylesheet" href="css/panel.css">
    <meta charset="utf-8">
    <title>panel</title>
    <style>
      table {
        border-collapse: collapse;
      }

      td,
      th {
        padding: 5px;
      }

    </style>

  </head>

  <body>
    <!-------------php----------------->
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
          <div class="card mb-3">
            <!------------------------------------bundan sonra------------------------>
            <button class="fas fa-home" onclick="location.href='../index.php'"> anasayfam</button>
            <button class="fas fa-home" onclick="location.href='sidebar.php'"> panel Giris</button>
            <div id="content-wrapper">

              <div class="container-fluid">

                <!-- Breadcrumbs-->
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="#">Dashboard</a>
                  </li>
                  <li class="breadcrumb-item active">Ürünler</li>
                </ol>
                <form action="" method="post">
                  <a class="btn btn-primary" href="urunEkle.php">Yeni Ürün Ekle</a>

                  <a class="btn btn-danger font-18" href="#" data-toggle="modal" data-target="#tumunuSil"><i class="fa fa-trash"> Seçilenleri sil</i></a>
                  <!-- Logout Modal-->
                  <div class="modal fade" id="tumunuSil" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">İçerik</h5>
                          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                          </button>
                        </div>
                        <div class="modal-body">Seçilen tüm ürünler silinecektir.</div>
                        <div class="modal-footer">

                          <button type="submit" class="btn btn-danger font-18"><i class="fa fa-trash"> Seçilenleri
                              sil</i></button>
                          <button class="btn btn-secondary" type="button" data-dismiss="modal">Kapat
                          </button>

                        </div>
                      </div>
                    </div>
                  </div>


                  <br><br>

                  <!-- DataTables Example -->
                  <?php session_start(); ?>
                                    <h3>ürünler</h3>
                                    <table border="1" width=1000px>
                                        <thead>
                                        <th>ürün adi</th>
                                        <th>fiyat</th>
                                        <th>ürün adet</th>
                                        <th>tutar</th>
                                        <th>[sil]</th>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <?php

                    $urun = $conn->prepare("SELECT * FROM urun ");
                    $urun->execute();

                    $urun = $urun->fetchAll()[0];
        
        ?>



                      </tr>
                    </tbody>

                  </table>
                </form>
              </div>
            </div>

  </body>

</html>
