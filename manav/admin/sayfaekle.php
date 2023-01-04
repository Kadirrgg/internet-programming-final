<?php
$sayfa = "urun";
include('../db.php');

if ($_POST) 
{ // Sayfada post olup olmadığını kontrol ediyoruz.
//---------------php------------------

    if (isset($_POST['baslik'])) {

      $conn 
  ->prepare("INSERT INTO `sayfalar` (baslik, sira, aktif, icerik) VALUES (?, ?, ?, ?)") 
  ->execute([$_POST['baslik'], $_POST['sira'], $_POST['aktif'], $_POST['icerik']]);
  
      echo "Sayfa Başarıyla Eklendi";
  
  }              
        
}  
    

?>
<!doctype html>
<html>

  <head>
    <link rel="stylesheet" href="css/panel.css">
    <meta charset="utf-8">
    <title>panel</title>
    <style>
      #customers {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
      }

      #customers td,
      #customers th {

        border: 1px solid #ddd;

        padding: 8px;

      }

      #customers tr:nth-child(even) {
        background-color: #F2F2F2;
      }


      #customers tr:hover {
        background-color: lightgreen;
      }

      tr:nth-child(1) {
        background-color: lightblue;
        transition: 0.9s;
      }


      #customers th {
        padding-bottom: 12px;
        padding-top: 12px;
        text-align: left;
        background-color: #04AA6D;
        padding-bottom: 12px;
        color: white;
      }

    </style>
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
        <button class="fas fa-home" onclick="location.href='../index.php'"> anasayfam</button>
            <button class="fas fa-home" onclick="location.href='sidebar.php'"> panel Giris</button>
          <!--------------sayfa ekleme ------------------>
          <div class="card mb-3">

            <div class="card-body">
              <form method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label>Başlık</label>
                  <input required type="text" class="form-control" name="baslik" placeholder="Başlık">
                </div>
                <label for="icerik">İçerik</label>
                <div class="form-group">

                  <textarea name="icerik" id="icerik" style="width: 40%; height: 150px;"></textarea>

                  <script>
                    ClassicEditor
                      .create(document.querySelector('#icerik'))
                      .then(editor => {
                        console.log(editor);
                      })
                      .catch(error => {
                        console.error(error);
                      });

                  </script>

                </div>

                <div class="form-group">
                  <label>Sıra</label>
                  <input required type="text" class="form-control" name="sira" placeholder="Sıra">
                </div>

                <div class="form-check">
                  <input type="checkbox" class="form-check-input" name="aktif" id="aktif">
                  <label class="form-check-label" for="aktif">Aktif mi?</label>
                </div>
                <div class="form-group">
                  <input type="submit" value="Sayfayı Ekle" />
                </div>

              </form>


            </div>
          </div>

        </div>
      </div>
    </div>

  </body>

</html>
