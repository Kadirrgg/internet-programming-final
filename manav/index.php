<!DOCTYPE html>
<html lang="tr">

  <head>
    <meta charset="UTF-8">
    <title>GÜNGÖR MANAV</title>
    <!-- font linkleri -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- css yeri  -->
    <link rel="stylesheet" href="css/style.css">

  </head>

  <body>
    <!-- menu -->
    <header class="header">
      <a href="#" class="logo"><span>GÜNGÖR</span> MANAV</a>

      <nav class="navbar">
        <a href="#home">anasayfa</a>
        <a href="#category">Kategori</a>
        <!-- <a href="#vehicles">araçlar</a> -->
        <a href="#contact">iletişim</a>
      </nav>

      <div id="login-buton">
        <button class="buton" onclick="location.href='login.php'">Giris Yap</button>
      </div>
    </header>
    <!-- ana sayfa -->
    <section class="home" id="home">
      <h1>Manava Hoş Geldiniz
        Sebze Dükkanı</h1>
      <img src="image/img2.png" alt="">
    </section>

    <!------------kategoriler------------>
    <section class="category" id="category">
      <h1 class="heading"> <span>Kategoriler</span> </h1>

      <div class="box-container">

        <div class="box">
		<img src="image/meyve.png" alt="" width="200px">
          <h3>MEYVE</h3>
          <a href="#" class="buton" onclick="location.href='category/meyve.php'">Meyve</a>
        </div>

        <div class="box">
		<img src="image/sebze.png" alt="" width="300px">
          <h3>SEBZE</h3>
          <a href="#" class="buton"  onclick="location.href='category/sebze.php'">Sebze</a>
        </div>

      </div>

    </section>

    <!----- iletişim kodları ----->
    <section class="contact" id="contact">

      <h1 class="heading"><span>İletişim</span> Bilgileri</h1>
      <div class="row">
        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d98635.4278661441!2d29.91700103364832!3d39.416048200612465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c948171562e423%3A0x7357c4e7ede1b93c!2zS8O8dGFoeWEsIEvDvHRhaHlhIE1lcmtlei9Lw7x0YWh5YQ!5e0!3m2!1str!2str!4v1652876593059!5m2!1str!2str" allowfullscreen="" loading="lazy"></iframe>

        <form action="index.php" method="POST">
          <h3>Bize Ulaşmak İçin</h3>
          <input type="text" placeholder="İsim" name="isim" class="box">
          <input type="email" placeholder="Email" name="email" class="box">
          <input type="number" placeholder="Telefon Numarası" name="tel" class="box">
          <textarea placeholder="Mesajınızı yazınız" name="mesaj" class="box" cols="30" rows="10"></textarea>
          <input type="submit" value="Mesajı Gönder" class="buton">

        </form>
      </div>

      <!--footer alani ----->

  </body>

</html>
<?php
	include ("db.php");
	if (isset($_POST['isim'],$_POST['email'],$_POST['tel'],$_POST['mesaj']))
	{
	$isim = $_POST["isim"];
	$email = $_POST["email"];
	$tel = $_POST["tel"];
	$mesaj = $_POST["mesaj"];

	$ekle = "INSERT INTO  iletisiö (isim, email, tel, mesaj) 
	VALUES ('".$isim."','".$email."','".$tel."','".$mesaj ."')";

		if($conn->query($ekle)==true ){
			echo "<script>alert('mesajınız iletildi')</script>";
		}
		else {
			echo "<script>alert('hata gitmedi')</scipt>";
		}
	}
?>
