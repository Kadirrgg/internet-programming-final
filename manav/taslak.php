<?php

try {
    $conn = new PDO("mysql:host=localhost;dbname=grocery;charset=utf8", 'root', '');
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    die();
} 

$conn 
->prepare("INSERT INTO `kullanicilar`(`kullanicilar`) VALUES (?)") 
->execute(['yorum içeriği']); 

$conn
->prepare("UPDATE users SET email = ? WHERE id = ?")
->execute(['Yiğit', 3]);
