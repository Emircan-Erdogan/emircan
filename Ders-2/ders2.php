<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ders-2</title>
</head>
<body>

<h5>Mod İşlemi</h5>
<?php
$sayi1 = 50;
$sayi2 = 10;
$sonuc = $sayi1 % $sayi2;
echo $sonuc;
echo "<br>İşlemin Sonucu: $sayi1 % $sayi2 = $sonuc:";
?>


<h5>Arttırma İşlemi</h5>
<?php
$sayi1 = 50;
echo "<br>Arttırma İşlemi Yapıldı:" . $sayi1++;  /*Bu satırda hala $sayi değeriniyazacaktır fakat 
                                                 bir sonraki değikeni çağırdığımız satırda değişkenin 1 arttırıldığı görünütlenecektir. 
                                                 Değişkenin sağında bulunan ++ ifadesi satır yorumlandıktan sonra arttırma işlemini yapar.*/
echo "<br>İşlemin Sayi:" . $sayi1;


$sayi2 = 20;
echo "<br>Arttırma İşlemi Yapıldı:" .++$sayi2;  /*Değikenin solunda bulunan ++ ifadesi değişkenin değerinin öncelikli olarak 
                                                 arttırılmasını sağlar.*/
echo "<br>Değişkenin Değeri:" . $sayi2;
?>

<h6>Temel Uygulama Örneği</h6>
<?php

$sayi1 = 6;
echo "<hr><br>" . $sayi1++;
echo "<br>" . $sayi1++;
echo "<br>" . $sayi1++;



$sayi2 = 6;
echo "<hr><br>" . ++$sayi2;
echo "<br>" . ++$sayi2;
echo "<br>" . ++$sayi2;
?>
















</body>
</html>