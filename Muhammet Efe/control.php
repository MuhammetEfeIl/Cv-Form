<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<h1>Tebrikler</h1>
	<?php
	$tc=$_POST["tc"];
	$adsoyad=$_POST["adSoyad"];
	$yas=$_POST["yas"];
	$ePosta=$_POST["ePosta"];
	$profil=$_POST["fileToUpload"];
	$tarih=$_POST["tarih"];
	$uploadDir = ["uploads/"];
 	$fileName = basename($_FILES["fileToUpload"]["name"]);
    $targetFilePath = $uploadDir . $fileName;
    $fileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));
    $allowedTypes = array("jpg", "jpeg", "png", "gif");
    if (in_array($fileType, $allowedTypes)) 
    {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFilePath)) {
            echo "Fotoğraf başarıyla yüklendi.";
        } 
        else 
        {
            echo "Fotoğraf yüklenirken bir hata oluştu.";
        }
    } 
    else 
    {
        echo "Sadece JPG, JPEG, PNG & GIF dosyaları kabul edilir. <br>";
    }


	
	$pdil=$_POST["pDil"];

	echo "Tc No: $tc";
	echo "Ad Soyad: $adsoyad <br>";
	echo "Yaşınız: $yas <br>";
	echo "E Posta: $ePosta <br>";
	echo "Profil: $profil <br>";
	echo "Tarih:  $tarih <br>";
	echo "Bilinen Diller: $pdil <br>";
?>

</body>
</html>

