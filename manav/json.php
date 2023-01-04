<?php
//include("db.php");


$dbh = new PDO("mysql:host=localhost;dbname=grocery", "root", "");
$stmt = $dbh->query("SELECT email,sifre FROM kullanicilar");
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
//print_r($rows);
$liste = array();
foreach ($rows as $row) {
   $list = array();
  // $list["id"] = $row["id"];
   //$list["isim"] = $row["kullanici"];
   $list["user"] = $row["email"]; 
   $list["password"] = $row["sifre"];
  
   array_push($liste, $list);

}
echo json_encode($liste);





// $cURLConnection = curl_init();

// curl_setopt($cURLConnection, CURLOPT_URL, 'https://github.com/safaorhan/migrosdb/blob/master/migros.min.json');
// curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);

// $response = curl_exec($cURLConnection);
// curl_close($cURLConnection);

// print_r($response);



// $ekle = $conn
//       ->prepare("SELECT * FROM kullanicilar WHERE email = ?");
//         $ekle->execute();
//       $sonuc = array();
//      // $ekle = $ekle->fetchAll()[0];
//       while($ekle=pg_fetch_assoc($ekle)) {
//         $sonuc[] = $yaz;
//        }
//        echo json_encode($sonuc);


// $q = "SELECT * FROM kullanicilar";
// $sql = $conn->prepare($q);
// $sql->execute();
// if ($sql->rowCount()!=0){
// 	$bilgiler=array();
// 	$data=array();
// 	foreach ($sql as $key) {
// 		$data["email"]=$key["email"];
		
// 		array_push($bilgiler, $data);
// 	}
// 	file_put_contents("dosya.json", json_encode($bilgiler));
// }


// $site="https://github.com/safaorhan/migrosdb/blob/master/migros-trfix.json";
// $kr=file_get_contents($site);
// $KrJson=json_decode($kr,true);
// foreach ($KrJson as $key => $value){
// 	$krcek=$value["number"];
// 	echo $krcek ."<br/>";
// }
?>