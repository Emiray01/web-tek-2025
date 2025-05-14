<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swich Case</title>
</head>
<body>
    <?php
    $deger=50;
    switch($deger)
    {
        case($deger<10):
        {
            echo "Değer 10'dan küçük";
            break;
        }
        case($deger<20):
        {
            echo "Değer 20'den küçük";
            break;
        }
        case($deger<30):
        {
            echo "Değer 30'dan küçük";
            break;
        }
        default:
            echo "Yapacak Birşey Yok......";
            break;
    }


    ?>
</body>
</html>