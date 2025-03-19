<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h3> Global Değişkenler</h3>
    <h4>$_FILES</h4>
    <li>Form içerisinde bir dosya gönderimi olacaksa mutlaka 
        enctype="multipart/form-data" 
        ifadesinin belirtilmesi gereklidir.
    </li>
    <li>Dosya gönderimininde Get metodu kullanılmaz.</li>
    <br><br>

     <form action="Ders-3d2.php" method="POST" enctype="multipart/form-data"> 

    <label>CV Yükleyiniz:</label>
    <input type="file" name="cv">
    <br>
    <input type="submit" value="Özgeçmiş Gönder">
    
    </form>












</body>
</html>