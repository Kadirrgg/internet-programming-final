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
          <table id="customers">
            <tr>
              <td>İD</td>
              <td>İsim</td>
              <td>Email</td>
              <td>Tel</td>
              <td>mesaj</td>
              <td>Gönderim tarihi</td>
            </tr>
            <!------------php-------------->
            <?php
        include "../db.php";

        //$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sec = $conn->prepare("SELECT * FROM iletisiö");
        $sec->execute();
         //$sonuc = $conn->query($sec); //gerek yok buna
        for ($i = 0; $cek = $sec->fetch(); $i++) {
          echo "
                  <tr>
                        <td>" . $cek['id'] . "</td>
                        <td>" . $cek['isim'] . "</td>
                        <td>" . $cek['email'] . "</td>
                        <td>" . $cek['tel'] . "</td>
                        <td>" . $cek['mesaj'] . "</td>
                        <td>" . $cek['tarih'] . "</td>
                    </tr>
                    ";
        }
 ?>
          </table>
        </div>
      </div>
    </div>

  </body>

</html>
