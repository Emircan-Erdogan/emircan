<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Kontrol Yapıları</h3>

<?php

if (3 > 5) {
    echo "Koşul Doğru";
} else {
    echo "Koşul Yanlış";
}


echo  "<h3>Farklı Kullanım Örneği</h3>";
if (3 > 5): 
    echo "Koşul Doğru";
else: 
    echo "Koşul Yanlış";
endif;


echo  "<h3>Fazla Koşul Kullanım Örneği</h3>";

if (3 > 10) {
    echo "Koşul Yanlış 3>10";
} else if (18 > 15) {
    echo "Koşul Doğru 18>15";
}  else {
    echo "Koşulların Dışında";
}


echo "<h3>Saat Uygulaması</h3>";

/*

Saat 0-24 arasında ise aiağıdaki işlemleri yapan değilse saat hatalı yazan koşullu ifadeyi yazınız.
0-6 arasında her saat başı iyi geceler
6-9 arası günaydın
9-17 arası iyi günler
17-22 arası iyi akşamlar
bunların dışında iyi geceler


*/



$saat = 6;

if ($saat >= 0 && $saat < 6) {
    echo "İyi Geceler";
}   
    if ($saat==1) {echo "İyi Geceler Saat {$saat}";}
    if ($saat==2) {echo "İyi Geceler Saat {$saat}";}
    if ($saat==3) {echo "İyi Geceler Saat {$saat}";}
    if ($saat==4) {echo "İyi Geceler Saat {$saat}";}
    if ($saat==5) {echo "İyi Geceler Saat {$saat}";}
    if ($saat==6) {echo "İyi Geceler Saat {$saat}";}

else if ($saat >= 6 && $saat < 9) {
    echo "Günaydın";
}
else if ($saat >= 9 && $saat < 17) {
    echo "İyi Günler";
}
else if ($saat >= 17 && $saat <= 22) {
    echo "İyi Akşamlar";
}
else {
    echo "Saat Hatalı";
}







?>

</body>
</html>