<!doctype html>
<html>

  <head>
    <link rel="stylesheet" href="css/panel.css">
    <meta charset="utf-8">
    <title>panel</title>
    <style>
      table {
        padding: 20px;
        text-align: center;
      }

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
          <!-----------burdan baslar---->
          <div>
          <button class="fas fa-home" onclick="location.href='../index.php'"> anasayfam</button>
            <button class="fas fa-home" onclick="location.href='sidebar.php'"> panel Giris</button>

            <!---------------sayfa------------>

            <table width=100%>
              <tr>
                <th>
                  ID
                  </td>
                <th>
                  Başlık
                </th>
                <th>
                  Aktif Mi
                </th>
                <th>
                  icerik
                </th>
                <th>
                  İşlem
                </th>
              </tr>
              <!-------------php------------------->
              <?php
                include("../db.php");
                $sayfalar = $conn->query("SELECT * FROM sayfalar ORDER BY sira ASC");

                foreach ($sayfalar->fetchAll() as $sayfa) {

                    echo '<tr>
                    <td>
                        '.$sayfa['id'].'
                    </td>
                    <td>
                        '.$sayfa['baslik'].'
                    </td>
                    <td>
                        '.$sayfa['aktif'].'
                    </td>
                    <td>
                        '.$sayfa['icerik'].'
                    </td>
                    <td>
                    <a href="sayfaduzenle.php?id='.$sayfa['id'].'">Düzenle</a>
                    <a href="sil.php?id='.$sayfa['id'].'">Sil</a>
                    </td>
                </tr>';

                }

                ?>
            </table>
          </div>

        </div>
      </div>
    </div>

  </body>

</html>
