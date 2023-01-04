
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
        <a href="index.php">anasayfa</a>
        <a href="index.php#category">Kategori</a>
        <a href="index.php#contact">iletişim</a>
      </nav>

      <div id="login-buton">
        <button class="buton" onclick="location.href='login.php'">Giriş Yap</button>
      </div>
    </header>
    <!-------register yeri ------>
    <div class="login-form-container">

      <form action="register.php" method="POST">
        <h3>Giriş Yap</h3>
        <!-- <input type="name" placeholder="Ad ve soyad" name="name" class="box"> -->
        <input type="text" placeholder="Kullanıcı" name="kullanici" class="box">
        <input type="email" placeholder="Email" name="email" class="box">
        <input type="password" placeholder="Sifre" name="sifre" class="box">
       
		<button  class="buton" name="kaydet" >Kayıt ol</button>
      </form>
    </div>

    <div class="ana">
      <button class="butt" onclick="location.href='index.php'"> anasayfaya dön</button>

    </div>
    <!--footer alanı ----->

  </body>

</html>
<?php
include("db.php");
session_start();

if (isset($_POST["kaydet"])) {

  // $name = $_POST["name"];
  // $user = $_POST["user"];
  // $email = $_POST["email"];
  // $sifre = $_POST["sifre"];
  if (!$_POST['kullanici'] || !$_POST['email'] || !$_POST['sifre']) {
    echo " bos bıraktınız";
  }
  else{
    $ekle = $conn
    ->prepare("INSERT INTO `kullanicilar`( `kullanici`, `email`, `sifre`)VALUES (?, ?, ?)")
    ->execute([$_POST['kullanici'], $_POST['email'], $_POST['sifre']]);
 
    if ($ekle) {
      header("location:login.php");
      echo "basardın";
    }else {
      echo "hataverdi";
    }
  }
}

?>
