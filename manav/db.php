<?php
try {
    $conn = new PDO("mysql:host=localhost;dbname=grocery;charset=utf8", 'root', '');
    
} 
catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    die();
} 
// $vt_sunucu="localhost";
// $vt_kullanici="root";
// $vt_sifre="";
// $vt_adi="grocery";
// $baglan=mysqli_connect($vt_sunucu, $vt_kullanici, $vt_sifre,
//  $vt_adi);
// if(!$baglan)
//      die ("Veritaban1 baglant1 ișlemi
//      bașaris1Z" .mysqli_connect_error());
// else {
//     echo "Baglant1 Bașarili";
// }



?>
