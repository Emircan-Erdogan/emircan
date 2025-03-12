<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Ders-2</title>
</head>
<body>
    <!--
   Değiken Tanımlama:
1- Değişkenler $ işareti ile tanımlanır.
2- Mutlaka bir harf veya _ işareti ile başlayabilir.
3- Değişkenler rakamlar ile başlamaz.
4- Değişken içersinde boşluk ve Türkçe karakter kullanılmaz.
5- Değişkenlerde büyük küçük harf duyarlılığı vardır.
6- Programlama dili içerisinde bulunan özel tanımlar değişken ismi olarak kullanılamaz.
    -->

<h4>Matematiksel İfadeler</h4>
<h5>Toplama İşlemi</h5>
<?php
$sayi1 = 20;                                            //Sayı1 değişkeni tanımlandı.
$sayi2 = 17;                                            //Sayı2 değikeni tanımlandı.
$sonuc = $sayi1 + $sayi2;                               //Toplama işlemi yapıldı.
echo $sonuc;                                            //Sonuç ekrana yazdırıldı.
echo "<br>İşlemin Sonucu: $sayi1 + $sayi2 = $sonuc";    //Sonuç ekrana yazdırıldı.

echo "<br><br> Atamalı Toplama İşlemi:";
$deger = 10;
$ekdeger = 59;
echo "<br>Sonuç: $deger + $ekdeger = " . $deger += $ekdeger;
echo "<br>Değer Değişkeninin İçeriği: $deger";
echo "<br>Değer Değişkeninin Yeni İçeriği:" . $deger += 123;
echo "<br>Değer Değişkeninin Son İçeriği:  $deger";
?>


<h5>Çıkarma İşlemi</h5>
<?php
$sayi1 = 50;                                            //Sayı1 değişkeni tanımlandı.
$sayi2 = 77;                                            //Sayı2 değikeni tanımlandı.
$sonuc = $sayi1 - $sayi2;                               //Çıkarma işlemi yapıldı.
echo $sonuc;                                            //Sonuç ekrana yazdırıldı.
echo "<br>İşlemin Sonucu: $sayi1 - $sayi2 = $sonuc";    //Sonuç ekrana yazdırıldı.

echo "<br><br> Atamalı Çıkarma İşlemi:";
$deger = 120;
$ekdeger = 72;
echo "<br>Sonuç: $deger - $ekdeger = " . $deger -= $ekdeger;
echo "<br>Değer Değişkeninin İçeriği: $deger";
echo "<br>Değer Değişkeninin Yeni İçeriği:" . $deger -= 123;
echo "<br>Değer Değişkeninin Son İçeriği:  $deger";
?>


<h5>Çarpma İşlemi</h5>
<?php
$sayi1 = 50;                                            //Sayı1 değişkeni tanımlandı.
$sayi2 = 77;                                            //Sayı2 değikeni tanımlandı.
$sonuc = $sayi1 * $sayi2;                               //Çarpma işlemi yapıldı.
echo $sonuc;                                            //Sonuç ekrana yazdırıldı.
echo "<br>İşlemin Sonucu: $sayi1 * $sayi2 = $sonuc";    //Sonuç ekrana yazdırıldı.

echo "<br><br> Atamalı Çarpma İşlemi:";
$deger = 120;
$ekdeger = 72;
echo "<br>Sonuç: $deger * $ekdeger = " . $deger *= $ekdeger;
echo "<br>Değer Değişkeninin İçeriği: $deger";
echo "<br>Değer Değişkeninin Yeni İçeriği:" . $deger *= 123;
echo "<br>Değer Değişkeninin Son İçeriği:  $deger";
?>


<h5>Bölme İşlemi</h5>
<?php
$sayi1 = 50;                                            //Sayı1 değişkeni tanımlandı.
$sayi2 = 13;                                            //Sayı2 değikeni tanımlandı.
$sonuc = $sayi1 / $sayi2;                               //Bölme işlemi yapıldı.
echo $sonuc;                                            //Sonuç ekrana yazdırıldı.
echo "<br>İşlemin Sonucu: $sayi1 / $sayi2 = $sonuc";    //Sonuç ekrana yazdırıldı.

echo "<br><br> Atamalı Bölme İşlemi:";
$deger = 120;
$ekdeger = 72;
echo "<br>Sonuç: $deger / $ekdeger = " . $deger *= $ekdeger;
echo "<br>Değer Değişkeninin İçeriği: $deger";
echo "<br>Değer Değişkeninin Yeni İçeriği:" . $deger /= 123;
echo "<br>Değer Değişkeninin Son İçeriği:  $deger";

?>

</body>
</html>