<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ders2</title>
</head>
<body>
    <h3>Sık Kullanılan Hazır Fonksiyonlar</h3>
    <?php
    $metin = "aydın adnan menderes üniversitesi";
    $byazi = strtoupper($metin);//yazıyı büyük harfe dönüştürür
    $kyazi = strtolower($byazi);//yazıyı küçük harfe dönüştürür
    $mb_byazi = mb_strtoupper($kyazi);//yazıyı büyük harfe dönüştürür
    $mb_kyazi = mb_strtolower($mb_byazi); //yazıyı küçük harfe dönüştürür
    echo $ilkharf_buyuk_metin = ucfirst($mb_kyazi);//gelen metnin ilk harfini büyütür
    $ilkharf_buyuk_kelime = ucwords($mb_kyazi);//gelen metnin kelimelerinin ilk harfini büyütür
    echo "<br> karakter sayısı:".strlen($metin);
    echo "<br> Metnin Belirli Bir Karakte Sayısı:".substr($metin,0,10);
    ?>
    <p>Lorem Metninin ilk 100 harfini alın devamında bir buton yerleştirerek adü web sitesine yönlendirsin</p>
    <?php
    $lorem = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus excepturi rerum, 
    ullam tempora deleniti voluptas quasi fuga natus ipsam dolores iste 
    reiciendis veniam architecto labore voluptates facere nam eum vero!" ;
    echo substr($lorem,0,100)."...";
    ?>
    <a href="http://www.adu.edu.tr"target="_Blank">Devamı için tıklayınız</a>
</body>
</html>