
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style>
            table{
                border-collapse: collapse;
            }
            td,th{
                padding: 5px;
            }
    </style>

    <title>sepetim</title>
</head>
<body>
    <?php session_start(); ?>
    <h3>sepetim</h3>
<table border="1">
    <thead>
        <th>ürün adi</th>
        <th>fiyat</th>
        <th>ürün adet</th>
        <th>tutar</th>
        <th>[sil]</th>
    </thead>
    <tbody>
        <?php include("../db.php");
        //foreach($_SESSION["urunliste"] as $urun) {print_r($urun) ?>



        <?php //}
        $urun = $conn->query("SELECT * FROM urun ORDER BY id ASC");

        foreach ($urun->fetchAll() as $urun) {
        }
        ?>
        



    </tbody>

</table>
    
</body>
</html>