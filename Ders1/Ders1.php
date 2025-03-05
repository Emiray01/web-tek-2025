<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Ders1</title>
</head>
<body>
    <?php
       // phpinfo();//php bilgilerini gösterir
       echo "Aydın Adnan Menderes Üniversitesi Aydın MYO Bilgisayar Programcılığı";
       //php içerisinde html etiketleri kullanılabilir
       echo "<br> Aydın Adnan Menderes Üniversitesi <br> Aydın MYO Bilgisayar Programcılığı<br>";
        //değişken kullanımı
       $metin="Aydın Adnan Menderes Üniversitesi Aydın MYO Bilgisayar Programcılığı";
       echo $metin,"<br>";
       $buyukharf = mb_strtoupper($metin);//metni büyük harfe çevirir mb_ komutu string kütüphanesi
       $kucukharf = mb_strtolower($metin);//metni küçük harfe çevirir
       echo $kucukharf,"<br>";
       echo $buyukharf,"<br>";
    ?>
</body>
</html>