<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>koşullar</title>
</head>
<body>
    <?php
    if(3>5)
    {
        echo "koşul doğru";
    }
    else
    {
        echo "koşul yanlış";
    }
    echo "<h3>Farklı kullanım örneği</h3>";
    if(3>5) :
        echo "koşul doğru";
    else :
        echo "koşul yanlış";
    endif;
    echo "<h3>Fazla koşul kullanım örneği</h3>";
    if(3<10)
    {
        echo "sayı 3 ile 10 arasındadır";
    }
    else if(10<15)
    {
        echo "sayı 10 ile 15 arasındadır";
    }
    else
    {
        echo "Koşul Yanlış";
    }
    echo "<h3>Saat Uygulaması:</h3>";
    $saat =13;
    if($saat>0 && $saat<=6)
    {
        echo "iyi geceler. saat: ",$saat;
    }
    elseif($saat>6 && $saat<=9)
    {
        echo "günaydın. saat: ",$saat;
    }
    elseif($saat>9 && $saat<=17)
    {
        echo "iyi günler. saat: ",$saat;
    }
    elseif($saat>17 && $saat<=24)
    {
        echo "iyi akşamlar. saat: ",$saat;
    }
    else
    {
        echo "saat değeri geçersiz";
    }

    ?>
</body>
</html>