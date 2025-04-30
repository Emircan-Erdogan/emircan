<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diziler</title>
</head>

<body>
    Çok Boyutlu Diziler:
    <hr>

    <?php
    $degerler = array(
        "pop",
        "klasik",
        "rock",
        array(
            "anadolu rock",
            "hard rock",
            "soft rock",
            "alt rock"
        ),
        "jazz",
        "blues",
        "techno",
        array(
            "metal",
            array(
                "heavy metal",
                "death metal",
                "melodic death metal"
            ),
            "experimental",
            "psychedelic"
        )
    );
    echo "<pre>";
    print_r($degerler);
    echo "</pre>";

    echo "1. Boyuttaki Elemana Erişim: " . $degerler[0] . "<br>";
    echo "1. Boyuttaki Elemana Erişim: " . $degerler[2] . "<br>";
    echo "2. Boyuttaki Elemana Erişim: " . $degerler[3][2] . "<br>";
    echo "2. Boyuttaki Elemana Erişim: " . $degerler[7][0] . "<br>";
    echo "3. Boyuttaki Elemana Erişim: " . $degerler[7][1][0] . "<br>";
    echo "3. Boyuttaki Elemana Erişim: " . $degerler[7][1][1] . "<br>";
    echo "3. Boyuttaki Elemana Erişim: " . $degerler[7][1][2] . "<br>";

    ?>