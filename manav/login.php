<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/login1.css">

  </head>

  <body>

    <header class="header">
      <a href="#" class="logo"><span>GÜNGÖR</span> MANAV</a>

      <nav class="navbar">
        <a href="index.php#home">anasayfa</a>
        <a href="index.php#category">Kategori</a>
        <a href="index.php#contact">iletişim</a>
      </nav>

      <div id="login-buton">
        <button class="buton">Giriş Yap</button>
      </div>
    </header>

    <div class="login-form-container">

      <form action="" method="POST">
        <h3>Giriş Yap</h3>
        <input type="email" placeholder="email" name="email" class="box">
        <input type="password" placeholder="sifre" name="sifre" class="box">
        <p>Şifremi Unuttum <a href="#">tıkla </a></p>
        <p>asd@gmail.com   / 123</p>
        <input type="submit" value="giriş yap" class="buton" name="giris"
        onclick="location.href='index.php'" >
      </form>
    </div>

    <div class="ana">
		<button  class="butt" onclick="location.href='register.php'">Kayıt ol</button>&nbsp;&nbsp;&nbsp;
    	<button class="butt" onclick="location.href='index.php'"> anasayfaya dön</button>&nbsp;&nbsp;&nbsp;
		<button class="butt" onclick="location.href='admin/admin.php'"> admin paneline giris</button>
    </div>
    <!--footer alanı ----->

  </body>

</html>
<?php
include("db.php");
session_start();

if (isset($_POST["giris"])) {

  $email = $_POST['email'];
  $sifre = $_POST['sifre'];
  if (!$_POST['email'] || !$_POST['sifre']) {
    echo " bos bıraktınız";
  }
  else{
    $ekle = $conn
      ->prepare("SELECT * FROM kullanicilar WHERE email = ? AND sifre = ?");
    //->execute([ $_POST['email'], $_POST['sifre']]);
    $ekle->execute(array($email, $sifre));
        $say = $ekle->fetch(PDO::FETCH_ASSOC);
    if ($say) {
      $_SESSION['email'] = $say["email"];
      $_SESSION['sifre'] = $say["sifre"];
      echo "<script>alert('giris yaptiniz')</script>";
      //header("location:index.php");
    }
    else {
      echo "<script>alert('hata yanlıs girdiniz')</script>";
    }

  }
}


?>